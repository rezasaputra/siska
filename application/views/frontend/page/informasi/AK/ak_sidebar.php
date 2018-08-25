<div class="section-column-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="left-sidebar">
                  <?php
                    $aktif1="";$aktif2="";$aktif3="";
                    if($active=="sebaran"){$aktif1="active";}
                    if($active=="dupak"){$aktif2="active";}
                    if($active=="umum"){$aktif3="active";}
                  ?>
                    <div class="sidebar-menu margin-bottom-30">
                        <ul>
                            <li class="<?=$aktif2?>"><a href="<?=base_url()?>home/AkDupak">Pengajuan Dupak</a></li>
                        </ul>
                    </div>
                    <!--.sidebar-menu-->
