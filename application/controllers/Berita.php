<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
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
		$data['nav']	="Berita";
		$data['msg']	=$msg;
		$data['js']		=$this->js();
		$data['menu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['submenu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['berita']	=$this->Model_berita->view_berita();
		$data['category']	=$this->M_category->view_kategori_berita();
		$data['author']=$this->session->userdata('id');
		$this->load->view('head', $data);
		$this->load->view('pages/berita', $data);
		$this->load->view('footer', $data);
	}

	function save_berita($submit)
	{
		$id = $this->input->post('id');

		$nmfile = "img_".time();
		$config['upload_path']   =   './assets/uploads/berita/';
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
				'tag' 	=> $this->input->post('tag'),
				'categories' 	=> $this->input->post('kategori'),
				'author' 	=> $this->input->post('author'),
				'active' 	=> 1,
				'deskripsi' => $this->input->post('ideskripsi'));
		} else {
			//if($submit=="draft"){$data['active']=0;}else{$data['active']=1;}
			$data=array(
				'judul' 	=> $this->input->post('ijudul'),
				'tag' 	=> $this->input->post('tag'),
				'categories' 	=> $this->input->post('kategori'),
				'author' 	=> $this->input->post('author'),
				'active' 	=> 1,
				'deskripsi' => $this->input->post('ideskripsi'));
		}

		if($id)
		{

			$this->Model_berita->insert_berita($data, $id);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Update</b> Data Sukses! </div>';

		} else {
			date_default_timezone_set("Asia/Bangkok");
			$data['tgl_awal']=date('Y-m-d:H-m-s');
			$this->Model_berita->insert_berita($data);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';
		}
			$this->index($msg);
			$this->session->set_flashdata('message', $msg);
			redirect('Berita');
	}

	function tampil_berita_edit()
	{
		$id=$this->input->get("id");
		$query=$this->Model_berita->view_by_id($id)->row();
		echo json_encode($query);
	}

	function delete_berita($id, $foto)
	{
		$this->Model_berita->delete($id, $foto);
		$msg='<div class="alert alert-warning">
			<button class="close" data-close="alert"></button> <b>Hapus</b> Data Sukses! </div>';
		$this->index($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('Berita');
	}

	function js()
	{
		$js = '

		function edit_berita(id)
			{
					var data = {"id":id};

					$.ajax({
							url : "'.base_url().'Berita/tampil_berita_edit",
							type : "GET",
							data : data,
							success: function(data){
									$(window).scrollTop(0);
									var result=JSON.parse(data);
									$("#id").val(result.id);
									$("#ijudul").val(result.judul);
									document.getElementById("tag").value=result.tag;
									document.getElementById("kat"+result.categories).selected = "true";
									$("#summernote_1").summernote("code",result.deskripsi);
									document.getElementById("gmb").setAttribute("src","'.base_url().'assets/uploads/berita/"+result.gambar);
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
	                       document.location.href = "'.base_url().'Berita/delete_berita/"+id+"/"+img;
	                   }
	                }
	            })
	        }';
	    return $js;
	}

}
