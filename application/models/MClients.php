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

}

/* End of file MClients.php */
/* Location: ./application/models/MClients.php */