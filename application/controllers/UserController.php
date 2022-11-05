
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

    public function category($category){
        $data['category'] = $this->User_news_model->get_category($category);
        // print_r("<pre>");
        // print_r($data['category']);
        // die();

        if($data['category']){
            $this->load->view('user/category',$data);
        }else{
            redirect(base_url('home'));
        }
        
    }

    public function single($id){

        $product_id = $this->uri->segment(2);

        if(!is_numeric($product_id)){
            redirect(base_url('home'));
        }

        $data['get_limit5_news'] = $this->User_news_model->get_limit5_news();
        
        $data['get_single_news'] = $this->User_news_model->get_single_news($id);

        $data['get_all_categories'] = $this->User_news_model->get_all_categories();

        if($data['get_single_news']){
            $this->load->view('user/post-details',$data);
        }else{
            redirect(base_url('home'));
        }
        
        
    }

    public function contact(){
        $this->load->view('user/contact');
    }




}

