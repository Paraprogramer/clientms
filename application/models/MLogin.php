<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MLogin extends CI_Model {

	public function validate()
	{
    $username = $this->security->xss_clean($this->input->post('username'));
    $password = sha1($this->security->xss_clean($this->input->post('password')));

    $this->db->where('username', $username);
    $this->db->where('password', $password);

    $query = $this->db->get('users');

    if($query->num_rows() == 1)
    {
        $row = $query->row();
        $data = array(
                'username' => $row->username,
                'validated' => true
                );
        $this->session->set_userdata($data);
        return true;
    }
    return false;
	}
}
