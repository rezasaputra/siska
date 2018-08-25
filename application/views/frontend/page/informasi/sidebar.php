<div class="section-column-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="left-sidebar">
                  <?php
                    $aktif1="";$aktif2="";$aktif3="";$aktif4="";$aktif5="";$aktif6="";$aktif7="";$aktif8="";
                    if($active=="syarat"){$aktif1="active";}
                    if($active=="sebaran"){$aktif2="active";}
                    if($active=="Tugas"){$aktif3="active";}
                    if($active=="Kompetensi"){$aktif4="active";}
                    if($active=="SKKNI"){$aktif5="active";}
                    if($active=="Hasil"){$aktif6="active";}
                    if($active=="Jenjang"){$aktif7="active";}
                    if($active=="Pelatihan"){$aktif8="active";}
                  ?>
                    <div class="sidebar-menu margin-bottom-30">
                        <ul>
                            <li class="<?=$aktif1?>"><a href="<?=base_url()?>home/DasarHukum">Dasar Hukum</a></li>
                            <li class="<?=$aktif2?>"><a href="<?=base_url()?>home/SebaranAK">Sebaran Analis Kebijakan</a></li>
                            <li class="<?=$aktif3?>"><a href="<?=base_url()?>home/Tugas">Tugas Analis Kebijakan</a></li>
                            <li class="<?=$aktif4?>"><a href="<?=base_url()?>home/Kompetensi">Kompetensi Analis Kebijakan</a></li>
                            <li class="<?=$aktif5?>"><a href="<?=base_url()?>home/SKKNI">SKKNI</a></li>
                            <li class="<?=$aktif6?>"><a href="<?=base_url()?>home/Hasil">Hasil Kerja Analis Kebijakan</a></li>
                            <li class="<?=$aktif7?>"><a href="<?=base_url()?>home/Jenjang">Jenjang dan Golongan AK</a></li>
                            <li class="<?=$aktif8?>"><a href="<?=base_url()?>home/Pelatihan">Pelatihan JFAK</a></li>
                        </ul>
                    </div>
                    <!--.sidebar-menu-->
