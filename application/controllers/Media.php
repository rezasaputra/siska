<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_media');
		$this->load->library('upload');
		if(!$this->session->userdata('username'))
		{
			redirect('');
		}
	}

	public function index()
	{

	}

	public function galeri($msg='')
	{
		$data['nav']	="Media/galeri";
		$data['msg']	=$msg;
		$data['js']		=$this->js_galeri();
		$data['galeri']	=$this->Model_media->view_galeri();
		$data['menu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['submenu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$this->load->view('head', $data);
		$this->load->view('pages/galeri', $data);
		$this->load->view('footer', $data);

	}

	public function slider($msg='')
	{
		$data['nav']="Media/slider";
		$data['msg']=$msg;
		$data['js']		=$this->js_slider();
		$data['menu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['submenu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		// $data['slider']	=$this->Model_media->view_slider();
		$this->load->view('head', $data);
		$this->load->view('pages/slider', $data);
		$this->load->view('footer', $data);

	}

	// === CRUD SLIDER === //
	function save_slider()
	{
		$id = $this->input->post('id');

		$nmfile = "img_".time();
		$config['upload_path']   =   './assets/uploads/slider/';
		$config['allowed_types'] =   'gif|jpg|png|jpeg';
		$config['file_name']     =   $nmfile;

		$this->load->library('upload',$config);

		$this->upload->initialize($config);
		$foto = $this->upload->do_upload('igambar');
		$fileinfo2 = $this->upload->data();

		if($foto) {
			$data=array(
				'gambar' 	=> $fileinfo2['file_name'],
				'judul' 	=> $this->input->post('ijudul'),
				'url' 	=> $this->input->post('url'),
				'deskripsi' => $this->input->post('ideskripsi'),
				'tag_line' => $this->input->post('itag_line'));
		} else {

			$data=array(
				'judul' 	=> $this->input->post('ijudul'),
				'url' 	=> $this->input->post('url'),
				'deskripsi' => $this->input->post('ideskripsi'),
				'tag_line' => $this->input->post('itag_line'));
		}


		if($id)
		{

			$this->Model_media->insert_slider($data, $id);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Update</b> Data Sukses! </div>';

		} else {

			$this->Model_media->insert_slider($data);
			$msg='<div class="alert alert-success">
			<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';
		}
			$this->slider($msg);
			$this->session->set_flashdata('message', $msg);
			redirect('Media/slider');
	}

	function tampil_slider_edit()
	{
		$id=$this->input->get("id");
		$query=$this->Model_media->view_by_id_slider($id);
		echo json_encode($query);
	}

	function delete_slider($id, $foto)
	{
		$this->Model_media->delete($id, $foto);
		$msg='<div class="alert alert-warning">
			<button class="close" data-close="alert"></button> <b>Hapus</b> Data Sukses! </div>';
		$this->slider($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('Media/slider');
	}

	function js_slider()
	{
		$js = '
			function edit_slider(id)
		    {
		        var data = {"id":id};

		        $.ajax({
		            url : "'.base_url().'Media/tampil_slider_edit",
		            type : "GET",
		            data : data,
		            success: function(data){
		                $(window).scrollTop(0);
		                var result=JSON.parse(data);
		                $("#id").val(result.id);
		                $("#ijudul").val(result.judul);
		                $("#url").val(result.url);
		                $("#itag_line").val(result.tag_line);
		                $("#summernote_1").summernote("code",result.deskripsi);
		                document.getElementById("gmb").setAttribute("src","'.base_url().'assets/uploads/slider/"+result.gambar);

		            }
		        });
		    }

		    function get_tabel()
		    {
		    	$.ajax({
		            url : "'.base_url().'Media/tabel_slider",
		            success: function(data){
		            	$("#tabel_slider").html(data);
		            	$("#tabelku").DataTable({
		            		Responsive:true
		            	});
		            }
		        });
		    }
		    get_tabel();

		    function edit_status(id, value)
		    {

		        $.ajax({
		            url : "'.base_url().'Media/change_status/"+id+"/"+value,
		            success: function(data){
		            	get_tabel();
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
	                       document.location.href = "'.base_url().'Media/delete_slider/"+id+"/"+img;
	                   }
	                }
	            })
	        }';
	    return $js;
	}

	function tabel_slider()
	{
		$no=1;
		$slider = $this->Model_media->view_slider();
		$tabel = '<table class="table table-striped table-bordered table-hover" id="tabelku">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Gambar</th>
                            <th> Judul</th>
                            <th> URL</th>
                            <th> Tag Line </th>
                            <th> Deskripsi </th>
                            <th> Status </th>
                            <th> Aksi</th>
                        </tr>
                    </thead>
                    <tbody>';
        foreach ($slider as $row)
        {
            $gambar = "'".$row->gambar."'";
            $status = ($row->tampil == 1) ? '<label class="label label-xs label-success">Actived</label>' : '<label class="label label-xs label-danger">Deactived</label>';
            $eye = ($row->tampil == 1) ? 'fa fa-eye':'fa fa-eye-slash';
            $value_eye= ($row->tampil == 1) ? 0:'1';
            $tabel.='<tr>
                        <td>'.$no++.'</td>
                        <td width="150"><img  class="img-responsive img-thumbnail" src="'.base_url().'assets/uploads/slider/'.$row->gambar.'"> </td>
                        <td>'.$row->judul.'</td>
                        <td>'.$row->url.'</td>
                        <td>'.$row->tag_line.'</td>
                        <td>'.$row->deskripsi.'</td>
                        <td align="center">'.$status.'</td>
                        <td>
                            <a title="Edit" type="button" onclick="edit_slider('.$row->id.')" class="fa fa-edit btn green-meadow"></a>
                            <a title="Hapus" onclick="confirm_del('.$row->id.', '.$gambar.');" class="fa fa-trash-o btn red-sunglo"></a>
                            <a title="Status" type="button" onclick="edit_status('.$row->id.','.$value_eye.')" class="'.$eye.' btn blue"></a>
                        </td>
                    </tr>';
        }
	    $tabel.='</tbody>
            </table>';
	    echo $tabel;
	}

	function change_status($id="", $value='')
	{
		$data = array('tampil' => $value);
		$this->Model_media->insert_slider($data, $id);
	}
	// === END CRUD SLIDER === //

	// === CRUD GALERI === //
	function save_galeri()
	{
		$nmfile = "img_".time();
		$config['upload_path']   =   './assets/uploads/galeri/';
		$config['allowed_types'] =   'gif|jpg|png|jpeg';
		$config['file_name']     =   $nmfile;

		$this->load->library('upload',$config);

		$this->upload->initialize($config);
		$foto = $this->upload->do_upload('igambar');
		$fileinfo2 = $this->upload->data();

		$data=array(
				'gambar' 	=> $fileinfo2['file_name']);


		$this->Model_media->insert_galeri($data);

		$msg='<div class="alert alert-success">
		<button class="close" data-close="alert"></button> <b>Simpan</b> Data Sukses! </div>';

		$this->galeri($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('Media/galeri');
	}

	function delete_galeri($id, $foto)
	{
		$this->Model_media->delete_galeri($id, $foto);
		$msg='<div class="alert alert-warning">
			<button class="close" data-close="alert"></button> <b>Hapus</b> Data Sukses! </div>';
		$this->galeri($msg);
		$this->session->set_flashdata('message', $msg);
		redirect('Media/galeri');
	}

	function js_galeri()
	{
		$js = '
			$(".first").bsPhotoGallery({
					    "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
					    "hasModal" : true

					  });
			$(".get_show").bsPhotoGallery({
				"classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
				 "hasModal" : true
			});
		    function confirm_del(id, img)
	        {
	            bootbox.confirm({
	                size: "small",
	                message: "Anda akan menghapus data ini?",
	                callback: function(result){
	                   if (result)
	                   {
	                       document.location.href = "'.base_url().'Media/delete_galeri/"+id+"/"+img;
	                   }
	                }
	            })
	        }
	      //  function set_false(value)
	      //  {
	      //  		if(value == "")
	      //  		{
		     //   		$(".first").bsPhotoGallery({
					  //   "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
					  //   "hasModal" : false
					  // });
	      //  		} else {
	      //  			$(".first").bsPhotoGallery({
					  //   "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
					  //   "hasModal" : true
					  // });
	      //  		}
	      //  }
	      //  set_false();
	      //  function onover()
	      //  {
	      //  		var value = false;
	      //  		set_false(1);
	      //  }
	        ';
	    return $js;
	}
	// === END CRUD GALERI === //

}
