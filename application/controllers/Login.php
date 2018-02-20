<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        
    }

    public function index() //halaman login
	{	
		
		$data['title']="Login Client";
		
		$this->load->view('login',$data);
	}

 }
