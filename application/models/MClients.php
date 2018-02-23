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

<<<<<<< HEAD
=======
<<<<<<< HEAD
}

/* End of file MClients.php */
/* Location: ./application/models/MClients.php */
=======
>>>>>>> f03c602c4a38a93cb0d076e285d5337b859b552e
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
<<<<<<< HEAD
=======
/* End of file MClients.php */
/* Location: ./application/models/MClients.php */
>>>>>>> data vian
>>>>>>> f03c602c4a38a93cb0d076e285d5337b859b552e
