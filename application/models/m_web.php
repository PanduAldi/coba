<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_web extends CI_Model {

	public function ambil_semua($table, $limit, $offset)
	{
		return $this->db->get($table, $limit, $offset);	
	}

	public function kategori_teknologi($limit, $offset)
	{
		$this->db->join('t_kategori', 't_kategori.id_kategori = t_artikel.id_kategori');
		$this->db->where('t_kategori.kategori', 'teknologi');
		$this->db->order_by('t_artikel.waktu', 'desc');
		return $this->db->get('t_artikel', $limit, $offset);
	}

	public function kategori_tutorial($limit, $offset)
	{
		$this->db->join('t_kategori', 't_kategori.id_kategori = t_artikel.id_kategori');
		$this->db->where('t_kategori.kategori', 'tutorial');
		$this->db->order_by('t_artikel.waktu', 'desc');
		return $this->db->get('t_artikel', $limit, $offset);
	}

	public function kategori_agama($limit, $offset)
	{
		$this->db->join('t_kategori', 't_kategori.id_kategori = t_artikel.id_kategori');
		$this->db->where('t_kategori.kategori', 'agama');
		$this->db->order_by('t_artikel.waktu', 'desc');
		return $this->db->get('t_artikel', $limit, $offset);
	}

	public function slide()
	{
		$this->db->order_by('waktu', 'desc');
		return $this->db->get('t_artikel', 3, null);
	}

	public function ambil_id($table, $pk, $id)
	{
		$this->db->where($pk, $id);
		return $this->db->get($table);
	}

	public function not_in($id, $not_in, $random, $limit, $offset)
	{
		$this->db->where('id_artikel', $id);
		$this->db->where_not_in('judul', $not_in);
		$this->db->order_by('id_artikel', $random);
		return $this->db->get('t_artikel', $limit, $offset);
	}

}

/* End of file m_web.php */
/* Location: ./application/models/m_web.php */