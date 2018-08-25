
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
                                <span>Slider</span>
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
                                        <h4>Form Slider</h4><hr>
                                        <form class="form-horizontal" role="form" action="<?php echo base_url()?>Media/save_slider" method="POST" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="row form-group">
                                                <input type="text" id="id" name="id" class="hidden">
                                                <label class="col-md-2 control-label">Gambar</label>
                                                <div class="col-md-9">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img id="gmb" src=""> </div> *ukuran gambar yang dianjurkan : 1440 x 500 pixel
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
                                                <label class="col-md-2 control-label">Judul Slider</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="ijudul" id="ijudul" placeholder="Judul Slider" required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Text Line Slider</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="itag_line" id="itag_line" rows="3" placeholder="Isi Text Line Slider"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">URL</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="url" id="url" rows="3" placeholder="Ex : www.pusaka.lan.go.id "/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Deskripsi Slider</label>
                                                <div class="col-md-9">
                                                    <textarea id="summernote_1" name="ideskripsi"></textarea>
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
                                    <div class="portlet light bordered">
                                        <br>
                                        <div id="tabel_slider"></div>
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
