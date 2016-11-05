<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('idn_times');
		$this->load->model('m_web');
	}


	public function index()
	{
		$data['title'] = "Homepage";

		//header
		$data['hari'] = $this->idn_times->hari_indo(date("Y-m-d H:i:s"));
		$data['tanggal'] = $this->idn_times->tgl_db(date("Y-m-d H:i:s"));
		
		//content
		$data['slide'] = $this->m_web->slide()->result();
		$data['tutorial'] = $this->m_web->kategori_tutorial(3, null)->result();
		$data['agama'] = $this->m_web->kategori_agama(3, null)->result();
		$data['teknologi'] = $this->m_web->kategori_teknologi(3, null)->result();
		$data['produk'] = $this->m_web->ambil_semua('t_produk', 3, null)->result();

		//show time
		$this->load->view('web/template/header', $data);
		$this->load->view('web/homepage', $data);
		$this->load->view('web/template/footer', $data);
	}


	public function profil()
	{
		$id = '2';

		//header
		$data['title'] = "Profil";
		$data['hari'] = $this->idn_times->hari_indo(date("Y-m-d H:i:s"));
		$data['tanggal'] = $this->idn_times->tgl_db(date("Y-m-d H:i:s"));

		//content
		$data['profil'] = $this->m_web->ambil_id('t_data', 'id', $id)->row();
		
		//show time
		$this->load->view('web/template/header', $data);
		$this->load->view('web/profil', $data);
		$this->load->view('web/template/footer', $data);

	}

	public function teknologi($offset=null)
	{

		$limit = 4;

		//header
		$data['title'] = "Berita Teknologi";
		$data['hari'] = $this->idn_times->hari_indo(date("Y-m-d H:i:s"));
		$data['tanggal'] = $this->idn_times->tgl_db(date("Y-m-d H:i:s"));

		//content
	
		$page = $this->db->query("SELECT COUNT(*) AS jml  FROM t_artikel JOIN t_kategori ON t_kategori.id_kategori = t_artikel.id_kategori WHERE t_kategori.kategori='teknologi'");

		foreach ($page->result() as $row)
		{
			$row = $row->jml;
		}

		$data['teknologi'] = $this->m_web->kategori_teknologi($limit, $offset)->result();
		$this->load->library('pagination');
		
		$config['base_url'] = site_url('web/teknologi/');
		$config['total_rows'] = $row;
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
		$config['first_tag_open'] = '<li class="page-numbers">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li class="page-numbers">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		
		$data['pagination'] = $this->pagination->create_links();

		//show time
		$this->load->view('web/template/header', $data);
		$this->load->view('web/teknologi', $data);
		$this->load->view('web/template/footer', $data);
	}

	public function tutorial($offset=null)
	{

		$limit = 4;

		//header
		$data['title'] = "Tutorial";
		$data['hari'] = $this->idn_times->hari_indo(date("Y-m-d H:i:s"));
		$data['tanggal'] = $this->idn_times->tgl_db(date("Y-m-d H:i:s"));

		//content
	
		$page = $this->db->query("SELECT COUNT(*) AS jml  FROM t_artikel JOIN t_kategori ON t_kategori.id_kategori = t_artikel.id_kategori WHERE t_kategori.kategori='tutorial'");

		foreach ($page->result() as $row)
		{
			$row = $row->jml;
		}

		$data['tutorial'] = $this->m_web->kategori_tutorial($limit, $offset)->result();
		$this->load->library('pagination');
		
		$config['base_url'] = site_url('web/tutorial/');
		$config['total_rows'] = $row;
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
		$config['first_tag_open'] = '<li class="page-numbers">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li class="page-numbers">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		
		$data['pagination'] = $this->pagination->create_links();

		//show time
		$this->load->view('web/template/header', $data);
		$this->load->view('web/tutorial', $data);
		$this->load->view('web/template/footer', $data);
	}

	public function agama($offset=null)
	{

		$limit = 4;

		//header
		$data['title'] = "Agama";
		$data['hari'] = $this->idn_times->hari_indo(date("Y-m-d H:i:s"));
		$data['tanggal'] = $this->idn_times->tgl_db(date("Y-m-d H:i:s"));

		//content
	
		$page = $this->db->query("SELECT COUNT(*) AS jml  FROM t_artikel JOIN t_kategori ON t_kategori.id_kategori = t_artikel.id_kategori WHERE t_kategori.kategori='agama'");

		foreach ($page->result() as $row)
		{
			$row = $row->jml;
		}

		$data['agama'] = $this->m_web->kategori_agama($limit, $offset)->result();
		$this->load->library('pagination');
		
		$config['base_url'] = site_url('web/agama/');
		$config['total_rows'] = $row;
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
		$config['first_tag_open'] = '<li class="page-numbers">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li class="page-numbers">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		
		$data['pagination'] = $this->pagination->create_links();

		//show time
		$this->load->view('web/template/header', $data);
		$this->load->view('web/agama', $data);
		$this->load->view('web/template/footer', $data);
	}

	public function read()
	{
		$id = $this->uri->segment(3);
		$data['title'] = str_replace("-", " ", $this->uri->segment(4));

		//header
		$data['hari'] = $this->idn_times->hari_indo(date("Y-m-d H:i:s"));
		$data['tanggal'] = $this->idn_times->tgl_db(date("Y-m-d H:i:s"));	

		//content
		$data['read'] = $this->m_web->ambil_id('t_artikel', 'id_artikel', $id)->row();

		//show time 	
		$this->load->view('web/template/header', $data);
		$this->load->view('web/read', $data);
		$this->load->view('web/template/footer', $data);
	}

	public function produk($offset=null)
	{
		$data['title'] = "Produk";

		//header
		$data['hari'] = $this->idn_times->hari_indo(date("Y-m-d H:i:s"));
		$data['tanggal'] = $this->idn_times->tgl_db(date("Y-m-d H:i:s"));	

		//content
		$limit = 4;
	
		$page = $this->db->query("SELECT COUNT(*) AS jml  FROM t_produk");

		foreach ($page->result() as $row)
		{
			$row = $row->jml;
		}

		$data['produk'] = $this->m_web->ambil_semua('t_produk', $limit, $offset)->result();
		$this->load->library('pagination');
		
		$config['base_url'] = site_url('web/produk/');
		$config['total_rows'] = $row;
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
		$config['first_tag_open'] = '<li class="page-numbers">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li class="page-numbers">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		
		$data['pagination'] = $this->pagination->create_links();

		//show time
		$this->load->view('web/template/header', $data);
		$this->load->view('web/produk', $data);
		$this->load->view('web/template/footer', $data);

	}

	public function detail_produk()
	{
		$id = $this->uri->segment(3);
		$data['title'] = $this->uri->segment(4);

		//header
		$data['hari'] = $this->idn_times->hari_indo(date("Y-m-d H:i:s"));
		$data['tanggal'] = $this->idn_times->tgl_db(date("Y-m-d H:i:s"));

		//content
		$data['detail_produk'] = $this->m_web->ambil_id('t_produk', 'id', $id)->row();

		//show time
		$this->load->view('web/template/header', $data);
		$this->load->view('web/detail_produk', $data);
		$this->load->view('web/template/footer', $data);
	}
}

/* End of file web.php */
/* Location: ./application/controllers/web.php */