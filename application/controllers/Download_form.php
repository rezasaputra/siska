<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download_form extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
		if(!$this->session->userdata('username'))
		{
			redirect('');
		}
	}

	public function index()
	{
		$data['nav']	="Download_form";
		//$data['msg']	=$msg;
		$data['js']		=$this->js();
		$data['menu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['submenu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['role']	=$this->M_jenisuser->view_jenis();
		$this->load->view('head', $data);
		$this->load->view('pages/form_download', $data);
		$this->load->view('footer', $data);
	}

	function save_form()
	{
		$id = $this->input->post('id');
		$id_down = $this->input->post('id_down');

			$data=array(
				'nama' 	=> $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'instansi' 	=> $this->input->post('instansi'),
				'nomor' => $this->input->post('nomor'),
				'keperluan' => $this->input->post('keperluan'),
				'id_down' =>$this->input->post('id_down'),
        'active'=>1);

		if($id)
		{

			$this->MDownload->insert_form($data, $id);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Update</b> Data Sukses! </div>';

		} else {

			$view=$this->MDownload->view_by_id($id_down);
			$jum['jumlah_download']=$view->jumlah_download+1;
			$this->MDownload->insert_download($jum,$id_down);
			$this->MDownload->insert_form($data);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';
		}
			$this->index($msg);
			$this->session->set_flashdata('message', $msg);
			redirect('Download_form');
	}

	//reload tabel
		function tabelform(){
			$form=$this->MDownload->view_form();
		$table=	'<table class="table table-striped table-bordered table-hover" id="tabelku">
					<thead>
							<tr>
									<th> No </th>
									<th> Nama </th>
									<th> Email </th>
									<th> Instansi </th>
									<th> Telepon</th>
									<th> Keperluan</th>
									<th> File Download</th>
									<th> Status</th>
									<th> Aksi</th>
							</tr>
					</thead>
					<tbody>';
					$no=1;
					foreach ($form as $row) {
						$eye = ($row->active == 1) ? 'fa fa-eye-slash':'fa fa-eye';
            $value_eye= ($row->active == 1) ? '0':'1';
						$status = ($row->active == 1) ? '<label class="label label-xs label-success">Actived</label>' : '<label class="label label-xs label-danger">Deactived</label>';
						$table.='<tr>
									<td>'.$no++.'</td>
									<td>'.$row->nama.'</td>
									<td>'.$row->email.'</td>
									<td>'.$row->instansi.'</td>
									<td>'.$row->nomor.'</td>
									<td>'.$row->keperluan.'</td>
									<td>'.$row->jud.'</td>
									<td>'.$status.'</td>
									<td>
											<a title="Edit" type="button" onclick="edit_form('.$row->id.')" class="fa fa-edit btn green-meadow"></a>
											<a title="aktif" onclick="aktif('.$row->id.','.$value_eye.');" class="'.$eye.' btn btn-info"></a>
											<a title="Hapus" onclick="confirm_del('. $row->id.');" class="fa fa-trash btn red-sunglo"></a>
									</td>
							</tr>';
					}
					$table.=
					'</tbody>
			</table>';

			echo $table;

		}
	//

	function tampil_form_edit()
	{
		$id=$this->input->get("id");
		$query=$this->MDownload ->viewform_by_id($id);
		echo json_encode($query);
	}

	function delete_form($id, $foto)
	{
		$this->MDownload->delete($id, $foto);
		$msg='<div class="alert alert-warning">
			<button class="close" data-close="alert"></button> <b>Hapus</b> Data Sukses! </div>';
		$this->index($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('M_menu');
	}

	function change_status($id="", $value='')
	{
		$data = array('active' => $value);
		$this->MDownload->insert_form($data, $id);
	}

	function js()
	{
		$js = '
			function edit_form(id)
		    {
		        var data = {"id":id};

		        $.ajax({
		            url : "'.base_url().'Download_form/tampil_form_edit",
		            type : "GET",
		            data : data,
		            success: function(data){
		                $(window).scrollTop(0);
		                var result=JSON.parse(data);
		                $("#id").val(result.id);
		                $("#nama").val(result.nama);
		                $("#email").val(result.email);
		                $("#keperluan").val(result.keperluan);
		                $("#instansi").val(result.instansi);
		                $("#nomor").val(result.nomor);

		            }
		        });
		    }

				function get_tabel()
		    {
		    	$.ajax({
		            url : "'.base_url().'Download_form/tabelform",
		            success: function(data){
		            	$("#tabelreload").html(data);
		            	$("#tabelku").DataTable({
		            		Responsive:true
		            	});
		            }
		        });
		    }
		    get_tabel();

		    function confirm_del(id)
	        {
	            bootbox.confirm({
	                size: "small",
	                message: "Anda akan menghapus data ini?",
	                callback: function(result){
	                   if (result)
	                   {
	                       document.location.href = "'.base_url().'Download_form/delete_form/"+id;
	                   }
	                }
	            })
	        }

					function aktif(id,value)
		        {
							$.ajax({
								 url : "'.base_url().'Download_form/change_status/"+id+"/"+value,
								 success: function(data){
									 get_tabel();
								 }
						 });
		        }

					';
	    return $js;
	}

}
