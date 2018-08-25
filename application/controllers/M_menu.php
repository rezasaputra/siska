<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Controller {
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
		$data['nav']	="M_menu";
		$data['msg']	=$msg;
		$data['js']		=$this->js();
		$data['menu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['submenu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['role']	=$this->M_jenisuser->view_jenis();
		$this->load->view('head', $data);
		$this->load->view('pages/menuadmin', $data);
		$this->load->view('footer', $data);
	}

	function save_menu()
	{
		$id = $this->input->post('id');

			$data=array(
				'nama_menu' 	=> $this->input->post('ijudul'),
				'id_admin' => $this->input->post('rolemenu'),
				'levelmenu' 	=> $this->input->post('levelmenu'),
				'icon' => $this->input->post('icon'),
				'posisi' => $this->input->post('Posisi'),
				'url' => $this->input->post('URL'));

		if($id)
		{

			$this->Model_menu->insert_menu($data, $id);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Update</b> Data Sukses! </div>';

		} else {

			$this->Model_menu->insert_menu($data);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';
		}
			$this->index($msg);
			$this->session->set_flashdata('message', $msg);
			redirect('M_menu');
	}

	//reload tabel
		function tabelmenu(){
			$menu=$this->Model_menu->view_menu();
		$table=	'<table class="table table-striped table-bordered table-hover" id="tabelku">
					<thead>
							<tr>
									<th> No </th>
									<th> Nama Menu</th>
									<th> Role Menu </th>
									<th> Level Menu </th>
									<th> Icon</th>
									<th> URL</th>
									<th> Posisi</th>
									<th> Status</th>
									<th> Aksi</th>
							</tr>
					</thead>
					<tbody>';
					$no=1;
					foreach ($menu as $row) {
						$eye = ($row->active == 1) ? 'fa fa-eye-slash':'fa fa-eye';
            $value_eye= ($row->active == 1) ? '0':'1';
						$status = ($row->active == 1) ? '<label class="label label-xs label-success">Actived</label>' : '<label class="label label-xs label-danger">Deactived</label>';
						$table.='<tr>
									<td>'.$no++.'</td>
									<td>'.$row->nama_menu.'</td>
									<td>'.$row->nama.'</td>
									<td>'.$row->levelmenu.'</td>
									<td><i class="'.$row->icon.'"></i></td>
									<td>'.$row->url.'</td>
									<td>'.$row->posisi.'</td>
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

	function tampil_menu_edit()
	{
		$id=$this->input->get("id");
		$query=$this->Model_menu->view_by_id($id);
		echo json_encode($query);
	}

	function delete_menu($id, $foto)
	{
		$this->Model_menu->delete($id, $foto);
		$msg='<div class="alert alert-warning">
			<button class="close" data-close="alert"></button> <b>Hapus</b> Data Sukses! </div>';
		$this->index($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('M_menu');
	}

	function change_status($id="", $value='')
	{
		$data = array('active' => $value);
		$this->Model_menu->insert_menu($data, $id);
	}

	function js()
	{
		$js = '
			function edit_menu(id)
		    {
		        var data = {"id":id};

		        $.ajax({
		            url : "'.base_url().'M_menu/tampil_menu_edit",
		            type : "GET",
		            data : data,
		            success: function(data){
		                $(window).scrollTop(0);
		                var result=JSON.parse(data);
		                $("#id").val(result.id);
		                $("#ijudul").val(result.nama_menu);
										document.getElementById("role"+result.id_admin).selected = "true";
										document.getElementById("level"+result.levelmenu).selected = "true";
		                $("#icon").val(result.icon);
		                $("#URL").val(result.url);
		                $("#Posisi").val(result.posisi);

		            }
		        });
		    }

				function get_tabel()
		    {
		    	$.ajax({
		            url : "'.base_url().'M_menu/tabelmenu",
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
	                       document.location.href = "'.base_url().'M_menu/delete_menu/"+id;
	                   }
	                }
	            })
	        }

					function aktif(id,value)
		        {
							$.ajax({
								 url : "'.base_url().'M_menu/change_status/"+id+"/"+value,
								 success: function(data){
									 get_tabel();
								 }
						 });
		        }

					';
	    return $js;
	}

}
