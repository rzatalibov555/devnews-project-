<?php 

class AdminController extends CI_Controller{

    public function index(){
        $this->load->view('admin/auth-login-basic');
    }

    public function login_act(){
        $email = $_POST['email'];
        $pass  = $_POST['password'];

        if(!empty($email) && !empty($pass)){
            
            $data = [
                'a_mail' => $email,
                'a_password' => md5($pass),
            ];

            // print_r('<pre>');
            // print_r($data);
            // die();

            $check_admin = $this->db->where($data)->get('admin')->row_array();

            if($check_admin){
               
                $_SESSION['admin_login_id'] = $check_admin['a_id'];
                redirect(base_url('admin_dashboard'));

            }else{
                $this->session->set_flashdata('err', 'Email ve ya sifre yalnisdir!');
                redirect($_SERVER['HTTP_REFERER']);
            }    

        }else{
            $this->session->set_flashdata('err', 'Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function log_out(){
        $this->session->set_flashdata('success', 'Sizi gozleyeceyem!');
        unset($_SESSION['admin_login_id']);
        redirect(base_url('login_dashboard'));
    }

    public function dashboard(){

        $data['admin'] = $this->db->where('a_id',$_SESSION['admin_login_id'])->get('admin')->row_array();
        $this->load->view('admin/index',$data);
    }

    // ====================== NEWS START ============================

    public function news(){
        $data['get_all_news'] = $this->db
        ->order_by('n_id','DESC')
        ->join('admin','admin.a_id = news.n_creator_id','left')
        ->get('news')->result_array();

        $this->load->view('admin/news/news',$data);
    }

    public function news_create(){
        $this->load->view('admin/news/create');
    }

    public function news_create_act(){
        
        $title          = $_POST['title'];
        $description    = $_POST['description'];
        $date           = $_POST['date'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if(!empty($title) && !empty($description) && !empty($date) && !empty($category) && !empty($status)){

            $data = [
                'n_title'       => $title,
                'n_description' => $description,
                'n_date'        => $date,
                'n_category'    => $category,
                'n_status'      => $status,
                // 'n_img' => "",
                'n_creator_id' => $_SESSION['admin_login_id'],
                'n_create_date' => date("Y-m-d H:i:s")
            ];
    
            // insert to db code
            $this->db->insert('news',$data);
    
            // notification
            $this->session->set_flashdata('success',"Xəbər uğurla əlavə olundu!");
            
            // redirect page
            redirect(base_url('admin_news'));

        }else{
            $this->session->set_flashdata('err',"Boşluq buraxmayın!");
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    // ====================== NEWS END   ============================


}