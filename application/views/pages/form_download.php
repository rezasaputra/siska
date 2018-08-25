
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
                                <span>Form Download</span>
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
                                        <h4>Form Download</h4><hr>
                                        <form class="form-horizontal" role="form" action="<?php echo base_url()?>Download_form/save_form" method="POST" enctype="multipart/form-data">
                                        <div class="form-body">
                                          <input type="text" name="id" id="id" class="hidden">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Email</label>
                                                <div class="col-md-9">
                                                  <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Instansi</label>
                                                <div class="col-md-9">
                                                <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Instansi" required="">
                                              </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-md-2 control-label">Nomor Telefon</label>
                                                <div class="col-md-9">
                                                  <input type="text" class="form-control" name="nomor" id="nomor" placeholder="Nomor Telefon" required="">

                                                    </div>
                                            </div>
                                            <div class="form-group">

                                                <label class="col-md-2 control-label">Keperluan</label>
                                                <div class="col-md-9">
                                                  <input type="text" class="form-control" name="keperluan" id="keperluan" placeholder="Keperluan download" required="">

                                                    </div>
                                            </div>

                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-9">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <a href="<?php echo base_url()?>Download_form" class="btn btn-danger">Batal</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light bordered">
                                        <br>
                                        <div id="tabelreload"></div>
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
