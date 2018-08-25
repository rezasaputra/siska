<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Model_media');
	}

	public function index()
	{
		$data['active']="home";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$data['patner'] = $this->Madmin->tampil_data('master_patner');
		$data['menu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$data['submenu']	=$this->Model_menu->view_menuuser($this->session->userdata('id'));
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/body',$data);
		$this->load->view('frontend/foot',$data);
	}


//Profil
	public function visimisi()
	{
		$data['active']="profil";
		$data['judul'] = "Visi dan Misi";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/profil/visimisi',$data);
		$this->load->view('frontend/foot',$data);
	}

	public function struktur()
	{
		$data['active']="profil";
		$data['judul'] = "Tim Pusaka";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/profil/struktur',$data);
		$this->load->view('frontend/foot',$data);
	}

	public function sejarah()
	{
		$data['active']="profil";
		$data['judul'] = "Sejarah";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/profil/sejarah',$data);
		$this->load->view('frontend/foot',$data);
	}

	public function tusi()
	{
		$data['active']="profil";
		$data['judul'] = "Tugas dan Fungsi";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/profil/tusi',$data);
		$this->load->view('frontend/foot',$data);
	}

	public function sasaran()
	{
		$data['active']="profil";
		$data['judul'] = "Tugas dan Fungsi";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/profil/sasaran',$data);
		$this->load->view('frontend/foot',$data);
	}

	public function nilaiLAN()
	{
		$data['active']="profil";
		$data['judul'] = "Nilai nilai LAN";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/profil/nilaiLAN',$data);
		$this->load->view('frontend/foot',$data);
	}

	//unit
	public function pkdod()
	{
		$data['active']="unit";
		$data['judul'] = "PKDOD";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/tentang/PKDOD',$data);
		$this->load->view('frontend/foot',$data);
	}
	public function praksis()
	{
		$data['active']="unit";
		$data['judul'] = "PRAKSIS";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/tentang/PRAKSIS',$data);
		$this->load->view('frontend/foot',$data);
	}
	public function sanhan()
	{
		$data['active']="unit";
		$data['judul'] = "PKSANHAN";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/tentang/PKSHAN',$data);
		$this->load->view('frontend/foot',$data);
	}
	public function pusaka()
	{
		$data['active']="unit";
		$data['judul'] = "PUSAKA";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/tentang/PUSAKA',$data);
		$this->load->view('frontend/foot',$data);
	}
	//unit

	public function Patner()
	{
		$data['active']="profil";
		$data['judul'] = "Patner Pusaka";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['patner'] = $this->Madmin->tampil_data('master_patner');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/profil/patner',$data);
		$this->load->view('frontend/foot',$data);
	}
//end Profil

//Berita
public function berita($cat,$page)
{
	$data['active']="berita";
	$data['judul'] = "Berita Pusaka";
	$data['slider'] = $this->Madmin->tampil_data('slider');
	$data['slider'] = $this->Model_media->view_slider_frontend();
	$data['tentang'] = $this->Madmin->tampil_data('tentang');
	//berita
	$data['jumberita'] = $this->Model_berita->view_berita_front($cat,$page)->num_rows();
	$data['kat']=$cat;
	$data['page']=$page;
	$data['berita'] = $this->Model_berita->view_berita_front($cat,$page)->result();
	//sidebar
	$data['populer'] = $this->Model_berita->view_berita_pop();
	$data['kategori']	=$this->M_category->view_kategori_berita();

	$this->load->view('frontend/head',$data);
	$this->load->view('frontend/menu',$data);
	$this->load->view('frontend/judul',$data);
	$this->load->view('frontend/page/berita/berita',$data);
	$this->load->view('frontend/page/berita/sidebar',$data);
	$this->load->view('frontend/foot',$data);
}
public function beritadetail($id)
{

	$data['active']="berita";
	$data['slider'] = $this->Madmin->tampil_data('slider');
	$data['slider'] = $this->Model_media->view_slider_frontend();
	$data['tentang'] = $this->Madmin->tampil_data('tentang');
	$data['berita'] = $this->Model_berita->view_by_id($id)->result();
	$ubah['views']=$this->Model_berita->view_by_id($id)->row()->views+1;
	$this->Model_berita->insert_berita($ubah,$id);
	$data['page']=1;
	//sidebar
	$data['populer'] = $this->Model_berita->view_berita_pop();
	$data['kategori']	=$this->M_category->view_kategori_berita();
	$detail= $this->Model_berita->view_getail();
	$data['judul']="Berita detail";
	$this->load->view('frontend/head',$data);
	$this->load->view('frontend/menu',$data);
	$this->load->view('frontend/judul',$data);
	$this->load->view('frontend/page/berita/beritadetail',$data);
	$this->load->view('frontend/page/berita/sidebar',$data);
	$this->load->view('frontend/foot',$data);
}
//endberita

//Informasi

	public function DasarHukum()
	{
		$data['active']="syarat";
		$data['judul'] = "Informasi Umum";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/sidebar',$data);
		$this->load->view('frontend/page/informasi/dasar',$data);
		$this->load->view('frontend/foot',$data);
	}

	public function SebaranAK()
	{
		$data['active']="sebaran";
		$data['judul'] = "Informasi Umum";
		// $data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/sidebar',$data);
		$this->load->view('frontend/page/informasi/sebaran',$data);
		$this->load->view('frontend/foot',$data);
	}

	public function Tugas()
	{
		$data['active']="Tugas";
		$data['judul'] = "Informasi Umum";
		// $data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/sidebar',$data);
		$this->load->view('frontend/page/informasi/tugas',$data);
		$this->load->view('frontend/foot',$data);
	}

	public function Kompetensi()
	{
		$data['active']="Kompetensi";
		$data['judul'] = "Informasi Umum";
		// $data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/sidebar',$data);
		$this->load->view('frontend/page/informasi/kompetensi',$data);
		$this->load->view('frontend/foot',$data);
	}

	public function SKKNI()
	{
		$data['active']="SKKNI";
		$data['judul'] = "Informasi Umum";
		// $data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/sidebar',$data);
		$this->load->view('frontend/page/informasi/skkni',$data);
		$this->load->view('frontend/foot',$data);
	}

	public function Hasil()
	{
		$data['active']="Hasil";
		$data['judul'] = "Informasi Umum";
		// $data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/sidebar',$data);
		$this->load->view('frontend/page/informasi/hasilkerja',$data);
		$this->load->view('frontend/foot',$data);
	}

	public function Jenjang()
	{
		$data['active']="Jenjang";
		$data['judul'] = "Informasi Umum";
		// $data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/sidebar',$data);
		$this->load->view('frontend/page/informasi/jenjang',$data);
		$this->load->view('frontend/foot',$data);
	}

	public function Pelatihan()
	{
		$data['active']="Pelatihan";
		$data['judul'] = "Informasi Umum";
		// $data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/sidebar',$data);
		$this->load->view('frontend/page/informasi/pelatihan',$data);
		$this->load->view('frontend/foot',$data);
	}
	//endinformasi

	//calon analis kebijakan

	public function CAK()
	{
		$data['active']="syarat";
		$data['judul'] = "Informasi Calon Analis Kebijakan";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/cak/cak_sidebar',$data);
		$this->load->view('frontend/page/informasi/cak/cak_syarat',$data);
		$this->load->view('frontend/foot',$data);
	}
	public function CakUmum()
	{
		$data['active']="umum";
		$data['judul'] = "Informasi Calon Analis Kebijakan";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/cak/cak_sidebar',$data);
		$this->load->view('frontend/page/informasi/cak/cak_umum',$data);
		$this->load->view('frontend/foot',$data);
	}
	public function CakAlur()
	{
		$data['active']="alur";
		$data['judul'] = "Informasi Calon Analis Kebijakan";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/cak/cak_sidebar',$data);
		$this->load->view('frontend/page/informasi/cak/cak_alur',$data);
		$this->load->view('frontend/foot',$data);
	}
	public function CakJadwal()
	{
		$data['active']="form";
		$data['judul'] = "Informasi Calon Analis Kebijakan";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/cak/cak_sidebar',$data);
		$this->load->view('frontend/page/informasi/cak/cak_jadwal',$data);
		$this->load->view('frontend/foot',$data);
	}

	public function AkDupak()
	{
		$data['active']="dupak";
		$data['judul'] = "Informasi Analis Kebijakan";
		// $data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/ak/ak_sidebar',$data);
		$this->load->view('frontend/page/informasi/ak/ak_dupak',$data);
		$this->load->view('frontend/foot',$data);
	}
	public function AkUmum()
	{
		$data['active']="umum";
		$data['judul'] = "Informasi Analis Kebijakan";
		// $data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/informasi/ak/ak_sidebar',$data);
		$this->load->view('frontend/page/informasi/ak/ak_umum',$data);
		$this->load->view('frontend/foot',$data);
	}

//endinformasi

//Jadwal
	public function jadwal()
	{
		$data['active']="jadwal";
		$data['judul'] = "Jadwal";
		$data['slider'] = $this->Madmin->tampil_data('slider');
		$data['slider'] = $this->Model_media->view_slider_frontend();
		$data['tentang'] = $this->Madmin->tampil_data('tentang');
		$data['berita'] = $this->Madmin->tampil_data('berita');
		$this->load->view('frontend/head',$data);
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/judul',$data);
		$this->load->view('frontend/page/jadwal/jadwal',$data);
		$this->load->view('frontend/foot',$data);
		$this->load->view('frontend/page/jadwal/js_jadwal',$data);
	}
//endjadwal


//Kontak
public function kontak()
{
	$data['active']="kontak";
	$data['judul'] = "Kontak";
	$data['slider'] = $this->Madmin->tampil_data('slider');
	$data['slider'] = $this->Model_media->view_slider_frontend();
	$data['tentang'] = $this->Madmin->tampil_data('tentang');
	$data['berita'] = $this->Madmin->tampil_data('berita');
	$this->load->view('frontend/head',$data);
	$this->load->view('frontend/menu',$data);
	$this->load->view('frontend/judul',$data);
	$this->load->view('frontend/page/kontak/kontak',$data);
	$this->load->view('frontend/foot',$data);
}
//endkontak

//download
public function download($cat)
{
	$data['active']="download";
	$data['judul'] = "Download";
	$data['slider'] = $this->Madmin->tampil_data('slider');
	$data['slider'] = $this->Model_media->view_slider_frontend();
	$data['tentang'] = $this->Madmin->tampil_data('tentang');
	$data['download'] = $this->MDownload->view_downloadbycat($cat)->result();
	$data['kateg'] =$this->M_category->view_kategori_download();
	$data['judul'] =$this->M_category->view_by_id($cat)->category;
	$data['kate']=$cat;

	$this->load->view('frontend/head',$data);
	$this->load->view('frontend/menu',$data);
	$this->load->view('frontend/judul',$data);
	$this->load->view('frontend/page/download/sidebar',$data);
	$this->load->view('frontend/page/download/download',$data);
	$this->load->view('frontend/foot',$data);
}


//download


}
