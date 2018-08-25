
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
                                <span>Menu</span>
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
                                        <h4>Form Menu</h4><hr>
                                        <form class="form-horizontal" role="form" action="<?php echo base_url()?>M_menu/save_menu" method="POST" enctype="multipart/form-data">
                                        <div class="form-body">
                                          <input type="text" name="id" id="id" class="hidden">
                                            <div class="form-group">

                                                <label class="col-md-2 control-label">Judul Menu</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="ijudul" id="ijudul" placeholder="Judul Menu" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <label class="col-md-2 control-label">Role Menu</label>
                                                <div class="col-md-9">
                                                    <select name="rolemenu" id="rolemenu" class="form-control">
                                                      <?php foreach ($role as $role): ?>
                                                        <option id="role<?=$role->id?>" value="<?=$role->id?>"><?=$role->nama?></option>
                                                      <?php endforeach; ?>
                                                    </select>
                                                    </div>
                                            </div>

                                            <div class="form-group">

                                                <label class="col-md-2 control-label">Level Menu</label>
                                                <div class="col-md-9">
                                                    <select name="levelmenu" id="levelmenu" class="form-control">
                                                      <option id="level0" value="0">Menu Utama</option>
                                                      <?php foreach ($menu as $m):
                                                        if($m->levelmenu==0){
                                                        ?>
                                                        <option id="level<?=$m->id?>" value="<?=$m->id?>">Sub Menu => <?=$m->nama_menu?></option>
                                                      <?php } endforeach; ?>
                                                    </select>
                                                    </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">icon</label>
                                                <!-- <div class="input-group">
                                                    <input data-placement="bottomRight" class="form-control icp icp-auto" value="fas fa-archive" type="text"/>
                                                    <span class="input-group-addon"></span>
                                                </div> -->
                                                <div class="col-md-9">
                                                <input type="text" class="form-control" name="icon" id="icon" placeholder="Icon Menu" required="">
                                              </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-md-2 control-label">URL</label>
                                                <div class="col-md-9">
                                                  <input type="text" class="form-control" name="URL" id="URL" placeholder="Alamat URL" required="">

                                                    </div>
                                            </div>

                                            <div class="form-group">

                                                <label class="col-md-2 control-label">Posisi</label>
                                                <div class="col-md-9">
                                                  <input type="text" class="form-control" name="Posisi" id="Posisi" placeholder="Tata Letak Menu" required="">

                                                    </div>
                                            </div>

                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-9">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <a href="<?php echo base_url()?>M_menu" class="btn btn-danger">Batal</a>
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
