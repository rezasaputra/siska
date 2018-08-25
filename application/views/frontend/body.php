<body>
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="uc-mobile-menu-pusher">

<div class="content-wrapper">

<div id="x-corp-carousel" class="carousel slide hero-slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div  class="carousel-inner" role="listbox">

      <?php
        $i=0;$active="";
        foreach ($slider as $s) {
            $i++;
            if($i==1){$active="active";}else {$active="";}
          ?>
          <div class="item <?=$active?>">
              <img style="height:768px" class="img-responsive" src="<?= base_url()?>assets/uploads/slider/<?=$s->gambar?>" alt="Hero Slide"> <!--Slide Image-->

              <div  class="container">
                  <div style="background-color:rgba(255,255,255, 0.4);padding:5%" class="carousel-caption">

                      <h1 class="animated bounceIn"><?=$s->judul?></h1>

                      <p class="lead animated bounceIn hidden-xs"><?=$s->deskripsi?></p>
                      <?php if(!empty($s->url)){?>
                      <a class="btn btn-primary animated bounceIn" href="http://<?=$s->url?>">Klik Link</a>
                      <?php ;}?>
                  </div>
                  <!--.carousel-caption-->
              </div>
              <!--.container-->
          </div>
          <!--.item-->
      <?php  }
      ?>

    </div>
    <!--.carousel-inner-->

    <!-- Controls -->
    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- #x-corp-carousel-->


<section class="call-to-action-variant-1 padding 2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="action-content">
                    <div class="action-text">
                        <center><h2>Selamat Datang Di Website Kedeputi Kajian Kebijakan</h2></center>
                    </div>

                </div>
                <!--.action-content-->
            </div>
            <!--.col-md-12-->
        </div>
        <!--.row-->
    </div>
    <!--.container-->
</section>
<!--call-to-action-wrapper-->

<section class="pad-top-80 pad-bottom-50 gray-bg">
    <div class="container">
        <div class="section-title text-center">
            <h2>Unit DKK</h2>
            <p>Dkk Memiliki 4 Pusat yang berperan dengan tugas yang berbeda beda</p>
        </div>
        <!--.section-title-->

        <div class="row">
            <div class="col-md-3">
                <div class="thumbnail-variant-1 thumbnail green-top-border green-shadow">
                    <img src="<?= base_url()?>assets/frontend/img/layanan/jadwal.jpg" alt="Saving Solutions">

                    <div class="caption">
                        <h4>Pusat Kajian Disentrasilasi dan Otonomi Daerah (PKDOD)</h4>

                        <!-- <p>Kami mencari calon analis kebijakan yang terbaik dan berkompetensi</p> -->

                         <p><a href="<?=base_url()?>home/pkdod" class="btn btn-link" role="button">Lihat Profil <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></p>
                    </div>
                    <!--.caption-->
                </div>
                <!--.thumbnail-->
            </div>
            <!--.col-md-4-->
            <div class="col-md-3">
                <div class="thumbnail-variant-1 thumbnail green-top-border green-shadow">
                    <img src="<?= base_url()?>assets/frontend/img/layanan/coaching_clinic.jpg" alt="Saving Solutions">

                    <div class="caption">
                        <h4>Pusat Kajian Reformasi Administrasi (PRAKSIS)</h4>

                        <!-- <p>Kami akan sepenuh hati membantu anda para analis kebijakan untuk memberikan informasi dan menyelesaikan masalah yang anda miliki seputar analis kebijakan. </p> -->

                        <p><a href="<?=base_url()?>home/praksis" class="btn btn-link" role="button">Lihat Profil <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></p>

                    </div>
                    <!--.caption-->
                </div>
                <!--.thumbnail-->
            </div>
            <!--.col-md-4-->
            <div class="col-md-3">
                <div class="thumbnail-variant-1 thumbnail green-top-border green-shadow">
                    <img src="<?= base_url()?>assets/frontend/img/layanan/seminar.jpg" alt="Saving Solutions">

                    <div class="caption">
                        <h4>Pusat Kajian Sistem dan Hukum Administrasi (PKSHAN)</h4>

                        <!-- <p>Kami memiliki agenda untuk menjadikan anda lebih baik lagi dengan seminar dan workshop</p> -->

                        <p><a href="<?=base_url()?>home/sanhan" class="btn btn-link" role="button">Lihat Profil <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></p>

                    </div>
                    <!--.caption-->
                </div>
                <!--.thumbnail-->
            </div>
            <!--.col-md-4-->

            <div class="col-md-3">
                <div class="thumbnail-variant-1 thumbnail green-top-border green-shadow">
                    <img src="<?= base_url()?>assets/frontend/img/layanan/jurnal AK.jpg" alt="Saving Solutions">

                    <div class="caption">
                        <h4>Pusat Pembinaan Analis Kebijakan (PUSAKA) </h4>

                        <!-- <p>Kami Menfasilitasi produktifitas anda dalam bentuk jurnal analis kebijakan.</p> -->

                        <p><a href="<?=base_url()?>home/pusaka" class="btn btn-link" role="button">Lihat Profil <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></p>


                    </div>
                    <!--.caption-->
                </div>
                <!--.thumbnail-->
            </div>
        </div>
        <!--.row-->

    </div>
    <!-- .container -->
</section>
<!-- .section-wrapper -->
