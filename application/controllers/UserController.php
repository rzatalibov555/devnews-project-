
<?php

class UserController extends CI_Controller{

    
    public function index(){
        $this->load->view('user/gallery');
    }

    public function about(){
        $this->load->view('user/home');
    }

    public function contact(){
        echo 7+15;
    }




}

