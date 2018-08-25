<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_login');
		$this->load->library('upload');
		// if(!$this->session->userdata('username'))
		// {
		// 	redirect('');
		// }
	}

	public function index()
	{
		$data['coba']=1;
		$data['aktif']="dashboard";
		$data['judul']="Dashboard";
		$data['nav']	="Dashboard";
		$data['menu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['submenu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/dashboard', $data);
		$this->load->view('admin/foot', $data);
	}
	public function susun()
	{
		$data['aktif']="susun";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/penyusunan', $data);
		$this->load->view('admin/foot', $data);
	}
	public function hasil()
	{
		$data['aktif']="hasil";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/hasilkajian', $data);
		$this->load->view('admin/foot', $data);
	}
	public function ukuran()
	{
		$data['aktif']="ukuran";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/ukuranmanfaat', $data);
		$this->load->view('admin/foot', $data);
	}


	public function unduhan()
	{
		$data['aktif']="unduhan";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/unduhan', $data);
		$this->load->view('admin/foot', $data);
	}

	public function unduhan_detail()
	{
		$data['aktif']="unduhan";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/unduhan_detail', $data);
		$this->load->view('admin/foot', $data);
	}

	public function Tahapan()
	{
		$data['coba']=1;
		$data['aktif']="Tahapan";
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/tahappenelitian', $data);
		$this->load->view('admin/foot', $data);
	}


	public function penilaian()
	{
		$data['aktif']="penilaian";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/penilaianaspek', $data);
		$this->load->view('admin/foot', $data);
	}

	public function aspek()
	{
		$data['aktif']="aspek";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/aspekpilihan', $data);
		$this->load->view('admin/foot', $data);
	}

	public function Interval()
	{
		$data['aktif']="interval";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/n_interval', $data);
		$this->load->view('admin/foot', $data);
	}

	public function unit()
	{
		$data['aktif']="unit";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/unitkajian', $data);
		$this->load->view('admin/foot', $data);
	}



	public function pegawai()
	{
		$data['aktif']="pegawai";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/pegawai', $data);
		$this->load->view('admin/foot', $data);
	}

	public function Anggota()
	{
		$data['aktif']="anggota";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/anggota', $data);
		$this->load->view('admin/foot', $data);
	}

	public function Admin()
	{
		$data['aktif']="admin";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/u_admin', $data);
		$this->load->view('admin/foot', $data);
	}

	public function Upegawai()
	{
		$data['aktif']="pegawai";
		$data['coba']=1;
		$data['unit']=$this->Madmin->tampil_data('master_unit');
		$data['js']=$this->js("user");
		$data['lihat']=$this->Madmin->tampil_data_field('user','jenis_user','deputi');
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/u_pegawai', $data);
		$this->load->view('admin/foot', $data);
	}

	function tabel_pegawai($tabel){
	$user=$this->Madmin->tampil_data_field('user','jenis_user','pegawai');
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

	public function UAnggota()
	{
		$data['aktif']="anggota";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/u_anggota', $data);
		$this->load->view('admin/foot', $data);
	}

	public function unitkerja()
	{
		$data['aktif']="unitkerja";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/u_unit', $data);
		$this->load->view('admin/foot', $data);
	}

	public function deputi($msg="")
	{
		$data['msg']	=$msg;
		$data['aktif']="deputi";
		$data['unit']=$this->Madmin->tampil_data('master_unit');
		$data['coba']=1;
		$data['unit']=$this->Madmin->tampil_data('master_unit');
		$data['js']=$this->js("user");
		$data['lihat']=$this->Madmin->tampil_data_field('user','jenis_user','deputi');
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/u_deputi', $data);
		$this->load->view('admin/foot', $data);
	}

	public function tambah_user($tabel,$jenis){
		$id=$this->input->post('id');
		$data['jenis_user']=$jenis;
		$data['username']=$this->input->post('username');
		$data['email']=$this->input->post('email');
		$data['password']=$this->input->post('password');
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
			redirect('Dashboard/deputi');
		}

	}

	function change_status($tabel="",$id="", $value='')
	{
		$data = array('status' => $value);
		$this->Madmin->insert_data($tabel,$data, $id);
	}

	function tabel_user($tabel){
	$user=$this->Madmin->tampil_data_field('user','jenis_user','deputi');
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
		redirect('Dashboard/deputi');
	}

//master
	public function jen_kajian()
	{
		$data['aktif']="jenkajian";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/m_jeniskajian', $data);
		$this->load->view('admin/foot', $data);
	}

	public function uniteselon()
	{
		$data['aktif']="uniteselon";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/m_uniteselon', $data);
		$this->load->view('admin/foot', $data);
	}

	public function statustahap()
	{
		$data['aktif']="statustahap";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/m_tahappenelitian', $data);
		$this->load->view('admin/foot', $data);
	}


	public function pekerjaan()
	{
		$data['aktif']="pekerjaan";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/m_pekerjaan', $data);
		$this->load->view('admin/foot', $data);
	}



	public function keperluan()
	{
		$data['aktif']="keperluan";
		$data['coba']=1;
		$this->load->view('admin/head', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/pages/m_keperluan', $data);
		$this->load->view('admin/foot', $data);
	}




}
