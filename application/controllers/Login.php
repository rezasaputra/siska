<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	function __construct()
		{
			parent::__construct(); 
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
			foreach($cek->result() as $data){
				$sess_data['id'] = $data->id;
				$sess_data['username'] = $data->username;
				$this->session->set_userdata($sess_data);
			}
			redirect('Dashboard');
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf username & password mu salah!!');
			redirect('');
		}

	}

	function keluar()
	{
		$this->session->unset_userdata('username');
		redirect('');
	}

	function auto_login()
	{
		$username = $this->input->get('usr', TRUE);
		$password = $this->input->get('psw', TRUE);
		$link = $this->input->get('l', TRUE);
		$cek = $this->Model_login->auto_cek($username, $password);
		if($cek->num_rows()==1)
		{
			foreach($cek->result() as $data){
				$sess_data['id'] = $data->id;
				$sess_data['username'] = $data->username;
				$this->session->set_userdata($sess_data);
			}
			redirect('Pengajuan/'.$link);
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf username & password mu salah!!');
			redirect('');
		}
	}
}
