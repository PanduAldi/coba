<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {

	var $table 	= 't_artikel';
	var $pk 	= 'id_artikel';

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation', 'upload', 'idn_times'));
		$this->load->model('m_crud');
		$this->cekLogin();

	}

	public function index($offset=null, $limit=null)
	{
		$data['title'] = 'Data Berita';
		
		//get data
		$data['artikel'] = $this->m_crud->get_all($this->table, $limit, $offset)->result();
		$this->template->display('admin/artikel/index', $data);

	}

	public function tambah()
	{
		$data['title'] = "Tambah Berita";
		$waktu = date("Y-m-d H:i:s");

		$this->cekValidasi();

		//get kategori
		$data['kategori'] = $this->db->get('t_kategori')->result();

		if ($this->form_validation->run()==true)
		{
			$config['upload_path'] = './assets/img-repo/artikel/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '12000';
			$config['max_width']  = '1724';
			$config['max_height']  = '1200';
			$config['overwrite'] = TRUE;
			$config['remove_spaces'] = TRUE;
			
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('gambar')){
				$gambar = "";
			}
			else
			{
				$gambar = $this->upload->file_name;
			}

			// set record
			$record = array(
							  'id_artikel' => '',
							  'judul' => $this->input->post('judul'),
							  'artikel' => $this->input->post('artikel'),
							  'id_kategori' => $this->input->post('id_kategori'),
							  'gambar' => $gambar,
							  'waktu' => $waktu,
							  'penulis' => $this->session->userdata('nama'),
							  'status' => $this->input->post('status'),
							  'sticky' => 'n'
							);

			$this->m_crud->insertData($this->table, $record);
			$this->session->set_flashdata('add_success','<div class="alert alert-success" id="alert-delay"><i class="fa fa-check"></i> Data Berhasil di Tambah</div>');
			redirect('artikel');
		}

		$this->template->display('admin/artikel/tambah', $data);

	}

	public function edit()
	{
		$data['title'] = 'Edit Artikel';
		$this->cekValidasi();
		
		// variable property
		$id = $this->uri->segment(3);
		$judul = $this->input->post('judul');
		$artikel = $this->input->post('artikel');
		$kategori = $this->input->post('id_kategori');
		$status = $this->input->post('status');
		$waktu = date('Y-m-d H:i:s');

		if ($this->form_validation->run()==true) {
			
			$config['upload_path'] = './assets/img-repo/artikel/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '3000';
			$config['max_width']  = '1724';
			$config['max_height']  = '1268';
			$config['overwrite'] = TRUE;
			$config['remove_spaces'] = TRUE;
			
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('gambar')){
				// record property
				$record = array(
								 'judul' => $judul,
								 'artikel' => $artikel,
								 'id_kategori' => $kategori, 
								 'waktu' => $waktu,
								 'status' => $status
								);
			}
			else{
				$gambar = $this->upload->file_name;
				$record = array(
								  'judul' => $judul,
								  'artikel' => $artikel,
								  'waktu' => $waktu,
								  'gambar' => $gambar,
								  'status' => $status
							   );

				// delete old pic
				$detail = $this->m_crud->get_id($this->table, $this->pk, $id)->row_array();
				unlink("assets/img-repo/artikel/".$detail['gambar']);
			}

			// update
			$this->m_crud->updateData($this->table, $record, $this->pk, $id);
			$data['message'] = '<div class="alert alert-info"><i class="fa fa-check"></i> Data berhasil di update klik <a href="'.site_url('artikel').'">Disini</a> Untuk Kembali</div>';			
		}
		else
		{
			$data['message'] = "";
		}
			$data['artikel'] = $this->m_crud->get_id($this->table, $this->pk, $id)->row_array();
			$this->template->display('admin/artikel/edit', $data);
	}

	public function multiple_delete()
	{
		$cek = $this->input->post('check');
		for ($i=0; $i < count($cek) ; $i++) { 
			// delete
					// delete img 
			$detail = $this->m_crud->get_id($this->table, $this->pk, $cek[$i])->row_array();
			unlink('assets/img-repo/artikel/'.$detail['gambar']);
			$this->m_crud->deleteData($this->table, $this->pk, $cek[$i]);
		}
		redirect('artikel');
	}

	public function updateSticky()
	{
		$id  = $this->input->post('kode');
		$sticky = $this->input->post('sticky');
		$record = array('sticky' => $sticky);

		$this->m_crud->updateData($this->table, $record, $this->pk, $id);
	}


	public function hapus()
	{
		$id = $this->input->post('kode');
		
		// delete img 
		$detail = $this->m_crud->get_id($this->table, $this->pk, $id)->row_array();
		unlink('assets/img-repo/artikel/'.$detail['gambar']);

		$this->m_crud->deleteData($this->table, $this->pk, $id);
	}

	public function detail()
	{
		$data['title'] = 'Detail Artikel';
		$id = $this->uri->segment(3);

		//get by id
		$data['artikel'] = $this->m_crud->get_by($this->table, $this->pk, $id)->row_array();
		$this->template->display('admin/artikel/detail', $data);
	}

	public function cekValidasi()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('artikel', 'Artikel', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
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