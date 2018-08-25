
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                   
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="<?php echo base_url()?>admin/Dashboard">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Setting</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <!-- <h3 class="page-title"> Dashboard
                        <small>dashboard & statistics</small>
                    </h3> -->
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                       <div class="col-md-12">
                            <div class="portlet-body">
                                <div class="tabbable-bordered">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#"></a>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light bordered">
                                    <?php echo $this->session->flashdata('message'); ?>
                                        <h4>Setting</h4><hr>
                                        <div class="">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab"> Profile </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab"> Password </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab_1_1">
                                            <form class="form-horizontal" role="form" action="<?php echo base_url()?>Dashboard/update_profil" method="POST" enctype="multipart/form-data">
                                                <div class="form-body">
                                                    <div class="row form-group">
                                                        <input type="text" name="id" id="id" class="hidden">
                                                        <label class="col-md-2 control-label">Foto Profil</label>
                                                        <div class="col-md-9">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                    <?php echo isset($picture) ? $picture:'';?> </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                                                <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="hidden" value="" name="" required=""><input type="file" name="igambar"> </span>
                                                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Nama User</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" value="<?php echo isset($nama) ? $nama:'';?>" name="inama" id="inama" placeholder="Nama User" required=""> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-2 col-md-9">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                            <a href="<?php echo base_url()?>Berita" class="btn btn-danger">Batal</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="tab_1_2">
                                            <form class="form-horizontal" role="form" action="<?php echo base_url()?>Dashboard/update_password" method="POST" enctype="multipart/form-data">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Password</label>
                                                        <div class="col-md-8">
                                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password Baru" required=""> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Retype Password</label>
                                                        <div class="col-md-8">
                                                            <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Retype Password" required=""> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-2 col-md-9">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                            <a href="<?php echo base_url()?>Berita" class="btn btn-danger">Batal</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->  
                                </div>
                            </div>        
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->
                                
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
