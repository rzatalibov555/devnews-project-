<?php

class AdminController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
    }

    public function index()
    {
        $this->load->view('admin/auth-login-basic');
    }

    public function login_act()
    {
        $email = $_POST['email'];
        $pass  = $_POST['password'];

        if (!empty($email) && !empty($pass)) {

            $data = [
                'a_mail' => $email,
                'a_password' => md5($pass),
            ];

            // print_r('<pre>');
            // print_r($data);
            // die();

            $check_admin = $this->db->where($data)->get('admin')->row_array();

            if ($check_admin) {

                $_SESSION['admin_login_id'] = $check_admin['a_id'];
                redirect(base_url('admin_dashboard'));
            } else {
                $this->session->set_flashdata('err', 'Email ve ya sifre yalnisdir!');
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            $this->session->set_flashdata('err', 'Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function log_out()
    {
        $this->session->set_flashdata('success', 'Sizi gozleyeceyem!');
        unset($_SESSION['admin_login_id']);
        redirect(base_url('login_dashboard'));
    }

    public function dashboard()
    {

        $data['admin'] = $this->db->where('a_id', $_SESSION['admin_login_id'])->get('admin')->row_array();
        $this->load->view('admin/index', $data);
    }

    // ====================== NEWS START ============================

    public function news()
    {
        $data['get_all_news'] = $this->News_model->get_all_news();

        $this->load->view('admin/news/news', $data);
    }

    public function news_create()
    {
        $this->load->view('admin/news/create');
    }

    public function news_create_act()
    {

        $title          = $_POST['title'];
        $description    = $_POST['description'];
        $date           = $_POST['date'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if (!empty($title) && !empty($description) && !empty($date) && !empty($category) && !empty($status)) {


            $config['upload_path']          = './uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|mp3|jpeg|pdf';
            $config['encrypt_name']         = TRUE;
            // $config['max_size']             = 10000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_img')){
                $file_name = $this->upload->data('file_name');
                $file_ext = $this->upload->data('file_ext');


                $data = [
                    'n_title'       => $title,
                    'n_description' => $description,
                    'n_date'        => $date,
                    'n_category'    => $category,
                    'n_status'      => $status,
                    'n_img'         => $file_name,
                    'n_file_ext'    => $file_ext,
                    'n_creator_id'  => $_SESSION['admin_login_id'],
                    'n_create_date' => date("Y-m-d H:i:s")
                ];
                
                // insert to db code
                $this->News_model->insert_news($data);
                 
                // notification
                $this->session->set_flashdata('success', "Xəbər uğurla əlavə olundu!");
    
                // redirect page
                redirect(base_url('admin_news'));

            }else{
                $data = [
                    'n_title'       => $title,
                    'n_description' => $description,
                    'n_date'        => $date,
                    'n_category'    => $category,
                    'n_status'      => $status,
                    'n_creator_id'  => $_SESSION['admin_login_id'],
                    'n_create_date' => date("Y-m-d H:i:s")
                ];
                
                // insert to db code
                $this->News_model->insert_news($data);
                $this->session->set_flashdata('success', "Xəbər uğurla əlavə olundu!");
                redirect(base_url('admin_news'));
            }

        } else {
            $this->session->set_flashdata('err', "Boşluq buraxmayın!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    // ====================== NEWS END   ============================

    public function delete_news($id)
    {
        $this->News_model->delete_news_from_id($id);
        $this->session->set_flashdata('success', "Məlumat uğurla silindi!");
        redirect(base_url('admin_news'));
    }

    public function news_detail($id){

        $data['single_news'] = $this->News_model->get_single_news($id);
        // print_r('<pre>');
        // print_r($data['single_news']);
        // die();


        $this->load->view('admin/news/detail',$data);
    }

    public function news_edit($id){
        $data['get_single_data'] = $this->db->where('n_id',$id)->get('news')->row_array();
        $this->load->view('admin/news/edit',$data);
    }

    public function news_edit_act($id){

        $title          = $_POST['title'];
        $description    = $_POST['description'];
        $date           = $_POST['date'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if (!empty($title) && !empty($description) && !empty($date) && !empty($category) && !empty($status)) {
            
            $config['upload_path']          = './uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|mp3|jpeg|pdf';
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_img')){
                $file_name = $this->upload->data('file_name');
                $file_ext = $this->upload->data('file_ext');

                $data = [
                    'n_title'       => $title,
                    'n_description' => $description,
                    'n_date'        => $date,
                    'n_category'    => $category,
                    'n_status'      => $status,
                    'n_img'         => $file_name,
                    'n_file_ext'    => $file_ext,
                    'n_updater_id'  => $_SESSION['admin_login_id'],
                    'n_update_date' => date("Y-m-d H:i:s")
                ];
                
                // insert to db code
                $this->News_model->update_news($id, $data);
                 
                // notification
                $this->session->set_flashdata('success', "Xəbər uğurla yeniləndi!");
    
                // redirect page
                redirect(base_url('admin_news'));

            }else{
                
                $data = [
                    'n_title'       => $title,
                    'n_description' => $description,
                    'n_date'        => $date,
                    'n_category'    => $category,
                    'n_status'      => $status,
                    'n_updater_id'  => $_SESSION['admin_login_id'],
                    'n_update_date' => date("Y-m-d H:i:s")
                ];
                
                // update in db info
                $this->News_model->update_news($id, $data);
                $this->session->set_flashdata('success', "Xəbər uğurla yeniləndi!");
                redirect(base_url('admin_news'));
            }

        }else{
            $this->session->set_flashdata('err', "Boşluq buraxmayın!");
            redirect($_SERVER['HTTP_REFERER']);
        }


    }

    public function news_img_delete($id){
     
        $data = [
            'n_img' =>"",
            'n_file_ext' =>"",
        ];
        $this->News_model->update_news($id, $data);
        $this->session->set_flashdata('success', "Şəkil uğurla silindi!");
        redirect($_SERVER['HTTP_REFERER']);
        
    }
    

}
