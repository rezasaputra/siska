<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pusakalogin extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_login');
	}

	public function index()
	{

		$this->load->view('login');
	}

	function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->Model_login->cek($username, $password);
		if($cek->num_rows()==1)
		{
			foreach($cek->result() as $data)
			{
				$session_id = session_id();
				$data_u = array('session_id' => $session_id);
				$this->Model_login->update_session($data_u, $data->uid);

				$sess_data['id'] 		= $data->uid;
				$sess_data['nama'] 		= $data->nama;
				$sess_data['username'] 	= $data->username;
				$sess_data['session_id']= $data->session_id;
				$sess_data['jenis']	= $data->jenis_user;
				$sess_data['picture']	= $data->picture;
				$this->session->set_userdata($sess_data);
			}
			redirect('Dashboard');
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf username & password mu salah!!');
			redirect('pusakalogin');
		}

	}

	function keluar()
	{
		$this->session->unset_userdata('username');
		redirect('pusakalogin');
	}

}
