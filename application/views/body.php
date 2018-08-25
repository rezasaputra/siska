
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
                                <span>Dashboard</span>
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
                            <h2> Selamat Datang di Sistem Informasi Pusaka. </h2>
                            <p> Created By <a target="_blank" href="http://pusaka.lan.go.id"><strong>Pusaka</strong></a> |  <?php echo $this->Model_login->Tanggal_indo(date('Y-m-d'));?> </p>
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
