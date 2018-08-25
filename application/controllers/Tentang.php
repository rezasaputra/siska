<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_tentang');
		$this->load->library('upload');
		if(!$this->session->userdata('username'))
		{
			redirect('');
		}
	}
	  
	public function index($msg='')
	{
		$data['nav']=5;
		$data['msg']=$msg;
		$data['js']		=$this->js();
		$data['tentang']	=$this->Model_tentang->view_data();
		$this->load->view('head', $data);
		$this->load->view('pages/tentang', $data);
		$this->load->view('footer', $data);
		
	}

	function save_tentang()
	{
		$id = $this->input->post('id');

		$nmfile = "img_".time();
		$config['upload_path']   =   './assets/uploads/tentang/';
		$config['allowed_types'] =   'gif|jpg|png|jpeg'; 
		$config['file_name']     =   $nmfile;

		$this->load->library('upload',$config);
		
		$this->upload->initialize($config);
		$foto = $this->upload->do_upload('igambar');
		$fileinfo2 = $this->upload->data();

		if($foto) {
			$data=array(
				'gambar' 	=> $fileinfo2['file_name'],
				'judul' 	=> $this->input->post('ijudul'),
				'deskripsi' => $this->input->post('ideskripsi'));			
		} else {
			
			$data=array(
				'judul' 	=> $this->input->post('ijudul'),
				'deskripsi' => $this->input->post('ideskripsi'));
		}	


		if($id)
		{
			
			$this->Model_tentang->insert($data, $id);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Update</b> Data Sukses! </div>';
			
		} else {

			$this->Model_tentang->insert($data);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';
		}
			$this->index($msg);
			$this->session->set_flashdata('message', $msg);
			redirect('Tentang');
	}

	function tampil_tentang_edit()
	{
		$id=$this->input->get("id");
		$query=$this->Model_tentang->view_by_id($id);
		echo json_encode($query);
	}

	function delete_tentang($id, $foto)
	{
		$this->Model_tentang->delete($id, $foto);
		$msg='<div class="alert alert-warning">
			<button class="close" data-close="alert"></button> <b>Hapus</b> Data Sukses! </div>';
		$this->index($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('Tentang');
	}

	function js()
	{
		$js = '
			function edit_tentang(id)
		    {
		        var data = {"id":id};

		        $.ajax({
		            url : "'.base_url().'Tentang/tampil_tentang_edit",
		            type : "GET",
		            data : data,
		            success: function(data){
		                $(window).scrollTop(0);
		                var result=JSON.parse(data);
		                $("#id").val(result.id);
		                $("#ijudul").val(result.judul);
		                $("#summernote_1").summernote("code",result.deskripsi);
		                document.getElementById("gmb").setAttribute("src","'.base_url().'assets/uploads/tentang/"+result.gambar);

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
	                       document.location.href = "'.base_url().'Tentang/delete_tentang/"+id+"/"+img;        
	                   }  
	                }
	            })    
	        }';
	    return $js;
	}
		
}
