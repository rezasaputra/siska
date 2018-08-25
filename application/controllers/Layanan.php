<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_layanan');
		$this->load->library('upload');
		if(!$this->session->userdata('username'))
		{
			redirect('');
		}
	}
	  
	public function index($msg='')
	{
		$data['nav']=6;
		$data['msg']=$msg;
		$data['js']		=$this->js();
		$data['layanan']	=$this->Model_layanan->view_layanan();
		$this->load->view('head', $data);
		$this->load->view('pages/layanan', $data);
		$this->load->view('footer', $data);
		
	}

	function save_layanan()
	{
		$id = $this->input->post('id');

		$nmfile = "img_".time();
		$config['upload_path']   =   './assets/uploads/layanan/';
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
			
			$this->Model_layanan->insert_layanan($data, $id);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Update</b> Data Sukses! </div>';
			
		} else {

			$this->Model_layanan->insert_layanan($data);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';
		}
			$this->index($msg);
			$this->session->set_flashdata('message', $msg);
			redirect('Layanan');
	}

	function tampil_layanan_edit()
	{
		$id=$this->input->get("id");
		$query=$this->Model_layanan->view_by_id($id);
		echo json_encode($query);
	}

	function delete_layanan($id, $foto)
	{
		$this->Model_layanan->delete($id, $foto);
		$msg='<div class="alert alert-warning">
			<button class="close" data-close="alert"></button> <b>Hapus</b> Data Sukses! </div>';
		$this->index($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('Layanan');
	}

	function js()
	{
		$js = '
			function edit_layanan(id)
		    {
		        var data = {"id":id};

		        $.ajax({
		            url : "'.base_url().'Layanan/tampil_layanan_edit",
		            type : "GET",
		            data : data,
		            success: function(data){
		                $(window).scrollTop(0);
		                var result=JSON.parse(data);
		                $("#id").val(result.id);
		                $("#ijudul").val(result.judul);
		                $("#summernote_1").summernote("code",result.deskripsi);
		                document.getElementById("gmb").setAttribute("src","'.base_url().'assets/uploads/layanan/"+result.gambar);

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
	                       document.location.href = "'.base_url().'Layanan/delete_layanan/"+id+"/"+img;        
	                   }  
	                }
	            })    
	        }';
	    return $js;
	}
		
}
