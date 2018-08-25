
<div class="section-column-wrapper margin-top-30 margin-bottom-30">
    <div class="container">
    <div class="row">
    <div class="col-xs-12 col-md-9">
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

        <article class="blog-post-wrapper sticky">
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
            <div class="entry-content">
                <p><?=$b->deskripsi?></p>
            </div><!-- /.entry-content -->
            <div class="post-thumbnail">
                <img src="<?=base_url()?>assets/uploads/berita/<?=$b->gambar?>" class="img-responsive " width="100%" alt="">
            </div><!-- /.post-thumbnail -->
            <footer class="entry-footer">
                <a href="<?=base_url()?>home/beritadetail/<?=$b->id?>" class="btn btn-primary"> Baca Selengkapnya </a>
            </footer><!-- /.entry-footer -->
        </article>
        <?php }?>

        <!-- pagination-wrap -->
        <nav class="pagination-wrap text-center">
            <ul class="pagination">
              <?php
              $disprev="";$disnext="";
              if($page==1){ $disprev="disabled";}
              if($page==round($jumberita/5+1)){ $disnext="disabled";}
              ?>
                <li class=""><button class="btn btn-success" title="Previous" href="<?=$page-1?>" <?=$disprev?>><i class="fa fa-angle-left"></i></button></li>
                <?php
                  $tot=0;
                  for($i=1;$i<=round($jumberita/5+1);$i++){ $tot++;?>
                    <li class="active" href="<?=base_url()?>home/berita/<?=$kat?>/<?=$i?>"><a><?=$i?></a></li>
                <?php }?>
                <li class="" ><button class="btn btn-success" title="Next" href="<?=$page+1?>" <?=$disnext?>><i class=" fa fa-angle-right"></i></button></li>
            </ul>
            <div class="counter"> Page <?=$page?> of <?=$tot?></div>
        </nav>
        <!-- end pagination-wrap -->
    </div><!-- /.col-md-9 -->
