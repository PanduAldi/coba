<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

	var $table = "t_kategori";
	var $pk	   = "id_kategori";

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation', 'template'));
		$this->load->model("m_crud");
		$this->cekLogin();
	}

	public function index($limit=null, $offset=null)
	{
		$data['title'] = "Data Kategori";
		$data['kategori'] = $this->m_crud->get_all($this->table, $limit, $offset)->result();

		// display
		$this->template->display('admin/artikel/kategori', $data);

	}

	public function tambah()
	{
		// definisi variable 
		$kategori = $this->input->post('kategori');
		$record = array('id_kategori'=>'', 'kategori'=>$kategori);

		$this->session->set_flashdata('add_success', '<div class="alert alert-success" id="add_success"><i class="fa fa-check"></i> Kategori Berhasil di tambah</div>');
		$this->m_crud->insertData($this->table, $record);
	}

	public function edit()
	{
		$id = $this->input->post('id_kategori');
		$kategori = $this->input->post('kategori');

		$this->session->set_flashdata('update_success','<div class="alert alert-info" id="update_success"><i class="fa fa-check"></i> Kategori Berhasil di Update</div>');
		$this->m_crud->updateData($this->table, array('kategori'=>$kategori), $this->pk, $id);

	}

	public function hapus()
	{
		$id = $this->input->post('id_kategori');
		$this->session->set_flashdata('delete_success','<div class="alert alert-danger" id="delete_success"><i class="fa fa-check"></i> Kategori berhasil di hapus </div>');
		$this->m_crud->deleteData($this->table, $this->pk, $id);
	}

	public function cekLogin()
	{
		if ($this->session->userdata('is_login')==false)
			redirect('login');
	}

}

/* End of file kategori.php */
/* Location: ./application/controllers/kategori.php */