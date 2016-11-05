<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	//definisi variable
	private $table = "t_user";
	private $pk    = "id_user";

	public function login($username, $password)
	{
		$this->db->where("username", $username);
		$this->db->where("password", $password);
		return $this->db->get($this->table);
	}

	public function insertUser($record)
	{
		$this->db->insert($this->table, $record);
	}

	public function updateUser($record, $id)
	{
		$this->db->where($this->pk, $id);
		$this->db->update($this->table, $record);
	}

	public function deleteUser($id)
	{
		$this->db->where($this->pk, $id);
		$this->db->delete($this->table);
	}

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */