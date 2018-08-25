<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
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
		$data['nav']	="download";
		$data['msg']	=$msg;
		$data['js']		=$this->js();
    $data['menu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['submenu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['download']	=$this->MDownload->view_download()->result();
		$data['category']	=$this->M_category->view_kategori_download();
		$data['author']=$this->session->userdata('id');
		$this->load->view('head', $data);
		$this->load->view('pages/download', $data);
		$this->load->view('footer', $data);
	}


	function save_download($submit)
	{
		$id = $this->input->post('id');

		$nmfile = "doc_".time();
		$config['upload_path']   =   './assets/uploads/download/';
		$config['allowed_types'] =   'doc|pdf|docx|ppt';
		$config['file_name']     =   $nmfile;

		$this->load->library('upload',$config);

		$this->upload->initialize($config);
		$foto = $this->upload->do_upload('ifile');
		$fileinfo2 = $this->upload->data();

		if($foto) {
			$data=array(
				'file' 	=> $fileinfo2['file_name'],
				'judul' 	=> $this->input->post('ijudul'),
        'kategori' 	=> $this->input->post('kategori'));
		} else {
			$data=array(
        'judul' 	=> $this->input->post('ijudul'),
        'kategori' 	=> $this->input->post('kategori'));
		}

    $data['ukuran']=$_FILES['ifile']['size'];
		$data['ext']=$_FILES['ifile']['type'];

		if($id)
		{
			$this->MDownload->insert_download($data, $id);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Update</b> Data Sukses! </div>';

		} else {
			$this->MDownload->insert_download($data);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';
		}
			$this->index($msg);
			$this->session->set_flashdata('message', $msg);
			redirect('Download');
	}

	function tampil_download_edit()
	{
		$id=$this->input->get("id");
		$query=$this->MDownload->view_by_id($id);
		echo json_encode($query);
	}

	function delete_download($id, $foto)
	{
		$this->MDownload->delete($id, $foto);
		$msg='<div class="alert alert-warning">
			<button class="close" data-close="alert"></button> <b>Hapus</b> Data Sukses! </div>';
		$this->index($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('Download');
	}

	function js()
	{
		$js = '
			function edit_download(id)
		    {
		        var data = {"id":id};

		        $.ajax({
		            url : "'.base_url().'Download/tampil_download_edit",
		            type : "GET",
		            data : data,
		            success: function(data){
		                $(window).scrollTop(0);
		                var result=JSON.parse(data);
		                $("#id").val(result.id);
		                $("#ijudul").val(result.judul);
		                $("#files").val(result.file);
										document.getElementById("down"+result.kategori).selected = "true";
		            }
		        });
		    }

		    function confirm_del(id, file)
	        {
	            bootbox.confirm({
	                size: "small",
	                message: "Anda akan menghapus data ini?",
	                callback: function(result){
	                   if (result)
	                   {
	                       document.location.href = "'.base_url().'Download/delete_download/"+id+"/"+file;
	                   }
	                }
	            })
	        }';
	    return $js;
	}

}
