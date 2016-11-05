<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	// Get all data on table 
	public function get_all($table, $limit, $offset)
	{
		return $this->db->get($table, $limit, $offset);
	}

	// get by id on table
	public function get_id($table, $pk, $id)
	{
		$this->db->where($pk, $id);
		return $this->db->get($table);
	}

	public function count($table)
	{
		return $this->db->count_all($table);
	}

	// Insert data on table
	public function insertData($table, $record)
	{
		$this->db->insert($table, $record);
	}

	// Update/edit data on table
	public function updateData($table, $record, $pk, $id)
	{
		$this->db->where($pk, $id);
	    $this->db->update($table, $record);
	}

	public function deleteData($table, $pk, $id)
	{
		$this->db->where($pk, $id);
		$this->db->delete($table);
	}

	// mod for user password change
	public function cekPassword($table, $username)
	{
		$this->db->where('username', $username);
		return $this->db->get($table);
	}

}

/* End of file m_crud.php */
/* Location: ./application/models/m_crud.php */