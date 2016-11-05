<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->model('m_user');

		// cek Login
		if ($this->session->userdata("is_login") == true)
			redirect('dashboard');
	}

	public function index()
	{
		$data['title'] = "Panel Login";
		// validation set rules
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password','required');

		if ($this->form_validation->run()==true)
		{
			//declare variable user
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$cekLogin = $this->m_user->login($username, $password);

			if ($cekLogin->num_rows()>0)
			{
				//get nama user
				$nama = $cekLogin->row_array();

				$this->session->set_userdata('is_login', true);
				$this->session->set_userdata('username', $username);
				$this->session->set_userdata('password', $password);
				$this->session->set_userdata('nama', $nama['nama']);
				$this->session->set_userdata('level', $nama['level']);

				redirect('dashboard');
			}
			else
			{
				$data['message'] = '<div class="alert alert-danger" data-animate="tada">Login gagal. Username Atau password salah</div>'; 
				$this->load->view('login', $data);
			}

		}
		else
		{

			$data['message'] = "";
			$this->load->view('login', $data);

		}

	}

}

/* End of file  */
/* Location: ./application/controllers/ */