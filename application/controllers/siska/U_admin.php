<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_admin extends CI_Controller {
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
		$data['aktif']="Admin";
		$data['unit']=$this->Madmin->tampil_data('master_unit');
		$data['coba']=1;
		$data['user']=$this->Madmin->tampil_data('master_user');
		$data['js']=$this->js("user");
		$data['lihat']=$this->Madmin->tampil_data_field('user','jenis_user',1);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/u_admin', $data);
		$this->load->view('admin/foot', $data);
	}


	function tambah_user($tabel,$jenis)
	{
    $id=$this->input->post('id');
		$data['jenis_user']=$jenis;
		$data['username']=$this->input->post('username');
		$data['email']=$this->input->post('email');
		$data['password']=md5($this->input->post('password'));
		$data['unit_kerja']=$this->input->post('unit');
		$data['status']=1;

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
			redirect('siska/U_admin');
		}
	}

  function change_status($tabel="",$id="", $value='')
	{
		$data = array('status' => $value);
		$this->Madmin->insert_data($tabel,$data, $id);
	}

	function tabel_user($tabel){
	$user=$this->Madmin->tampil_data_field('user','jenis_user',1);
	$table=	'<table class="table table-striped table-bordered table-hover" id="tabelku">
				<thead>
						<tr>
							<th>No</th>
							<th>Username</th>
							<th>Email</th>
							<th>Unit</th>
							<th>Status</th>
							<th class="text-center">Actions</th>
						</tr>
				</thead>
				<tbody>';
				$no=1;
				foreach ($user as $row) {
					$eye = ($row->status == 1) ? 'icon-eye ml-2':'icon-eye ml-2';
					$value_eye= ($row->status == 1) ? '0':'1';
					$status1 = ($row->status == 1) ? '<label class="label label-xs label-success">Actived</label>' : '<label class="label label-xs label-danger">Deactived</label>';
					$table.='<tr>
								<td>'.$no++.'</td>
								<td>'.$row->username.'</td>
								<td>'.$row->email.'</td>
								<td>'.$row->unit_kerja.'</td>
								<td>'.$status1.'</td>
								<td>
										<a title="Edit" type="button" onclick="edit_user('.$row->id.')" class="btn btn-warning icon-pencil5 ml-2"></a>
										<a title="aktif" onclick="aktif('.$row->id.','.$value_eye.');" class="btn btn-info '.$eye.'"></a>
										<a title="Hapus" onclick="confirm_del('. $row->id.');" class="btn btn-danger icon-trash ml-2 btn red-sunglo"></a>
								</td>
						</tr>';
				}
				$table.=
				'</tbody>
		</table>';

		echo $table;
	}

	function tampil_user_edit($tabel)
	{
		$id=$this->input->get("id");
		$query=$this->Madmin->tampil_data_id($tabel,'id',$id);
		echo json_encode($query);
	}

	function delete_user($tabel,$id)
	{
		$this->Madmin->delete($tabel,$id);
		$msg='<div class="alert alert-warning">
			<button class="close" data-close="alert"></button> <b>Hapus</b> Data Sukses! </div>';
		$this->index($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('siska/U_admin');
	}

  function js($tabel)
  {
    $js = '
//user
    function tambah_user(jenis)
      {
          $.ajax({
              url : "'.base_url().'siska/U_admin/tambah_user/user/"+jenis,
              type : "POST",
              data : {"nama":$("#nama").val(),},
              success: function(data){

              }
          });
      }

      function edit_user(id)
        {
            var data = {"id":id};

            $.ajax({
                url : "'.base_url().'siska/U_admin/tampil_user_edit/user",
                type : "GET",
                data : data,
                success: function(data){
                    $(window).scrollTop(0);
                    var result=JSON.parse(data);
                    $("#id").val(result.id);
                    $("#email").val(result.email);
                    $("#username").val(result.username);
                    $("#password").val(result.password);
                    $("#konfirm").val(result.password);
                    document.getElementById("uni"+result.unit_kerja).selected = "true";
                }
            });
        }

        function get_tabel_user()
        {
          $.ajax({
                url : "'.base_url().'siska/U_admin/tabel_user/user	",
                success: function(data){
                  $("#tabelreload").html(data);
                  $("#tabelku").DataTable({
                    Responsive:true
                  });
                }
            });
        }
        get_tabel_user();

        function aktif(id,value)
          {
            $.ajax({
               url : "'.base_url().'siska/U_admin/change_status/'.$tabel.'/"+id+"/"+value,
               success: function(data){
                 get_tabel_user();
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
                         document.location.href = "'.base_url().'siska/U_admin/delete_user/'.$tabel.'/"+id;
                     }
                  }
              })
          }';
      return $js;
  }


}
