<div class="section-column-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="left-sidebar">
                  <?php
                    $aktif1="";$aktif2="";$aktif3="";$aktif4="";
                    if($active=="syarat"){$aktif1="active";}
                    if($active=="umum"){$aktif2="active";}
                    if($active=="alur"){$aktif3="active";}
                    if($active=="form"){$aktif4="active";}
                  ?>
                    <div class="sidebar-menu margin-bottom-30">
                        <ul>
                            <li class="<?=$aktif2?>"><a href="<?=base_url()?>home/CakUmum">Info Umum</a></li>
                            <li class="<?=$aktif1?>"><a href="<?=base_url()?>home/CAK">Syarat Pengajuan</a></li>
                            <li class="<?=$aktif3?>"><a href="<?=base_url()?>home/CakAlur">Alur Pendaftaran</a></li>
                            <li class="<?=$aktif4?>"><a href="<?=base_url()?>home/CakForm">Form Pendaftaran</a></li>
                        </ul>
                    </div>
                    <!--.sidebar-menu-->
