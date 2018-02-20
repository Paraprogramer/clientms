<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function daftar() //halaman daftar
	{	
		
		$data['title']="Daftar Client";
		
		$this->load->view('daftar',$data);
	}
	
	public function input() //halaman input
	{
		$data['title']="Input Client";
		
		$this->load->view('input',$data);
	}
	
	public function create() //action input
	{

	}	
	
	public function edit() //halaman edit
	{
		
	}
	
	public function update() //action edit
	{
		
	}
	
	public function hapus() //hapus
	{
		
	}

}
