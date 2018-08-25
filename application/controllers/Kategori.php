<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
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
		$data['nav']	="Kategori";
		$data['msg']	=$msg;
		$data['js']		=$this->js();
		$data['menu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['submenu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['role']	=$this->M_jenisuser->view_jenis();
		$this->load->view('head', $data);
		$this->load->view('pages/kategori', $data);
		$this->load->view('footer', $data);
	}

	function save_kategori()
	{
		$id = $this->input->post('id');

			$data=array(
				'category' 	=> $this->input->post('kategori'),
				'jenis_category' => $this->input->post('jenis'));

		if($id)
		{

			$this->M_category->insert_kategori($data, $id);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Update</b> Data Sukses! </div>';

		} else {

			$this->M_category->insert_kategori($data);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';
		}
			$this->index($msg);
			$this->session->set_flashdata('message', $msg);
			redirect('Kategori');
	}

	//reload tabel
		function tabelkategori(){
			$kategori=$this->M_category->view_kategori();
		$table=	'<table class="table table-striped table-bordered table-hover" id="tabelku">
					<thead>
							<tr>
									<th> No </th>
									<th> Kategori</th>
									<th> Jenis_kategori </th>
									<th> Status </th>
									<th> Aksi</th>
							</tr>
					</thead>
					<tbody>';
					$no=1;
					foreach ($kategori as $row) {
						$eye = ($row->active == 1) ? 'fa fa-eye-slash':'fa fa-eye';
            $value_eye= ($row->active == 1) ? '0':'1';
						$status = ($row->active == 1) ? '<label class="label label-xs label-success">Actived</label>' : '<label class="label label-xs label-danger">Deactived</label>';
						$table.='<tr>
									<td>'.$no++.'</td>
									<td>'.$row->category.'</td>
									<td>'.$row->jenis_category.'</td>
									<td>'.$status.'</td>
									<td>
											<a title="Edit" type="button" onclick="edit_menu('.$row->id.')" class="fa fa-edit btn green-meadow"></a>
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

	function tampil_kategori_edit()
	{
		$id=$this->input->get("id");
		$query=$this->M_category->view_by_id($id);
		echo json_encode($query);
	}

	function delete_kategori($id)
	{
		$this->M_category->delete($id);
		$msg='<div class="alert alert-warning">
			<button class="close" data-close="alert"></button> <b>Hapus</b> Data Sukses! </div>';
		$this->index($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('Kategori');
	}

	function change_status($id="", $value='')
	{
		$data = array('active' => $value);
		$this->M_category->insert_kategori($data, $id);
	}

	function js()
	{
		$js = '
			function edit_menu(id)
		    {
		        var data = {"id":id};

		        $.ajax({
		            url : "'.base_url().'Kategori/tampil_kategori_edit",
		            type : "GET",
		            data : data,
		            success: function(data){
		                $(window).scrollTop(0);
		                var result=JSON.parse(data);
		                $("#id").val(result.id);
		                $("#kategori").val(result.category);
		                $("#Jenis_kategori").val(result.jenis_category);
		            }
		        });
		    }

				function get_tabel()
		    {
		    	$.ajax({
		            url : "'.base_url().'Kategori/tabelkategori",
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
	                       document.location.href = "'.base_url().'Kategori/delete_kategori/"+id;
	                   }
	                }
	            })
	        }

					function aktif(id,value)
		        {
							$.ajax({
								 url : "'.base_url().'Kategori/change_status/"+id+"/"+value,
								 success: function(data){
									 get_tabel();
								 }
						 });
		        }

					';
	    return $js;
	}

}
