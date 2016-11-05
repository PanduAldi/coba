<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	var $table = "t_user";
	var $pk = "id_user";

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation', 'template'));
		$this->load->model('m_crud');
		$this->cekLogin();
	}

	public function index($limit=null, $offset=null)
	{
		$data['title'] = "User";
		$data['user'] = $this->m_crud->get_all($this->table, $limit, $offset)->result();
		// dislpay
		$this->template->display('admin/user/index', $data);

	}

	public function tambah()
	{
		$data['title'] = "Tambah User";
		$this->cekValidasi();

		if($this->form_validation->run()==true)
		{
			$record = array(
							'id_user' => '',
							'nama' => $this->input->post('nama'),
							'username' => $this->input->post('username'),
							'password' => md5($this->input->post('password')),
							'level' => $this->input->post('level')
						   );

			$this->m_crud->insertData($this->table, $record);
			$this->session->set_flashdata('add_success', '<div class="alert alert-success">User berhasil di tambah</div>');
			redirect('user','refresh');
		}

		$this->template->display('admin/user/tambah', $data);
	}

	public function edit()
	{
		$data['title'] = "Edit User";
		//get id
		$id = $this->uri->segment(3);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger" data-animate="fadeInLeft">', '</div>');

		if ($this->form_validation->run()==true)
		{
			$record = array(
							 'nama' => $this->input->post('nama'),
							 'username' => $this->input->post('username'),
							 'level' => $this->input->post('level')
						   );
			$this->m_crud->updateData($this->table, $record, $this->pk, $id);
			$this->session->set_flashdata('update_success', '<div class="alert alert-warning">User Berhasil di update</div>');
			redirect('user','refresh');
		}

		$data['user'] = $this->m_crud->get_id($this->table, $this->pk, $id)->row_array();
		$this->template->display('admin/user/edit', $data);
	}

	public function hapus()
	{
		$id = $this->uri->segment(3);
		$this->m_crud->deleteData($this->table, $this->pk, $id);
		$this->session->set_flashdata('delete_success', '<div class="alert alert-danger">User di hapus</div>');
		redirect('user','refresh');
		
	}

	public function cekValidasi()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger" data-animate="fadeInLeft">', '</div>');
	}

	public function cekLogin()
	{
		if ($this->session->userdata('isLogin'))
			redirect('login','refresh');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */