<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MClients extends CI_Model {


	public function ListClients($table)
	{
		$this->db->order_by('idclient', 'desc');
		return $this->db->get($table);
	}

	public function Save($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	public function delete($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
