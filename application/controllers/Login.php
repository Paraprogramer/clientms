<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
    // $this->isLogin();
		$this->load->model('MLogin');
	}

  public function index(){
			$data['title'] = "Halaman Login";
      $this->load->view('login', $data);
  }

	public function check()
	{
    $result = $this->MLogin->validate();

    if(! $result){
      $this->session->set_flashdata('msg', 'Username / Password Salah');
      redirect('login');
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
