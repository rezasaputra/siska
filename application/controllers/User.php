<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
		if(!$this->session->userdata('username'))
		{
			redirect('');
		}
	}

	public function index($msg='')
	{
		$data['nav']	="User";
		$data['msg']	=$msg;
		$data['js']		=$this->js();
		$data['author']=$this->session->userdata('id');
		$data['menu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['submenu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['user']	=$this->M_user->view_user();
		$data['category']	=$this->M_category->view_kategori_berita();
		$data['role']	=$this->M_jenisuser->view_jenis();
		$this->load->view('head', $data);
		$this->load->view('pages/user', $data);
		$this->load->view('footer', $data);
	}

	function save_user()
	{
		$id = $this->input->post('id');

		$nmfile = "img_".time();
		$config['upload_path']   =   './assets/uploads/user/';
		$config['allowed_types'] =   'gif|jpg|png|jpeg';
		$config['file_name']     =   $nmfile;

		$this->load->library('upload',$config);

		$this->upload->initialize($config);
		$foto = $this->upload->do_upload('igambar');
		$fileinfo2 = $this->upload->data();

		if($foto) {
			//if($submit=="draft"){$data['active']=0;}else{$data['active']=1;}
			$data=array(
        'picture' 	=> $fileinfo2['file_name'],
				'nama' 	=> $this->input->post('namalengkap'),
				'username' 	=> $this->input->post('username'),
				'password' 	=> md5($this->input->post('password')),
				'email' 	=> $this->input->post('email'),
				'jenis_user' 	=> $this->input->post('role'),
				'status' => 1);
		} else {
			//if($submit=="draft"){$data['active']=0;}else{$data['active']=1;}
			$data=array(
				'nama' 	=> $this->input->post('namalengkap'),
				'username' 	=> $this->input->post('username'),
				'password' 	=> md5($this->input->post('password')),
				'email' 	=> $this->input->post('email'),
				'jenis_user' 	=> $this->input->post('role'),
				'status' => 1);
		}


    if($this->input->post('password')!=$this->input->post('confirm'))
    {
      $msg='<div class="alert alert-danger">
      <button class="close" data-close="alert"></button> <b>Simpan</b> Data gagal!, Password dan confirm tidak cocok </div>';
      $this->index($msg);
      $this->session->set_flashdata('message', $msg);
      redirect('User');
    } else {

    		if($id)
    		{
    			$data['tgl_edit']=date('Y-m-d');
    			$this->M_user->insert_user($data, $id);
    			$msg='<div class="alert alert-success">
    			<button class="close" data-close="alert"></button> <b>Update</b> Data Sukses! </div>';

    		} else {
    			$this->M_user->insert_user($data);
    			$msg='<div class="alert alert-success">
    			<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';
    		}
    			$this->index($msg);
    			$this->session->set_flashdata('message', $msg);
    			redirect('User');

    }
	}

	function tampil_user_edit()
	{
		$id=$this->input->get("id");
		$query=$this->M_user->view_by_id($id);
		echo json_encode($query);
	}

	function delete_user($id, $foto)
	{
		$this->M_user->delete($id, $foto);
		$msg='<div class="alert alert-warning">
			<button class="close" data-close="alert"></button> <b>Hapus</b> Data Sukses! </div>';
		$this->index($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('User');
	}

	function js()
	{
		$js = '
			function edit_user(id)
		    {
		        var data = {"id":id};

		        $.ajax({
		            url : "'.base_url().'User/tampil_user_edit",
		            type : "GET",
		            data : data,
		            success: function(data){
		                $(window).scrollTop(0);
		                var result=JSON.parse(data);
		                $("#id").val(result.id);
		                $("#namalengkap").val(result.nama);
		                $("#username").val(result.username);
		                $("#password").val(result.password);
		                $("#confirm").val(result.password);
                    $("#email").val(result.email);
		                $("#role").val(result.jenis_user);
		                document.getElementById("gmb").setAttribute("src","'.base_url().'assets/uploads/user/"+result.picture);

		            }
		        });
		    }

		    function confirm_del(id, img)
	        {
	            bootbox.confirm({
	                size: "small",
	                message: "Anda akan menghapus data ini?",
	                callback: function(result){
	                   if (result)
	                   {
	                       document.location.href = "'.base_url().'User/delete_user/"+id+"/"+img;
	                   }
	                }
	            })
	        }';
	    return $js;
	}

}
