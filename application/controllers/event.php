<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	var $table = "t_event";
	var $pk    = "id_event";

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation', 'template', 'idn_times'));
		$this->load->model('m_crud');
		$this->cekLogin();

	}

	public function index($limit=null, $offset=null)
	{
		$data['title'] = "Data Event";
		$data['event'] = $this->m_crud->get_all($this->table, $limit, $offset)->result();

		$this->template->display("admin/event/index", $data);
	}

	public function tambah()
	{
		$data['title'] = "Tambah Artikel";
		$this->cekValidasi();

		if ($this->form_validation->run()==true)
		{

			$date = date("Y-m-d H:i:s");
			// definisi data object
			$record = array(
							 'id_event' => '',
							 'judul' => $this->input->post('judul'),
							 'deskripsi' => $this->input->post('deskripsi'),
							 'waktu' => $date,
							 'waktu_update' => $date,
							 'penulis' => $this->session->userdata('nama'),
							 'kategori' => $this->input->post('kategori')
							);

			$this->m_crud->insertData($this->table, $record);
			//set flashdata
			$this->session->set_flashdata('add_success', '<div id="add_success" class="alert alert-success"><i class="fa fa-check"></i> Data berhasil di tambah</div>');
			redirect('event');
		}

		// main display
		$this->template->display('admin/event/tambah', $data);
	}

	public function edit()
	{
		$data['title'] = "Edit Event";
		$id = $this->uri->segment(3);
		$this->cekValidasi();

		if ($this->form_validation->run()==true)
		{
			//record
			$date = date('Y-m-d H:i:s');
			$record = array(
							  'judul' => $this->input->post('judul'),
							  'deskripsi' => $this->input->post('deskripsi'),
							  'kategori' => $this->input->post('kategori'),
							  'waktu_update' => $date,
							  'penulis' => $this->session->userdata('nama')
						   );

			$this->m_crud->updateData($this->table, $record, $this->pk, $id);
			$this->session->set_flashdata('update_success', '<div id="update_success" class="alert alert-warning"><i class="fa fa-check"></i> Data berhasil di Update</div>');
			redirect('event');
		}

		$data['event'] = $this->m_crud->get_id($this->table, $this->pk, $id)->row_array();
		$this->template->display('admin/event/edit', $data);
	}

	public function hapus()
	{
		$id = $this->input->post('id_event');
		$this->session->set_flashdata('delete_success', '<div id="delete_success" class="alert alert-danger"><i class="fa fa-check"></i> Data berhasil di Hapus</div>');
		$this->m_crud->deleteData($this->table, $this->pk, $id);
	}

	public function cekValidasi()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');

	}

	public function cekLogin() 
	{
		if ($this->session->userdata('is_login') == false)
			redirect("login");
	}
}

/* End of file event.php */
/* Location: ./application/controllers/event.php */