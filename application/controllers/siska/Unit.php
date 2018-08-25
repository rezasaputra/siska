<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {
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
		$data['aktif']="uniteselon";
		$data['unit']=$this->Madmin->tampil_data('master_unit');
    $data['induk']=$this->Madmin->tampil_data('master_instansi');
		$data['coba']=1;
		//$data['user']=$this->Madmin->tampil_data('master_user');
		$data['js']=$this->js("unit");
		//$data['lihat']=$this->Madmin->tampil_data_field('user','jenis_user',1);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/unitkajian', $data);
		$this->load->view('admin/foot', $data);
	}


	function tambah($tabel)
	{
    $id=$this->input->post('id');
		$data['Nama']=$this->input->post('nama');
		$data['singkatan']=$this->input->post('singkatan');
		$data['username']=$this->input->post('usrnm');
    $data['email']=$this->input->post('email');
		$data['id_induk']=$this->input->post('instansi');
    $data['id_eselon']=$this->input->post('eselon');
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
			redirect('siska/Unit');
		}
	}

  function change_status($tabel="",$id="", $value='')
	{
		$data = array('status' => $value);
		$this->Madmin->insert_data($tabel,$data, $id);
	}

	function tabel($tabel){
	$view=$this->Madmin->tampil_data('unit');
	$table=	'<table class="table table-striped table-bordered table-hover" id="tabelku">
				<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Induk</th>
							<th>Unit Eselon</th>
							<th>Username</th>
							<th>Jumlah Pegawai</th>
							<th>status</th>
							<th class="text-center">Actions</th>
						</tr>
				</thead>
				<tbody>';
				$no=1;
				foreach ($view as $row) {
					$eye = ($row->status == 1) ? 'icon-eye ml-2':'icon-eye ml-2';
					$value_eye= ($row->status == 1) ? '0':'1';
					$status1 = ($row->status == 1) ? '<label class="label label-xs label-success">Actived</label>' : '<label class="label label-xs label-danger">Deactived</label>';
					$table.='<tr>
								<td>'.$no++.'</td>
								<td>'.$row->nama.'</td>
								<td>'.$row->id_induk.'</td>
								<td>'.$row->id_eselon.'</td>
								<td>'.$row->username.'</td>
								<td>'.$row->jumlah.'</td>
								<td>'.$status1.'</td>
								<td>
										<a title="Edit" type="button" onclick="edit('.$row->id.')" class="btn btn-warning icon-pencil5 ml-2"></a>
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
		redirect('siska/Unit');
	}

  function js($tabel)
  {
    $js = '
//user


      function edit(id)
        {
            var data = {"id":id};

            $.ajax({
                url : "'.base_url().'siska/Unit/tampil_edit/unit",
                type : "GET",
                data : data,
                success: function(data){
                    $(window).scrollTop(0);
                    var result=JSON.parse(data);
                    $("#id").val(result.id);
                    $("#nama").val(result.nama);
                    $("#singkatan").val(result.singkatan);
                    $("#usrnm").val(result.username);
                    $("#email").val(result.email);
                    document.getElementById("ese"+result.id_).selected = "true";
                    document.getElementById("inst"+result.id_unit).selected = "true";

                }
            });
        }

        function get_tabel()
        {
          $.ajax({
                url : "'.base_url().'siska/Unit/tabel/unit	",
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
               url : "'.base_url().'siska/Unit/change_status/'.$tabel.'/"+id+"/"+value,
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
                         document.location.href = "'.base_url().'siska/Unit/delete/'.$tabel.'/"+id;
                     }
                  }
              })
          }';
      return $js;
  }


}
