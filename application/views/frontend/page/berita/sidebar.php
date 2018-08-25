<div class="col-xs-12 col-md-3">
    <div class="sidebar-wrapper right-sidebar">
        <aside class="widget widget_search">
            <form role="search" method="get" class="search-form" action="https://demo.themehippo.com/html/xcorporation/getPost">
                <label class="sr-only">Search for:</label>
                <input type="search" class="form-control" placeholder="Search" value="" name="s" title="Search for:">
                <button type="submit" class="search-submit" value=""><i class="fa fa-search"></i></button>
            </form>
        </aside>


        <aside class=" widget widget_recent_entries">
            <h2 class="widget-title">Berita Terpopuler</h2>
            <ul>
              <?php $i=0; foreach ($populer as $pop) { $i++;
                if($i==3){break;}
                $datetime= new DateTime($pop->tgl_awal);
                $m=$datetime->format('m');
                $hari=$datetime->format('d');
                $tahun=$datetime->format('Y');
                $bulan="";
                if($m==1){$bulan="Jan";}
                if($m==2){$bulan="Peb";}
                if($m==3){$bulan="Mar";}
                if($m==4){$bulan="Apr";}
                if($m==5){$bulan="Mei";}
                if($m==6){$bulan="Jun";}
                if($m==7){$bulan="Jul";}
                if($m==8){$bulan="Agu";}
                if($m==9){$bulan="Sep";}
                if($m==10){$bulan="Okt";}
                if($m==11){$bulan="Nov";}
                if($m==12){$bulan="Des";}
              ?>
                <li><a href="<?=base_url()?>home/beritadetail/<?=$pop->id?>"><?=$pop->judul?></a>
                    <div class="post-meta">
                        <time datetime="2017-01-04"><?=$bulan?> <?=$hari?>, <?=$tahun?></time>
                        <!-- <span> / 11 Comments</span> -->
                    </div>
                </li>
              <?php }?>

            </ul>
        </aside>


        <aside class="widget widget_categories">
            <h2 class="widget-title">Categories</h2>
            <ul>
              <?php foreach ($kategori as $kat) {?>
                <li><a href="<?=base_url()?>home/berita/<?=$kat->id?>/<?=$page?>"><?=$kat->category?></a></li>
              <?php }?>
            </ul>
        </aside>


        <!-- <aside class="widget widget_archive">
            <h2 class="widget-title">List Archived</h2>
            <ul>
                <li><a href="#">August 2014</a>&nbsp;(3)</li>
                <li><a href="#">January 2014</a>&nbsp;(1)</li>
                <li><a href="#">March 2012 </a>&nbsp;(5)</li>
                <li><a href="#">January 2012</a>&nbsp;(3)</li>
                <li><a href="#">March 2011</a>&nbsp;(2)</li>
                <li><a href="#">October 2010 </a>&nbsp;(2)</li>
            </ul>
        </aside> -->

        <!-- <aside class="widget widget_tag_cloud">
            <h2 class="widget-title">Tag Cloud</h2>
            <ul>
                <li><a href="#">Post</a></li>
                <li><a href="#">Custom</a></li>
                <li><a href="#">Graphic</a></li>
                <li><a href="#">Internet</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Hosting</a></li>
                <li><a href="#">Affaliate</a></li>
            </ul>
        </aside> -->
    </div><!-- /.sidebar-wrapper -->
</div><!-- /.col-md-3 -->

</div><!-- /.row -->
</div>
</div>
