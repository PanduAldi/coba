<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller {

	var $table 	= 't_produk';
	var $pk 	= 'id';

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation', 'upload', 'idn_times'));
		$this->load->model('m_crud');
		$this->cekLogin();

	}

	public function index($offset=null, $limit=null)
	{
		$data['title'] = 'Data Produk';
		
		//get data
		$data['produk'] = $this->m_crud->get_all($this->table, $limit, $offset)->result();
		$this->template->display('admin/produk/index', $data);

	}

	public function tambah()
	{
		$data['title'] = "Tambah Produk";
		$waktu = date("Y-m-d H:i:s");

		$this->cekValidasi();

		if ($this->form_validation->run()==true)
		{
			$config['upload_path'] = './assets/img-repo/produk/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '12000';
			$config['max_width']  = '1724';
			$config['max_height']  = '1200';
			$config['overwrite'] = TRUE;
			$config['remove_spaces'] = TRUE;
			
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('img')){
				$gambar = "";
			}
			else
			{
				$gambar = $_FILES['img']['name'];
			}

			// set record
			$record = array(
								'id' => '',
								'nama' => $this->input->post('nama'),
								'deskripsi' => $this->input->post('deskripsi'),
								'img' => $gambar
							);

			$this->m_crud->insertData($this->table, $record);
			$this->session->set_flashdata('add_success','<div class="alert alert-success" id="alert-delay"><i class="fa fa-check"></i> Data Berhasil di Tambah</div>');
			redirect('produk');
		}

		$this->template->display('admin/produk/tambah', $data);

	}

	public function edit()
	{
		$data['title'] = 'Edit produk';
		$this->cekValidasi();
		
		// variable property
		$id = $this->uri->segment(3);


		if ($this->form_validation->run()==true) {
			
			$config['upload_path'] = './assets/img-repo/produk/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '3000';
			$config['max_width']  = '1724';
			$config['max_height']  = '1268';
			$config['overwrite'] = TRUE;
			$config['remove_spaces'] = TRUE;
			
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('img')){
				// record property
				$record = array(
								'nama' => $this->input->post('nama'),
								'deskripsi' => $this->input->post('deskripsi')
								);
			}
			else{
				$gambar = $this->upload->file_name;
				$record = array(
								'nama' => $this->input->post('nama'),
								'deskripsi' => $this->input->post('deskripsi'),
								'img' => $gambar
							   );

				// delete old pic
				$detail = $this->m_crud->get_id($this->table, $this->pk, $id)->row_array();
				unlink("assets/img-repo/produk/".$detail['img']);
			}

			// update
			$this->m_crud->updateData($this->table, $record, $this->pk, $id);
			$data['message'] = '<div class="alert alert-info"><i class="fa fa-check"></i> Data berhasil di update klik <a href="'.site_url('produk').'">Disini</a> Untuk Kembali</div>';			
		}
		else
		{
			$data['message'] = "";
		}
			$data['produk'] = $this->m_crud->get_id($this->table, $this->pk, $id)->row_array();
			$this->template->display('admin/produk/edit', $data);
	}


	public function hapus()
	{
		$id = $this->input->post('kode');
		
		// delete img 
		$detail = $this->m_crud->get_id($this->table, $this->pk, $id)->row_array();
		unlink('assets/img-repo/produk/'.$detail['img']);

		$this->m_crud->deleteData($this->table, $this->pk, $id);
	}

	public function cekValidasi()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger delay">', '</div>');
	}

	public function cekLogin()
	{
		if ($this->session->userdata('is_login') == false)
			redirect('login');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */