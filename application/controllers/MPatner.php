<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPatner extends CI_Controller {
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
		$data['nav']	="MPatner";
		$data['msg']	=$msg;
		$data['js']		=$this->js();
    $data['menu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['submenu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['patner']	=$this->M_patner->view_patner();
		$data['category']	=$this->M_category->view_kategori_berita();
		$data['author']=$this->session->userdata('id');
		$this->load->view('head', $data);
		$this->load->view('pages/mpatner', $data);
		$this->load->view('footer', $data);
	}

	function save_patner()
	{
		$id = $this->input->post('id');

		$nmfile = "img_".time();
		$config['upload_path']   =   './assets/uploads/patner/';
		$config['allowed_types'] =   'gif|jpg|png|jpeg';
		$config['file_name']     =   $nmfile;

		$this->load->library('upload',$config);

		$this->upload->initialize($config);
		$foto = $this->upload->do_upload('igambar');
		$fileinfo2 = $this->upload->data();

		if($foto) {
			//if($submit=="draft"){$data['active']=0;}else{$data['active']=1;}
			$data=array(
				'gambar' 	=> $fileinfo2['file_name'],
				'judul' 	=> $this->input->post('ijudul'),
				'subjudul' 	=> $this->input->post('subjudul'),
				'website' 	=> $this->input->post('website'),
				'active' 	=> 1,
				'deskripsi' => $this->input->post('ideskripsi'));
		} else {
			//if($submit=="draft"){$data['active']=0;}else{$data['active']=1;}
			$data=array(

				'judul' 	=> $this->input->post('ijudul'),
				'subjudul' 	=> $this->input->post('subjudul'),
				'website' 	=> $this->input->post('website'),
				'active' 	=> 1,
				'deskripsi' => $this->input->post('ideskripsi'));
		}

		if($id)
		{
			//$data['tgl_edit']=date('Y-m-d');
			$this->M_patner->insert_patner($data, $id);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Update</b> Data Sukses! </div>';

		} else {
			$this->M_patner->insert_patner($data);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';
		}
			$this->index($msg);
			$this->session->set_flashdata('message', $msg);
			redirect('MPatner');
	}

	function tampil_patner_edit()
	{
		$id=$this->input->get("id");
		$query=$this->M_patner->view_by_id($id);
		echo json_encode($query);
	}

	function delete_patner($id, $foto)
	{
		$this->M_patner->delete($id, $foto);
		$msg='<div class="alert alert-warning">
			<button class="close" data-close="alert"></button> <b>Hapus</b> Data Sukses! </div>';
		$this->index($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('MPatner');
	}

	function js()
	{
		$js = '
			function edit_patner(id)
		    {
		        var data = {"id":id};

		        $.ajax({
		            url : "'.base_url().'MPatner/tampil_patner_edit",
		            type : "GET",
		            data : data,
		            success: function(data){
		                $(window).scrollTop(0);
		                var result=JSON.parse(data);
		                $("#id").val(result.id);
		                $("#ijudul").val(result.judul);
		                $("#subjudul").val(result.subjudul);
		                $("#email").val(result.email);
		                $("#website").val(result.website);
		                $("#summernote_1").summernote("code",result.deskripsi);
		                document.getElementById("gmb").setAttribute("src","'.base_url().'assets/uploads/patner/"+result.gambar);

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
	                       document.location.href = "'.base_url().'MPatner/delete_patner/"+id+"/"+img;
	                   }
	                }
	            })
	        }';
	    return $js;
	}

}
