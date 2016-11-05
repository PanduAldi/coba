<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_statis  extends CI_Controller {

	var $table = "t_data";
	var $pk = "id";

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation', 'template', 'idn_times'));
		$this->load->model('m_crud');
		$this->cekLogin();
	}

	public function index($limit=null, $offset=null)
	{
		$data['title'] = "Data Statis";
		$data['statis'] = $this->m_crud->get_all($this->table, $limit, $offset)->result();

		$this->template->display('admin/data_statis/index', $data);
	}

	public function tambah()
	{
		$data['title'] = "Tambah Data Statis";
		$this->cekValidasi();

		if ($this->form_validation->run() == true)
		{

			$judul = $this->input->post('judul');

			$record = array(
							 'id' => '',
							 'judul' => $judul,
							 'id_menu' => '',
							 'deskripsi' => $this->input->post('deskripsi'),
							 'penulis' => $this->session->userdata('nama')
						   );

			$this->session->set_flashdata('add_success', '<div class="alert alert-info" id="add_success"><i class="fa fa-check"></i> Data berhasil di simpan</div>');
			$this->m_crud->insertData($this->table, $record);
			redirect('data_statis');
		}

		$this->template->display('admin/data_statis/tambah', $data);
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$data['title'] = "Edit Data Statis";
		$this->cekValidasi();

		if ($this->form_validation->run()==true)
		{


			$record = array(	
							 'judul' => $this->input->post('judul'),
							 'deskripsi' => $this->input->post('deskripsi'),
							 'penulis' => $this->session->userdata('nama')
							);

			$this->m_crud->updateData($this->table, $record, $this->pk, $id);
			$this->session->set_flashdata('update_success','<div class="alert alert-warning"><i class="fa fa-check"></i> Data berhasil di Update</div>');
			redirect('data_statis');
		}

		$data['statis'] = $this->m_crud->get_id($this->table, $this->pk, $id)->row_array();
		$this->template->display('admin/data_statis/edit', $data);
	}	

	public function hapus()
	{
		$id = $this->input->post("id_statis");
		$this->session->set_flashdata('delete_success', '<div class="alert alert-danger"><i class="fa fa-check"></i> Data berhasil di Hapus</div>');
		$this->m_crud->deleteData($this->table, $this->pk, $id);
	}

	public function cekValidasi()
	{
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
	}
 
	public function cekLogin()
	{
		if ($this->session->userdata('is_login')==false)
			redirect('login');
	}

}

/* End of file data_statis s.php */
/* Location: ./application/controllers/data_statis s.php */