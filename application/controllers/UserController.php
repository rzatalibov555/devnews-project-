
<?php

class UserController extends CI_Controller{

    
    public function index(){
        $this->load->view('user/index');
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

