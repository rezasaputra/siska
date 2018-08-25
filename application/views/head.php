<!DOCTYPE html>

<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Administrator Pusaka</title>
        <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/global/img/Logo v4.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url()?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url()?>/assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/bootstrap-photo-gallery-master/jquery.bsPhotoGallery.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url()?>/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url()?>assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url()?>assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/global/css/bootstrap-tagsinput.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/global/css/snacbar.css">
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?php echo base_url()?>Dashboard">
                        <img style="margin-top: 5px" src="<?php echo base_url()?>assets/global/img/logo.png" alt="logo" class="logo-default img-responsive" height="170"/>
                         <!-- <span class="title" style="color: #fff"><h3><b>Gmedia</b></h3></span> -->
                         </a>
                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">


                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <?php
                                    $gambar = $this->session->userdata('picture');
                                    $picture = ($gambar != "") ? $gambar :'Logo v4.png';
                                ?>
                                <img alt="" class="img-circle" src="<?php echo base_url()?>assets/uploads/user/<?php echo $picture?>">
                                <span class="username username-hide-on-mobile"><strong><?php echo ucwords($this->session->userdata("nama"));?></strong> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li class="divider"> </li>
                                <li>
                                    <a href="<?php echo base_url()?>Dashboard/setting">
                                        <i class="icon-settings"></i> Setting </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="<?php echo base_url()?>pusakalogin/keluar">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                                <li class="divider"> </li>
                            </ul>
                        </li>

                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <!-- <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a title="Logout" href="" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                            </a>
                        </li> -->
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
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
                                    <a href="<?php echo base_url();echo $m->url;?>" >
                                        <i class="<?=$m->icon?>"></i>
                                        <span class="title"><b><?=$m->nama_menu?></b></span>
                                    </a>
                                </li>
                              <?php }else{
                                if($m->active=="1"){
                                ?>
                                <!-- menu dengan dropdown -->
                                <li class="nav-item Open ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="<?=$m->icon;?>"></i>
                                        <span class="title"><b><?=$m->nama_menu;?></b></span>
                                        <span class="arrow"></span>
                                    </a>
                                        <ul class="sub-menu">
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
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
