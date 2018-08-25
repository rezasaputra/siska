
<nav class="navbar m-menu navbar-default">
  <img style="position:absolute;z-index:2;margin-left:3%;" width="7%" src="http://lan.go.id/templates/headline/css/images/banner-header-hut-ri.png">
    <div  class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=base_url()?>"><img src="<?= base_url()?>assets/frontend/img/logo.png" alt="" ></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="#navbar-collapse-1">

            <div class="navbar-right search-btn">
                <a href="#" data-toggle="modal" data-target=".search-modal"><i
                        class="fa fa-search"></i></a>

                <div class="modal fade search-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                    class="fa fa-times" aria-hidden="true"></i></button>
                            <div class="container">
                                <form role="form">
                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type Something">
			                                <span class="input-group-btn">
			                                  <button type="submit" class="btn btn-primary">Search</button>
			                                </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $aktiv1="";$aktiv2="";$aktiv3="";$aktiv4="";$aktiv5="";$aktiv6="";$aktiv7="";
            if($active=='home'){$aktiv1='active';}
            if($active=='profil'){$aktiv2='active';}
            if($active=='berita'){$aktiv3='active';}
            if($active=='unit'){$aktiv4='active';}
            if($active=='jadwal'){$aktiv5='active';}
            if($active=='download'){$aktiv6='active';}
            if($active=='kontak'){$aktiv7='active';}
            ?>

            <ul class="nav navbar-nav navbar-right main-nav">

                <li class="m-menu-fw <?=$aktiv1?>"><a href="<?= base_url()?>" >Home </a>
                </li>
                <li class="dropdown <?=$aktiv2?>"><a href="about.html" data-toggle="dropdown" class="dropdown-toggle">Profil <span><i
                        class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <!-- <li><a href="<?= base_url()?>home/sejarah">Sejarah Pusaka</a></li> -->
                        <li><a href="<?= base_url()?>home/visimisi">Visi dan Misi </a></li>
                        <li><a href="<?= base_url()?>home/tusi">Tugas dan Fungsi </a></li>
                        <li><a href="<?= base_url()?>home/sasaran">Sasaran Strategis</a></li>
                        <li><a href="<?= base_url()?>home/nilaiLAN">Nilai LAN</a></li>
                    </ul>
                </li>

                <li class="dropdown <?=$aktiv4?>"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Unit <span><i
                        class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url()?>home/pkdod">PKDOD</a></li>
                        <li><a href="<?= base_url()?>home/sanhan">PKSANHAN</a></li>
                        <!-- <li><a href="<?= base_url()?>home/AkDupak">Analis Kebijakan</a></li> -->
                        <li><a href="<?= base_url()?>home/praksis">PRAKSIS</a></li>
                        <li><a href="<?= base_url()?>home/pusaka">PUSAKA</a></li>
                    </ul>
                </li>

                <li class="dropdown <?=$aktiv3?>"><a href="<?= base_url()?>home/berita/0/1" >Berita </a></li>
                <!-- <li class="dropdown <?=$aktiv4?>"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Publikasi<span><i
                        class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://sisaka.lan.go.id/">Sistem Informasi Dupak Online</a></li>
                        <li><a href="http://ikk.lan.go.id/">Sistem Indeks Kualitas Kebijakan</a></li>
                        <li><a href="http://jfak.lan.go.id/">Sistem Informasi Pengusulan JFAK</a></li>
                    </ul>
                </li> -->
                <!-- <li class="dropdown <?=$aktiv5?>"><a href="#" data-toggle="dropdown" class="dropdown-toggle">KM 87 <span><i
                        class="fa fa-angle-down"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a href="http://pusaka.lan.go.id/analis-kebijakan">Data Analis Kebijakan</a></li>
                    <li><a href="http://pusaka.lan.go.id/download">Dokumen</a></li>
                    <li><a href="http://pusaka.lan.go.id/produk-analis-kebijakan">Produk Analis Kebijakan</a></li>
                    <li><a href="http://pusaka.lan.go.id/ikk">Indeks Kualitas Kebijakan</a></li>
                    <li><a href="http://forumpusaka.lan.go.id/">Discussion Point</a></li>
                    <li><a href="http://pusaka.lan.go.id/b-learning-box">Learning Box</a></li>
                </ul>
                </li> -->
                <!-- <li class=" <?=$aktiv5?>"><a href="<?= base_url()?>home/jadwal">Jadwal</a></li> -->

                <li class="<?=$aktiv6?>"><a href="<?= base_url()?>home/download/2" >Download</a>
                </li>

                <li class="<?=$aktiv7?>"><a href="<?= base_url()?>home/kontak" >Kontak</a>
                </li>

            </ul>


        </div>
        <!-- .navbar-collapse -->
    </div>
    <!-- .container -->
</nav>
<!-- .nav -->
