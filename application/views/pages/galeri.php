
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
                                <span>Galeri</span>
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
                                        <h4>Form Galeri</h4><hr>
                                        <form class="form-horizontal" method="POST" action="<?php echo base_url()?>Media/save_galeri" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="row form-group">
                                                    <label class="col-md-2 control-label">Gambar</label>
                                                    <div class="col-md-9">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img id="gmb" src=""> </div>
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
                                    <!-- END EXAMPLE TABLE PORTLET-->  
                                    <style>
                                        
                                        .first .display_btn
                                        {
                                            display: inline;
                                            width: 100%;
                                            margin-top: 1%;
                                            font-size: 10pt;
                                            border: 1px solid #ffffff;
                                            cursor: pointer;
                                        }
                                    </style>
                                    <div style="background: #fcfcfc;height: 400px;padding: 20px;border: 1px solid #e7ecf1;">
                                        <h4>Galeri</h4><hr>
                                        <ul class="first" style="list-style:none;padding:0 0 0 0;">
                                            <?php 
                                            foreach ($galeri as $row) 
                                            {                                                
                                            ?>
                                                <li style="    padding-top: 5px;
                                                                padding-left: 5px;
                                                                padding-right: 5px; ">
                                                    <img alt="<?php echo $row->gambar?>" class="img-thumbnail get_show" src="<?php echo base_url()?>assets/uploads/galeri/<?php echo $row->gambar?>">
                                                    
                                                    <button class="btn btn-danger btn-xs display_btn btn_hapus" onclick="confirm_del(<?php echo $row->id?>)">HAPUS</button>
                                                </li>
                                            <?php 
                                            }
                                            ?>
                                        </ul>
                                    </div>
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
            <!-- Form Password -->
            <div class="modal fade" id="form_password" tabindex="-1" role="basic" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <form method="POST" action="<?php echo base_url()?>Dashboard/save_pengguna">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Form Update Password</h4>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="id_user" id="id_user" value="<?php echo $this->session->userdata("id");?>" hidden="">
                                <div class="row form-group">
                                    <label class="col-md-2">Password Lama</label>
                                    <div class="col-md-9">
                                        <input type="text" name="ioldpassword" id="ioldpassword" class="form-control" placeholder="Password Lama" required="">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-2">Password Baru</label>
                                    <div class="col-md-9">
                                        <input type="text" name="ipassword" id="ipassword" class="form-control" placeholder="Password Baru" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Batal</button>
                                <button type="submit" onclick="" class="btn green">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
            <!-- End Form Password -->
            <!-- Form Email -->
            <div class="modal fade" id="form_email" tabindex="-1" role="basic" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <form method="POST" action="<?php echo base_url()?>Dashboard/save_pengguna">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Form Update Email</h4>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="id_user" id="id_user" value="<?php echo $this->session->userdata("id");?>" hidden="">
                                <div class="row form-group">
                                    <label class="col-md-2">Email Lama</label>
                                    <div class="col-md-9">
                                        <input type="email" name="ioldemail" id="ioldemail" class="form-control" placeholder="Email Lama" required="">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-2">Email Baru</label>
                                    <div class="col-md-9">
                                        <input type="email" name="iemail" id="iemail" class="form-control" placeholder="Email Baru" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Batal</button>
                                <button type="submit" onclick="" class="btn green">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Form Email -->
