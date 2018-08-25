<div class="section-column-wrapper margin-top-30 margin-bottom-30">
    <div class="container">
    <div class="row">

      <?php foreach ($berita as $b) {
          $datetime= new DateTime($b->tgl_awal);
          $m=$datetime->format('m');
          $hari=$datetime->format('d');
          $tahun=$datetime->format('Y');
          $bulan="";
          if($m==1){$bulan="Januari";}
          if($m==2){$bulan="Peburari";}
          if($m==3){$bulan="Maret";}
          if($m==4){$bulan="April";}
          if($m==5){$bulan="Mei";}
          if($m==6){$bulan="Juni";}
          if($m==7){$bulan="Juli";}
          if($m==8){$bulan="Agustus";}
          if($m==9){$bulan="September";}
          if($m==10){$bulan="Oktober";}
          if($m==11){$bulan="November";}
          if($m==12){$bulan="Desember";}
        ?>
    <div class="col-xs-12 col-md-9">
        <article class="blog-post-wrapper single-article">
            <header class="entry-header">
                <div class="entry-meta">
                    <ul class="list-inline">
                      <li><span class="the-time"><a href="#"><?=$bulan?> <?=$hari?>, <?=$tahun?></a></span></li>
                      <li><span class="the-author"> Oleh: <a class="url" href="#"><?=$b->nama?></a></span></li>
                        <!-- <li><span class="the-comments" > <a href="#">14 Comments</a></span></li> -->
                    </ul>
                </div><!-- /.entry-meta -->

                <h2 class="entry-title"><a href="blog-single.html"><?=$b->judul?></a></h2>
            </header><!-- /.entry-header -->

            <div class="post-thumbnail">
                <div id="blog-post-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="../../assets/uploads/berita/<?=$b->gambar?>" class="img-responsive " alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#blog-post-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#blog-post-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div><!-- /.post-thumbnail -->

            <div class="entry-content">
                <p><?=$b->deskripsi?></p>
            </div><!-- /.entry-content -->
        </article>

        <div class="about-author clearfix">
            <div class="media">
                <a class="pull-left" href="#"><img alt="Image" src="../../assets/uploads/user/<?=$b->picture?>"></a>
                <div class="media-body">
                    <div class="author-info media-heading">
                        <h3>Tentang Penulis</h3>
                        <p><?=$b->tentang?></p>
                    </div>
                </div>
            </div>
        </div>

        <nav class="pagination-wrap">
            <ul class="pager">
                <li><a class="previous" href="#"><i class="fa fa-angle-left"></i></a></li>
                <li><a class="next" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </nav>

      </div><!-- /.col-md-9 -->
  <?php }?>
