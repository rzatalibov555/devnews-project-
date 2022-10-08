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

    public function news(){
        $this->load->view('admin/news/news');
    }




}