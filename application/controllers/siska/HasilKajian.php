<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hasilkajian extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
		// if(!$this->session->userdata('username'))
		// {
		// 	redirect('');
		// }
	}

	public function index($msg='')
	{
    $data['msg']	=$msg;
		$data['unit']=$this->Madmin->tampil_data('master_unit');
		$data['jenis']=$this->Madmin->tampil_data('master_kajian');
		$data['unit']=$this->Madmin->tampil_data('master_unit');
    $data['pegawai']=$this->Madmin->tampil_data('pegawai');

  	$data['kajian']=$this->Madmin->get_detail_hasil('kajian',1)->result();
  	$data['jumkajian']=$this->Madmin->get_detail_hasil('kajian',1)->num_rows();
  	$data['jurnal']=$this->Madmin->get_detail_hasil('kajian',2)->result();
  	$data['jumjurnal']=$this->Madmin->get_detail_hasil('kajian',2)->num_rows();
  	$data['PB']=$this->Madmin->get_detail_hasil('kajian',3)->result();
  	$data['jumPB']=$this->Madmin->get_detail_hasil('kajian',3)->num_rows();
  	$data['PN']=$this->Madmin->get_detail_hasil('kajian',4)->result();
  	$data['jumPN']=$this->Madmin->get_detail_hasil('kajian',4)->num_rows();

		$data['js']=$this->js("pegawai");
		//$data['lihat']=$this->Madmin->tampil_data_field('user','jenis_user',1);
    $data['nav']	="hasilkajian";
		$data['menu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['submenu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
    $data['aktif']="hasil";
    $data['coba']=1;
    $this->load->view('admin/head', $data);
    $this->load->view('admin/nav', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/pages/hasilkajian', $data);
    $this->load->view('admin/foot', $data);
	}

  function detail_kajian($id,$jenis){
		$data['unit']=$this->Madmin->tampil_data('master_unit');
		$data['jenis']=$this->Madmin->tampil_data('master_kajian');
		$data['unit']=$this->Madmin->tampil_data('master_unit');
    $data['pegawai']=$this->Madmin->tampil_data('pegawai');
  	$data['tahap']=$this->Madmin->tampil_data_field('master_tahap','id_jenis',$jenis);
  	$data['tahap_kajian']=$this->Madmin->tampil_data_field('master_tahap','id_jenis',$jenis);
  	$data['kajian']=$this->Madmin->tampil_data_id('kajian','id',$id);
    $data['id_kajian']=$id ;
    $data['jenis']=$jenis ;
    $data['id_user']=$this->session->userdata('id');
		$data['js']=$this->js("pegawai");
		//$data['lihat']=$this->Madmin->tampil_data_field('user','jenis_user',1);
    $data['nav']	="hasilkajian";
		$data['menu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['submenu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
    $data['aktif']="hasil";
    $data['coba']=1;
    $this->load->view('admin/head', $data);
    $this->load->view('admin/nav', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/pages/hasil_detail', $data);
    $this->load->view('admin/foot', $data);
  }


	function tambah($tabel)
	{
    $id=$this->input->post('id');
		$data['Judul']=$this->input->post('judul');
		$data['Abstrak']=$this->input->post('ideskripsi');
		$data['Keyword']=$this->input->post('keyword');
		$data['Penyusun']=$this->input->post('pegawai');
    $data['id_jenis']=$this->input->post('jenis');
		$data['id_unit']=$this->input->post('unit');
		$data['Tahun']=$this->input->post('tahun');
		$data['status']=1;

    $nmfile = "doc_".time();
		$config['upload_path']   =   './assets/uploads/kajian/';
		$config['allowed_types'] =   'doc|pdf|docx|ppt';
		$config['file_name']     =   $nmfile;

		$this->load->library('upload',$config);

		$this->upload->initialize($config);
		$foto = $this->upload->do_upload('ifile');
		$fileinfo2 = $this->upload->data();

    if($foto){$data['File']=$fileinfo2['file_name'];}

		if($this->input->post('konfirm')!=$this->input->post('password')){
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';
		}else {
			if($id){
				$query=$this->Madmin->insert_data($tabel,$data,$id);
				$msg='<div class="alert alert-success">
				<button class="close" data-close="alert"></button> <b>Edit</b> Data Sukses! </div>';

			}else{
				$query=$this->Madmin->insert_data($tabel,$data,0);
				$msg='<div class="alert alert-success">
				<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';

			}
			$this->index($msg);
			$this->session->set_flashdata('message', $msg);
			redirect('siska/SusunKajian');
		}
	}

  function tambah_detail_tahap($tabel,$idkajian,$idtahap)
	{
    $id=$this->input->post('id');
		$data['id_kajian']=$this->input->post('id_kajian');
		$data['id_tahap']=$this->input->post('id_tahap');
		$data['uraian']=$this->input->post('ideskripsi');
    $data['google_drive']=$this->input->post('link');
		$data['tgl_dibuat']=date('Y-m-d : H-m-s');
		$data['status']=1;

    $nmfile = "doc_".time();
		$config['upload_path']   =   './assets/uploads/kajian/berkas';
		$config['allowed_types'] =   'doc|pdf|docx|ppt';
		$config['file_name']     =   $nmfile;

		$this->load->library('upload',$config);

		$this->upload->initialize($config);
		$foto = $this->upload->do_upload('ifile');
		$fileinfo2 = $this->upload->data();

    if($foto){$data['berkas']=$fileinfo2['file_name'];}


			if($id){
				$query=$this->Madmin->insert_data($tabel,$data,$id);
				$msg='<div class="alert alert-success">
				<button class="close" data-close="alert"></button> <b>Edit</b> Data Sukses! </div>';

			}else{
				$query=$this->Madmin->insert_data($tabel,$data,0);
				$msg='<div class="alert alert-success">
				<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';

			}
			$this->index($msg);
			$this->session->set_flashdata('message', $msg);
			redirect('siska/SusunKajian/detail_kajian/'.$idkajian.'/'.$idtahap);

	}

  function tambah_lampiran_tahap($tabel,$idkajian,$idtahap)
	{
    $id=$this->input->post('id');
		$data['id_kajian']=$this->input->post('id_kajian');
		$data['id_tahap']=$this->input->post('id_tahap');
		$data['judul']=$this->input->post('judul');

    $nmfile = "doc_".time();
		$config['upload_path']   =   './assets/uploads/kajian/lampiran';
		$config['allowed_types'] =   'doc|pdf|docx|ppt';
		$config['file_name']     =   $nmfile;

		$this->load->library('upload',$config);

		$this->upload->initialize($config);
		$foto = $this->upload->do_upload('ifile');
		$fileinfo2 = $this->upload->data();

    if($foto){$data['file']=$fileinfo2['file_name'];}


			if($id){
				$query=$this->Madmin->insert_data($tabel,$data,$id);
				$msg='<div class="alert alert-success">
				<button class="close" data-close="alert"></button> <b>Edit</b> Data Sukses! </div>';

			}else{
				$query=$this->Madmin->insert_data($tabel,$data,0);
				$msg='<div class="alert alert-success">
				<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';

			}
			$this->index($msg);
			$this->session->set_flashdata('message', $msg);
			redirect('siska/SusunKajian/detail_kajian/'.$idkajian.'/'.$idtahap);

	}

  function tambah_ulasan_tahap($tabel,$idkajian,$idtahap)
	{
    $id=$this->input->post('id');
		$data['id_kajian']=$this->input->post('id_kajian');
		$data['id_tahap']=$this->input->post('id_tahap');
		$data['id_user']=$this->input->post('id_user');
		$data['komentar']=$this->input->post('Komentar');

			if($id){
				$query=$this->Madmin->insert_data($tabel,$data,$id);
				$msg='<div class="alert alert-success">
				<button class="close" data-close="alert"></button> <b>Edit</b> Data Sukses! </div>';

			}else{
				$query=$this->Madmin->insert_data($tabel,$data,0);
				$msg='<div class="alert alert-success">
				<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';

			}
			$this->index($msg);
			$this->session->set_flashdata('message', $msg);
			redirect('siska/SusunKajian/detail_kajian/'.$idkajian.'/'.$idtahap);

	}


	function tampil_edit($tabel)
	{
		$id=$this->input->get("id");
		$query=$this->Madmin->tampil_data_id($tabel,'id',$id);
		echo json_encode($query);
	}

	function delete($tabel,$id)
	{
		$this->Madmin->delete($tabel,$id);
		$msg='<div class="alert alert-warning">
			<button class="close" data-close="alert"></button> <b>Hapus</b> Data Sukses! </div>';
		$this->index($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('siska/SusunKajian');
	}

  function js($tabel)
  {
    $js = '
//user


      function edit(id)
        {
            var data = {"id":id};
            $("#modal_full").modal("show");
            $.ajax({
                url : "'.base_url().'siska/SusunKajian/tampil_edit/kajian",
                type : "GET",
                data : data,
                success: function(data){
                    $(window).scrollTop(0);
                    var result=JSON.parse(data);
                    $("#id").val(result.id);
                    $("#judul").val(result.Judul);
  									$("#summernote_1").summernote("code",result.Abstrak);
                    $("#keyword").val(result.keyword);
                    $("#tahun").val(result.Tahun);
                    document.getElementById("jen"+result.id_unit).selected = "true";
                    document.getElementById("uni"+result.id_unit).selected = "true";
                    document.getElementById("peg"+result.id_unit).selected = "true";
                }
            });
        }

        function get_tabel()
        {
          $.ajax({
                url : "'.base_url().'siska/pegawai/tabel/pegawai	",
                success: function(data){
                  $("#tabelreload").html(data);
                  $("#tabelku").DataTable({
                    Responsive:true
                  });
                }
            });
        }
        get_tabel();

        function aktif(id,value)
          {
            $.ajax({
               url : "'.base_url().'siska/pegawai/change_status/'.$tabel.'/"+id+"/"+value,
               success: function(data){
                 get_tabel();
               }
           });
          }
          //enduser


        function confirm_del(id)
          {
              bootbox.confirm({
                  size: "small",
                  message: "Anda akan menghapus data ini?",
                  callback: function(result){
                     if (result)
                     {
                         document.location.href = "'.base_url().'siska/pegawai/delete/'.$tabel.'/"+id;
                     }
                  }
              })
          }';
      return $js;
  }


}
