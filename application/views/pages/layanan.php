
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
                                <span>Layanan</span>
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
                                        <h4>Form Layanan Kami</h4><hr>
                                        <form class="form-horizontal" role="form" action="<?php echo base_url()?>Layanan/save_layanan" method="POST" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="row form-group">
                                                <input type="text" id="id" name="id" class="hidden">
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
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Judul Layanan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="ijudul" id="ijudul" placeholder="Judul Layanan" required=""> 
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Deskripsi Layanan</label>
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
                                        <table class="table table-striped table-bordered table-hover" id="sample_3">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
                                                    <th> Gambar</th>
                                                    <th> Judul</th>
                                                    <th> Deskripsi </th>
                                                    <th> Aksi</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $no=1;
                                            foreach ($layanan as $row) {
                                                $gambar = "'".$row->gambar."'";
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++?></td>
                                                    <td width="150"><img  class="img-responsive img-thumbnail" src="<?php echo base_url()?>assets/uploads/layanan/<?php echo $row->gambar?>"> </td>
                                                    <td><?php echo $row->judul?></td>
                                                    <td><?php echo $row->deskripsi?></td>
                                                    <td>
                                                        <a title="Edit" type="button" onclick="edit_layanan(<?php echo $row->id?>)" class="fa fa-edit btn green-meadow"></a>
                                                        <a title="Hapus" onclick="confirm_del(<?php echo $row->id?>, <?php echo $gambar?>);" class="fa fa-trash-o btn red-sunglo"></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
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
