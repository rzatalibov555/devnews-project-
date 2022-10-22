
<?php

class UserController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_news_model');
    }
    
    public function index(){
       
        $data['get_all_news'] = $this->User_news_model->get_all_news();
        $data['get_limit_news'] = $this->User_news_model->get_limit30_news();
        $data['get_limit5_news'] = $this->User_news_model->get_limit5_news();
        $data['get_all_categories'] = $this->User_news_model->get_all_categories();
        // print_r("<pre>");
        // print_r($data['get_limit_news']);
        // die();
        $this->load->view('user/index',$data);
    }

    public function about(){
        $this->load->view('user/about');
    }

    public function category(){
        $this->load->view('user/category');
    }

    public function single(){
        $this->load->view('user/post-details');
    }

    public function contact(){
        $this->load->view('user/contact');
    }


}

