<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MClients');

	}

	public function daftar() //halaman daftar
	{	
		
		$data['title']="Daftar Client";
		$data['clients'] = $this->MClients->ListClients('clients')->result_array();
		
		$this->load->view('daftar',$data);
	}
	
	public function input() //halaman input
	{
		$data['title']="Input Client";
		
		$this->load->view('input',$data);
	}
	
	public function create() //action input
	{
		$data = array(
			'namaclient' => $this->input->post('nmptg'),
			'username' => $this->input->post('usrptg'),
			'password' => $this->input->post('passptg'),
			'linkproject' => $this->input->post('linkptg')
		);

		$this->MClients->Save('clients', $data);
		$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
		// header('tb_produk:'.base_url().'tb_produk');
		redirect('client/daftar','refresh');

	}

	public function view() // view detail client
		{
			# code...
		}	
	
	public function edit($idclient)
	{
		$data['title']="Edit Petugas";
		$where = array(
			'idclient' => $idclient
		);
		$data['client'] = $this->MClients->edit($where,'clients')->result();	
		$this->load->view('edit',$data);
	}
	
	public function update()
	{
		$idclient = $this->input->post('idclient');

		$data = array(
			'namaclient' => $this->input->post('namaclient'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'linkproject' => $this->input->post('linkproject')
		);
		
		$where = array(
			'idclient' => $idclient
		);
		
		$this->MClients->update($where,$data,'clients');
		redirect('client/daftar');
	}
	
	public function hapus($idclient)
	{
		$where = array(
			'idclient' => $idclient
		);
		
		$this->MClients->delete($where,'clients');
		redirect('client/daftar');
	}
}

