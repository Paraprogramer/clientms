<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->isLogin();
		$this->load->model('MLogin');
	}

  public function index(){
      $this->load->view('login');
			$data['title'] = "Halaman Login";
      $this->load->view('login', $data);
  }

	public function check()
	{
    $result = $this->MLogin->validate();

    if(! $result){
      $msg = '<font color=red>Invalid username and/or password.</font><br />';
      $this->index($msg);
    }else{
        redirect('client/daftar');
    }
	}

  private function isLogin(){
    if(! $this->session->userdata('validated')){
        redirect('login');
    }
  }

  public function do_logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
}
