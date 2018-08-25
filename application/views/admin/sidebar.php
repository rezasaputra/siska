<!-- Page content -->
<div class="page-content">

  <!-- Main sidebar -->
  <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
      <a href="#" class="sidebar-mobile-main-toggle">
        <i class="icon-arrow-left8"></i>
      </a>
      Navigation
      <a href="#" class="sidebar-mobile-expand">
        <i class="icon-screen-full"></i>
        <i class="icon-screen-normal"></i>
      </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

      <!-- User menu -->
      <div class="sidebar-user">
        <div class="card-body">
          <div class="media">
            <div class="mr-3">
              <div class="mr-3">
                <?php
    								$gambar = $this->session->userdata('picture');
    								$picture = ($gambar != "") ? $gambar :'Logo v4.png';
    						?>
              </div>
              <a href="#"><img src="<?php echo base_url()?>assets/uploads/user/<?php echo $picture?>" width="38" height="38" class="rounded-circle" alt=""></a>
            </div>

            <div class="media-body">
              <div class="media-title font-weight-semibold"><?php echo ucwords($this->session->userdata("nama"));?></div>
              <div class="font-size-xs opacity-50">
                <i class="icon-pin font-size-sm"></i> &nbsp;Jakarta, ID
              </div>
            </div>

            <div class="ml-3 align-self-center">
              <a href="#" class="text-white"><i class="icon-cog3"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- /user menu -->
      <?php
        $ak[1]="";$ak[2]="";$ak[3]="";$ak[4]="";$ak[5]="";
        $ak[6]="";$ak[7]="";$ak[8]="";$ak[9]="";$ak[10]="";
        $ak[11]="";$ak[12]="";$ak[13]="";$ak[14]="";$ak[15]="";
        $ak[16]="";$ak[17]="";$ak[18]="";$ak[19]="";$ak[20]="";
        $ak[21]="";$ak[22]="";

        if($aktif=="dashboard"){$ak[1]="active";}
        if($aktif=="susun"){$ak[2]="active";}
        if($aktif=="hasil"){$ak[3]="active";}
        if($aktif=="ukuran"){$ak[4]="active";}
        if($aktif=="unduhan"){$ak[5]="active";}
        if($aktif=="Tahapan"){$ak[6]="active";}
        if($aktif=="penilaian"){$ak[7]="active";}
        if($aktif=="aspek"){$ak[8]="active";}
        if($aktif=="inteval"){$ak[9]="active";}
        if($aktif=="unit"){$ak[10]="active";}
        if($aktif=="pegawai"){$ak[11]="active";}
        if($aktif=="Anggota"){$ak[12]="active";}
        if($aktif=="Admin"){$ak[13]="active";}
        if($aktif=="unitkerja"){$ak[14]="active";}
        if($aktif=="deputi"){$ak[15]="active";}
        if($aktif=="jenkajian"){$ak[16]="active";}
        if($aktif=="uniteselon"){$ak[17]="active";}
        if($aktif=="statustahap"){$ak[18]="active";}
        if($aktif=="pekerjaan"){$ak[19]="active";}
        if($aktif=="keperluan"){$ak[20]="active";}
        if($aktif=="u_pegawai"){$ak[21]="active";}
        if($aktif=="u_anggota"){$ak[22]="active";}

      ?>

      <!-- Main navigation -->
      <div class="card card-sidebar-mobile">
        <ul class="nav nav-sidebar" data-nav-type="accordion">

          <?php
              $i=0;
              foreach ($menu as $m) {
              if($m->levelmenu==0 && $m->active=="1"){
                $i++;$active="";$start="";
                if($m->url==$nav){$active="active";}
                if($i==1){$start="start";}
                if($m->url!="#"){?>
                  <!-- menu tanpa dropdown -->
                  <li class="nav-item <?=$start?> <?=$active?>">
                      <a class="nav-link <?=$ak[$i]?>" href="<?php echo base_url();echo $m->url;?>" >
                          <i class="<?=$m->icon?>"></i>
                          <span class="title"><b><?=$m->nama_menu?></b></span>
                      </a>
                  </li>
                <?php }else{
                  if($m->active=="1"){
                  ?>
                  <!-- menu dengan dropdown -->
                  <li class="nav-item nav-item-submenu Open ">
                      <a href="javascript:;" class="nav-link nav-toggle">
                          <i class="<?=$m->icon;?>"></i>
                          <span class="title"><b><?=$m->nama_menu;?></b></span>
                          <span class="arrow"></span>
                      </a>
                          <ul class="nav nav-group-sub">
                            <?php

                              foreach ($submenu as $sub) {
                                if($sub->active=="1"){
                                $aktif="";
                                if($m->id==$sub->levelmenu){
                                  if($sub->url==$nav){$aktif="active";}
                              ?>
                              <li class="nav-item <?=$aktif?>">
                                  <a href="<?php echo base_url()?><?=$sub->url?>" class="nav-link ">
                                      <span class="title"><?=$sub->nama_menu;?></span>
                                  </a>
                              </li>
                            <?php }} }
                          ?>
                          </ul>

                  </li>
                <?php }  } }?>

          <?php }
      ?>



        </ul>
      </div>
      <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

  </div>
  <!-- /main sidebar -->
