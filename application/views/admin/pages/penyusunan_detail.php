<!-- Main content -->
<div class="content-wrapper">



  <!-- Content area -->
  <div class="content">



    <!-- Dashboard content -->
    <div class="row">

      <div class="col-sm-12">
        <div class="card ">
          <div class="card-header header-elements-inline">
            <h6 class="card-title">Detail Kajian</h6>
            <div class="header-elements">
              <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                      </div>
                    </div>
              </div>
              <div style="margin-left:5%" class="media flex-column flex-sm-row mt-0 mb-3">
				        					<div class="mr-sm-3 mb-2 mb-sm-0">
												<div class="card-img-actions">
													<a href="#">
														<img src="<?=base_url()?>assets/global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
														<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
													</a>
												</div>
											</div>

				        					<div class="media-body">
												<h6 class="media-title"><a href="#"><?=$kajian->Judul?></a></h6>
					                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
					                    			<li class="list-inline-item"><i class="icon-user mr-2"></i><?=$kajian->Penyusun?> || <?=$kajian->id_unit?> || Tahun: <?=$kajian->Tahun?></li>
					                    		</ul>
												<p><?=$kajian->Abstrak?></p>


                        <span>Jumlah Dilihat : 0</span></br>
                        <span>Jumlah Didownload : 0</span></br>
											</div>
										</div>
        </div>
      </div>

      <div class="col-sm-12">
        <div class="card ">
          <div class="card-header header-elements-inline">
            <h6 class="card-title">Detail Tahap Penyusunan Kajian</h6>
            <div class="header-elements">
              <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                      </div>
                    </div>
              </div>

  							<div class="card-body">
  								<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
                      <?php $no=0; foreach ($tahap as $k) { $no++; if($no==1){?>
  									<li class="nav-item"><a href="#tahap<?=$k->id?>" class="nav-link active" data-toggle="tab"><?=$k->Nama_tahap?></a></li>
                    <?php }else{?>
                    <li class="nav-item"><a href="#tahap<?=$k->id?>" class="nav-link" data-toggle="tab"><?=$k->Nama_tahap?></a></li>
                    <?php }}?>
  								</ul>

  								<div class="tab-content">
                    <?php $no=0; foreach ($tahap as $k) { $no++; if($no==1){?>
  									<div class="tab-pane fade show active" id="tahap<?=$k->id?>">


                      <div class="col-sm-12">
                        <div class="card ">
                          <div class="card-header header-elements-inline">
                            <h6 class="card-title">Ulasan Tahap Penelitian</h6>
                            <div class="col-sm-6">


                            </div>

                            <div class="header-elements">
                              <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                      </div>
                                    </div>
                              </div>

                              <?php
                                $detail=$this->Madmin->get_detail_tahap('kajian_tahap',$k->id,$id_kajian);
                                if($detail){
                                 ?>
                              <!-- Submit a ticket -->
                        				<div style="padding:2%" class="card card-body">
                        					<div class="media align-items-center align-items-md-start flex-column flex-md-row">
                        						<a href="#" class="text-teal mr-md-3 align-self-md-center mb-3 mb-md-0">
                        							<i class="icon-question7 text-success-400 border-success-400 border-3 rounded-round p-2"></i>
                        						</a>

                        						<div class="media-body text-center text-md-left">

                        							<h6 class="media-title font-weight-semibold"><?=$kajian->Judul?></h6>
                                      <p>Status Tahapan: <span class="badge badge-info">draft</span> (Waktu Dibuat -> <?=$detail->tgl_dibuat?>)</p>
                        							<p><?=$detail->uraian?></p>
                                      <p>Download via Link : <a href="http://<?=$detail->google_drive?>">Link Download</a> || Jumlah Download : 1 || Jumlah view : 1 </p>
                        						</div>
                                    <?php if($id_user!=4){?>
                                    <button type="button" class="btn bg-info align-self-md-center ml-md-3 mt-3 mt-md-0" data-toggle="modal" data-target="#modal_full_edit<?=$k->id?>">Edit Detail Ulasan</button>
                                  <?php }?>
                                    <!-- Full width modal -->
                                      <div id="modal_full_edit<?=$k->id?>" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title">Form Tambah Berkas Tahap <?=$k->Nama_tahap?></h5>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body">
                                              <form action="<?=base_url()?>siska/SusunKajian/tambah_detail_tahap/kajian_tahap/<?=$id_kajian?>/<?=$k->id?>" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                  <input type="hidden" id="id" name="id">
                                                  <input type="hidden" id="id_kajian" name="id_kajian" value="<?=$id_kajian?>">
                                                  <input type="hidden" id="id_tahap" name="id_tahap" value="<?=$k->id?>">
                                                  <div class="col-sm-6">
                                                    <div class="form-group">
                                                      <label>Tahap:</label>
                                                      <input type="text" id="tahap" name="tahap" class="form-control" value="<?=$k->Nama_tahap?>" placeholder="Tahap" readonly>
                                                    </div>

                                                    <div class="form-group">
                                                      <label>Link:</label>
                                                      <input id="link" name="link" class="form-control" placeholder="Link"  >
                                                    </div>

                                                  </div>
                                                    <div class="col-sm-6">

                                                      <div class="form-group">
                                                        <label>Upload Berkas:</label>
                                                        <input type="file" name="ifile" >
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                  <div class="card">
                                                    <div class="card-header header-elements-inline">
                                                      <h5 class="card-title">Abstrak :</h5>
                                                      <div class="header-elements">
                                                        <div class="list-icons">
                                                                  <a class="list-icons-item" data-action="collapse"></a>
                                                                  <a class="list-icons-item" data-action="reload"></a>
                                                                  <a class="list-icons-item" data-action="remove"></a>
                                                                </div>
                                                              </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <textarea id="summernote_1" name="ideskripsi"></textarea>
                                                        <script>$("#summernote_1").summernote("code",<?=$detail->uraian?>);</script>
                                                    </div>
                                                  </div>
                                                </div>

                                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn bg-info">Save changes</button>

                                                <!-- <div class="text-right">
                                                  <button type="submit" class="btn btn-primary">Simpan Data <i class="icon-paperplane ml-2"></i></button>
                                                </div> -->
                                              </form>
                                            </div>

                                            <div class="modal-footer">

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- /full width modal -->

                        						<a href="<?=base_url()?>assets/uploads/kajian/berkas/<?=$detail->berkas?>" class="btn bg-warning-400 align-self-md-center ml-md-3 mt-3 mt-md-0"><i class="icon-download mr-2"></i> Download Berkas</a>
                        					</div>
                        				</div>
                        				<!-- /submit a ticket -->
                            <?php
                          }else{?>
                            <div class="alert alert-primary border-0 alert-dismissible">
            									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>

                              <!-- Full width modal -->
                                <div id="modal_full<?=$k->id?>" class="modal fade" tabindex="-1">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Form Tambah Berkas Tahap <?=$k->Nama_tahap?></h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>

                                      <div class="modal-body">
                                        <form action="<?=base_url()?>siska/SusunKajian/tambah_detail_tahap/kajian_tahap/<?=$id_kajian?>/<?=$k->id?>" method="POST" enctype="multipart/form-data">
                                          <div class="row">
                                            <input type="hidden" id="id" name="id">
                                            <input type="hidden" id="id_kajian" name="id_kajian" value="<?=$id_kajian?>">
                                            <input type="hidden" id="id_tahap" name="id_tahap" value="<?=$k->id?>">
                                            <div class="col-sm-6">
                                              <div class="form-group">
                                                <label>Tahap:</label>
                                                <input type="text" id="tahap" name="tahap" class="form-control" value="<?=$k->Nama_tahap?>" placeholder="Tahap" readonly>
                                              </div>

                                              <div class="form-group">
                                                <label>Link:</label>
                                                <input id="link" name="link" class="form-control" placeholder="Link"  >
                                              </div>

                                            </div>
                                              <div class="col-sm-6">

                                                <div class="form-group">
                                                  <label>Upload Berkas:</label>
                                                  <input type="file" name="ifile" >
                                                </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                            <div class="card">
                                              <div class="card-header header-elements-inline">
                                                <h5 class="card-title">Abstrak :</h5>
                                                <div class="header-elements">
                                                  <div class="list-icons">
                                                            <a class="list-icons-item" data-action="collapse"></a>
                                                            <a class="list-icons-item" data-action="reload"></a>
                                                            <a class="list-icons-item" data-action="remove"></a>
                                                          </div>
                                                        </div>
                                              </div>

                                              <div class="card-body">
                                                  <textarea id="summernote_1" name="ideskripsi"></textarea>
                                                  <script>$("#summernote_1").summernote("code",<?=$detail->uraian?>);</script>
                                              </div>
                                            </div>
                                          </div>

                                          <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn bg-info">Save changes</button>

                                          <!-- <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Simpan Data <i class="icon-paperplane ml-2"></i></button>
                                          </div> -->
                                        </form>
                                      </div>

                                      <div class="modal-footer">

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /full width modal -->
                              <?php if($id_user!=4){?>
                              <span class="font-weight-semibold">Lengkapi</span> Detail Ulasan <a href="#" data-toggle="modal" data-target="#modal_full<?=$k->id?>" class="alert-link">Klik Disini untuk Tambah Detail Ulasan</a>.
                            <?php }else{echo "Lampiran Kosong";}?>
                              </div>
                          <?php }
                            ?>
                            </div>
                          </div>

                        <div class="col-sm-12">
                          <div class="card ">
                            <div class="card-header header-elements-inline">
                              <h6 class="card-title">Daftar Lampiran</h6>
                              <div class="col-sm-6">
                                <?php if($id_user!=4){?>
                                <button type="button" class="btn bg-info" data-toggle="modal" data-target="#modal_lampiran<?=$k->id?>"><i class="icon-file-plus ml-2"></i></button>
                              <?php }?>
                                <!-- <button onclick="edit(<?=$k->id?>)" class="btn btn-warning"><i class="icon-pencil5 ml-2"></i></button>
                                <button  class="btn btn-danger"><i class="icon-trash ml-2"></i></button> -->
                              </div>

                              <!-- Full width modal -->
                                <div id="modal_lampiran<?=$k->id?>" class="modal fade" tabindex="-1">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Form Tambah Berkas Tahap <?=$k->Nama_tahap?></h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>

                                      <div class="modal-body">
                                        <form action="<?=base_url()?>siska/SusunKajian/tambah_lampiran_tahap/kajian_lampiran/<?=$id_kajian?>/<?=$k->id?>" method="POST" enctype="multipart/form-data">
                                          <div class="row">
                                            <input type="hidden" id="id" name="id">
                                            <input type="hidden" id="id_kajian" name="id_kajian" value="<?=$id_kajian?>">
                                            <input type="hidden" id="id_tahap" name="id_tahap" value="<?=$k->id?>">
                                            <div class="col-sm-6">
                                              <div class="form-group">
                                                <label>Judul:</label>
                                                <input type="text" id="judul" name="judul" class="form-control"  placeholder="Judul" >
                                              </div>

                                            </div>
                                              <div class="col-sm-6">

                                                <div class="form-group">
                                                  <label>Upload Berkas:</label>
                                                  <input type="file" name="ifile" >
                                                </div>
                                              </div>
                                          </div>

                                          <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn bg-info">Save changes</button>

                                          <!-- <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Simpan Data <i class="icon-paperplane ml-2"></i></button>
                                          </div> -->
                                        </form>
                                      </div>

                                      <div class="modal-footer">

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /full width modal -->

                              <div class="header-elements">
                                <div class="list-icons">
                                          <a class="list-icons-item" data-action="collapse"></a>
                                          <a class="list-icons-item" data-action="reload"></a>
                                          <a class="list-icons-item" data-action="remove"></a>
                                        </div>
                                      </div>
                                </div>

                                <?php
                                  $lampiran=$this->Madmin->get_detail_tahap('kajian_lampiran',$k->id,$id_kajian);
                                  if($lampiran){
                                   ?>

                                <div  class="col-lg-3">
                      						<div style="padding:3%" class="card card-body">
                      							<div class="media">
                      								<div class="mr-3">
                      									<a href="<?=base_url()?>assets/uploads/kajian/lampiran/<?=$lampiran->file?>"><i class="icon-file-text2 text-success-400 icon-2x mt-1"></i></a>
                      								</div>

                      								<div class="media-body">
                      									<h6 class="media-title font-weight-semibold"><a href="#" class="text-default"><?=$lampiran->judul?></a></h6>
                      								</div>
                      							</div>
                      						</div>
                      					</div>
                              <?php }else{?>
                                <div class="alert alert-primary border-0 alert-dismissible">
                                <span class="font-weight-semibold">Lampiran Kosong</span>.
                              </div>
                              <?php }?>

                              </div>
                            </div>

                          <div class="col-sm-12">
                            <div class="card ">
                              <div class="card-header header-elements-inline">
                                <h6 class="card-title">Daftar Ulasan</h6>
                                <div class="col-sm-6">
                                  <?php //if($id_user!=4){?>
                                  <button type="button" class="btn bg-info" data-toggle="modal" data-target="#modal_ulasan<?=$k->id?>">Masukkan Komentar</button>
                                <?php //}?>
                                  <!-- <button onclick="edit(<?=$k->id?>)" class="btn btn-warning"><i class="icon-pencil5 ml-2"></i></button> -->

                                  <!-- Full width modal -->
                                    <div id="modal_ulasan<?=$k->id?>" class="modal fade" tabindex="-1">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title">Form Tambah Berkas Tahap <?=$k->Nama_tahap?></h5>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>

                                          <div class="modal-body">
                                            <form action="<?=base_url()?>siska/SusunKajian/tambah_ulasan_tahap/kajian_ulasan/<?=$id_kajian?>/<?=$k->id?>" method="POST" enctype="multipart/form-data">
                                              <div class="row">
                                                <input type="hidden" id="id" name="id">
                                                <input type="hidden" id="id_kajian" name="id_kajian" value="<?=$id_kajian?>">
                                                <input type="hidden" id="id_tahap" name="id_tahap" value="<?=$k->id?>">
                                                <input type="hidden" id="id_user" name="id_user" value="<?=$id_user?>">
                                                <div class="col-sm-12">
                                                  <div class="form-group">
                                                    <label>Komentar:</label>
                                                    <textarea class="form-control" id="Komentar" name="Komentar"></textarea>
                                                    <!-- <input type="text" id="judul" name="judul" class="form-control"  placeholder="Judul" > -->
                                                  </div>

                                                </div>
                                              </div>

                                              <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn bg-info">Save changes</button>

                                              <!-- <div class="text-right">
                                                <button type="submit" class="btn btn-primary">Simpan Data <i class="icon-paperplane ml-2"></i></button>
                                              </div> -->
                                            </form>
                                          </div>

                                          <div class="modal-footer">

                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- /full width modal -->

                                </div>

                                <div class="header-elements">
                                  <div class="list-icons">
                                            <a class="list-icons-item" data-action="collapse"></a>
                                            <a class="list-icons-item" data-action="reload"></a>
                                            <a class="list-icons-item" data-action="remove"></a>
                                          </div>
                                        </div>
                                  </div>


                                  <?php
                                    $ulasan=$this->Madmin->get_detail_tahap('kajian_ulasan',$k->id,$id_kajian);
                                    if($ulasan){?>
                                  <div style="padding:2%" class="media card-body flex-column flex-md-row m-0">

                                    <div class="mr-md-3 mb-2 mb-md-0">
                                      <a href="#">
                                        <img src="<?=base_url()?>assets/global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="64" height="64" alt="">
                                      </a>
                                    </div>

                                    <div class="media-body">
                                      <h6 class="media-title font-weight-semibold"><?=$nama?></h6>
                                      <p><?=$ulasan->Tanggal?></p>
                                      <p><?=$ulasan->komentar?></p>

                                    </div>

                                  </div>
                                <?php }else{?>
                                  <div class="alert alert-primary border-0 alert-dismissible">
                                  <span class="font-weight-semibold">Usulan Kosong</span>.
                                </div>
                                <?php }?>

                                </div>
                              </div>


  									</div>
                    <?php }else{?>
  									<div class="tab-pane fade" id="tahap<?=$k->id?>">

                      <div class="col-sm-12">
                        <div class="card ">
                          <div class="card-header header-elements-inline">
                            <h6 class="card-title">Ulasan Tahap Penelitian</h6>
                            <div class="col-sm-6">


                            </div>

                            <div class="header-elements">
                              <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                      </div>
                                    </div>
                              </div>

                              <?php
                                $detail=$this->Madmin->get_detail_tahap('kajian_tahap',$k->id,$id_kajian);
                                if($detail){
                                 ?>
                              <!-- Submit a ticket -->
                        				<div style="padding:2%" class="card card-body">
                        					<div class="media align-items-center align-items-md-start flex-column flex-md-row">
                        						<a href="#" class="text-teal mr-md-3 align-self-md-center mb-3 mb-md-0">
                        							<i class="icon-question7 text-success-400 border-success-400 border-3 rounded-round p-2"></i>
                        						</a>

                        						<div class="media-body text-center text-md-left">

                        							<h6 class="media-title font-weight-semibold"><?=$kajian->Judul?></h6>
                                      <p>Status Tahapan: <span class="badge badge-info">draft</span> (Waktu Dibuat -> <?=$detail->tgl_dibuat?>)</p>
                        							<p><?=$detail->uraian?></p>
                                      <p>Download via Link : <a href="http://<?=$detail->google_drive?>">Link Download</a> || Jumlah Download : 1 || Jumlah view : 1 </p>
                        						</div>
                                    <?php if($id_user!=4){?>
                                    <button type="button" class="btn bg-info align-self-md-center ml-md-3 mt-3 mt-md-0" data-toggle="modal" data-target="#modal_full_edit<?=$k->id?>">Edit Detail Ulasan</button>
                                  <?php }?>
                                    <!-- Full width modal -->
                                      <div id="modal_full_edit<?=$k->id?>" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title">Form Tambah Berkas Tahap <?=$k->Nama_tahap?></h5>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body">
                                              <form action="<?=base_url()?>siska/SusunKajian/tambah_detail_tahap/kajian_tahap/<?=$id_kajian?>/<?=$k->id?>" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                  <input type="hidden" id="id" name="id">
                                                  <input type="hidden" id="id_kajian" name="id_kajian" value="<?=$id_kajian?>">
                                                  <input type="hidden" id="id_tahap" name="id_tahap" value="<?=$k->id?>">
                                                  <div class="col-sm-6">
                                                    <div class="form-group">
                                                      <label>Tahap:</label>
                                                      <input type="text" id="tahap" name="tahap" class="form-control" value="<?=$k->Nama_tahap?>" placeholder="Tahap" readonly>
                                                    </div>

                                                    <div class="form-group">
                                                      <label>Link:</label>
                                                      <input id="link" name="link" class="form-control" placeholder="Link"  >
                                                    </div>

                                                  </div>
                                                    <div class="col-sm-6">

                                                      <div class="form-group">
                                                        <label>Upload Berkas:</label>
                                                        <input type="file" name="ifile" >
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                  <div class="card">
                                                    <div class="card-header header-elements-inline">
                                                      <h5 class="card-title">Abstrak :</h5>
                                                      <div class="header-elements">
                                                        <div class="list-icons">
                                                                  <a class="list-icons-item" data-action="collapse"></a>
                                                                  <a class="list-icons-item" data-action="reload"></a>
                                                                  <a class="list-icons-item" data-action="remove"></a>
                                                                </div>
                                                              </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <textarea id="summernote_1" name="ideskripsi"></textarea>
                                                        <script>$("#summernote_1").summernote("code",<?=$detail->uraian?>);</script>
                                                    </div>
                                                  </div>
                                                </div>

                                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn bg-info">Save changes</button>

                                                <!-- <div class="text-right">
                                                  <button type="submit" class="btn btn-primary">Simpan Data <i class="icon-paperplane ml-2"></i></button>
                                                </div> -->
                                              </form>
                                            </div>

                                            <div class="modal-footer">

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- /full width modal -->

                        						<a href="<?=base_url()?>assets/uploads/kajian/berkas/<?=$detail->berkas?>" class="btn bg-warning-400 align-self-md-center ml-md-3 mt-3 mt-md-0"><i class="icon-download mr-2"></i> Download Berkas</a>
                        					</div>
                        				</div>
                        				<!-- /submit a ticket -->
                            <?php
                          }else{?>
                            <div class="alert alert-primary border-0 alert-dismissible">
            									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>

                              <!-- Full width modal -->
                                <div id="modal_full<?=$k->id?>" class="modal fade" tabindex="-1">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Form Tambah Berkas Tahap <?=$k->Nama_tahap?></h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>

                                      <div class="modal-body">
                                        <form action="<?=base_url()?>siska/SusunKajian/tambah_detail_tahap/kajian_tahap/<?=$id_kajian?>/<?=$k->id?>" method="POST" enctype="multipart/form-data">
                                          <div class="row">
                                            <input type="hidden" id="id" name="id">
                                            <input type="hidden" id="id_kajian" name="id_kajian" value="<?=$id_kajian?>">
                                            <input type="hidden" id="id_tahap" name="id_tahap" value="<?=$k->id?>">
                                            <div class="col-sm-6">
                                              <div class="form-group">
                                                <label>Tahap:</label>
                                                <input type="text" id="tahap" name="tahap" class="form-control" value="<?=$k->Nama_tahap?>" placeholder="Tahap" readonly>
                                              </div>

                                              <div class="form-group">
                                                <label>Link:</label>
                                                <input id="link" name="link" class="form-control" placeholder="Link"  >
                                              </div>

                                            </div>
                                              <div class="col-sm-6">

                                                <div class="form-group">
                                                  <label>Upload Berkas:</label>
                                                  <input type="file" name="ifile" >
                                                </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                            <div class="card">
                                              <div class="card-header header-elements-inline">
                                                <h5 class="card-title">Abstrak :</h5>
                                                <div class="header-elements">
                                                  <div class="list-icons">
                                                            <a class="list-icons-item" data-action="collapse"></a>
                                                            <a class="list-icons-item" data-action="reload"></a>
                                                            <a class="list-icons-item" data-action="remove"></a>
                                                          </div>
                                                        </div>
                                              </div>

                                              <div class="card-body">
                                                  <textarea id="summernote_1" name="ideskripsi"></textarea>
                                                  <script>$("#summernote_1").summernote("code",<?=$detail->uraian?>);</script>
                                              </div>
                                            </div>
                                          </div>

                                          <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn bg-info">Save changes</button>

                                          <!-- <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Simpan Data <i class="icon-paperplane ml-2"></i></button>
                                          </div> -->
                                        </form>
                                      </div>

                                      <div class="modal-footer">

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /full width modal -->
                              <?php if($id_user!=4){?>
                              <span class="font-weight-semibold">Lengkapi</span> Detail Ulasan <a href="#" data-toggle="modal" data-target="#modal_full<?=$k->id?>" class="alert-link">Klik Disini untuk Tambah Detail Ulasan</a>.
                            <?php }else{echo "Lampiran Kosong";}?>
                              </div>
                          <?php }
                            ?>
                            </div>
                          </div>

                        <div class="col-sm-12">
                          <div class="card ">
                            <div class="card-header header-elements-inline">
                              <h6 class="card-title">Daftar Lampiran</h6>
                              <div class="col-sm-6">
                                <?php if($id_user!=4){?>
                                <button type="button" class="btn bg-info" data-toggle="modal" data-target="#modal_lampiran<?=$k->id?>"><i class="icon-file-plus ml-2"></i></button>
                              <?php }?>
                                <!-- <button onclick="edit(<?=$k->id?>)" class="btn btn-warning"><i class="icon-pencil5 ml-2"></i></button>
                                <button  class="btn btn-danger"><i class="icon-trash ml-2"></i></button> -->
                              </div>

                              <!-- Full width modal -->
                                <div id="modal_lampiran<?=$k->id?>" class="modal fade" tabindex="-1">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Form Tambah Berkas Tahap <?=$k->Nama_tahap?></h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>

                                      <div class="modal-body">
                                        <form action="<?=base_url()?>siska/SusunKajian/tambah_lampiran_tahap/kajian_lampiran/<?=$id_kajian?>/<?=$k->id?>" method="POST" enctype="multipart/form-data">
                                          <div class="row">
                                            <input type="hidden" id="id" name="id">
                                            <input type="hidden" id="id_kajian" name="id_kajian" value="<?=$id_kajian?>">
                                            <input type="hidden" id="id_tahap" name="id_tahap" value="<?=$k->id?>">
                                            <div class="col-sm-6">
                                              <div class="form-group">
                                                <label>Judul:</label>
                                                <input type="text" id="judul" name="judul" class="form-control"  placeholder="Judul" >
                                              </div>

                                            </div>
                                              <div class="col-sm-6">

                                                <div class="form-group">
                                                  <label>Upload Berkas:</label>
                                                  <input type="file" name="ifile" >
                                                </div>
                                              </div>
                                          </div>

                                          <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn bg-info">Save changes</button>

                                          <!-- <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Simpan Data <i class="icon-paperplane ml-2"></i></button>
                                          </div> -->
                                        </form>
                                      </div>

                                      <div class="modal-footer">

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /full width modal -->

                              <div class="header-elements">
                                <div class="list-icons">
                                          <a class="list-icons-item" data-action="collapse"></a>
                                          <a class="list-icons-item" data-action="reload"></a>
                                          <a class="list-icons-item" data-action="remove"></a>
                                        </div>
                                      </div>
                                </div>

                                <?php
                                  $lampiran=$this->Madmin->get_detail_tahap('kajian_lampiran',$k->id,$id_kajian);
                                  if($lampiran){
                                   ?>

                                <div  class="col-lg-3">
                      						<div style="padding:3%" class="card card-body">
                      							<div class="media">
                      								<div class="mr-3">
                      									<a href="<?=base_url()?>assets/uploads/kajian/lampiran/<?=$lampiran->file?>"><i class="icon-file-text2 text-success-400 icon-2x mt-1"></i></a>
                      								</div>

                      								<div class="media-body">
                      									<h6 class="media-title font-weight-semibold"><a href="#" class="text-default"><?=$lampiran->judul?></a></h6>
                      								</div>
                      							</div>
                      						</div>
                      					</div>
                              <?php }else{?>
                                <div class="alert alert-primary border-0 alert-dismissible">
                                <span class="font-weight-semibold">Lampiran Kosong</span>.
                              </div>
                              <?php }?>

                              </div>
                            </div>

                          <div class="col-sm-12">
                            <div class="card ">
                              <div class="card-header header-elements-inline">
                                <h6 class="card-title">Daftar Ulasan</h6>
                                <div class="col-sm-6">
                                  <?php //if($id_user!=4){?>
                                  <button type="button" class="btn bg-info" data-toggle="modal" data-target="#modal_ulasan<?=$k->id?>">Masukan Komentar</button>
                                <?php //}?>
                                  <!-- <button onclick="edit(<?=$k->id?>)" class="btn btn-warning"><i class="icon-pencil5 ml-2"></i></button> -->

                                  <!-- Full width modal -->
                                    <div id="modal_ulasan<?=$k->id?>" class="modal fade" tabindex="-1">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title">Form Tambah Berkas Tahap <?=$k->Nama_tahap?></h5>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>

                                          <div class="modal-body">
                                            <form action="<?=base_url()?>siska/SusunKajian/tambah_ulasan_tahap/kajian_ulasan/<?=$id_kajian?>/<?=$k->id?>" method="POST" enctype="multipart/form-data">
                                              <div class="row">
                                                <input type="hidden" id="id" name="id">
                                                <input type="hidden" id="id_kajian" name="id_kajian" value="<?=$id_kajian?>">
                                                <input type="hidden" id="id_tahap" name="id_tahap" value="<?=$k->id?>">
                                                <input type="hidden" id="id_user" name="id_user" value="<?=$id_user?>">
                                                <div class="col-sm-12">
                                                  <div class="form-group">
                                                    <label>Komentar:</label>
                                                    <textarea class="form-control" id="Komentar" name="Komentar"></textarea>
                                                    <!-- <input type="text" id="judul" name="judul" class="form-control"  placeholder="Judul" > -->
                                                  </div>

                                                </div>
                                              </div>

                                              <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn bg-info">Save changes</button>

                                              <!-- <div class="text-right">
                                                <button type="submit" class="btn btn-primary">Simpan Data <i class="icon-paperplane ml-2"></i></button>
                                              </div> -->
                                            </form>
                                          </div>

                                          <div class="modal-footer">

                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- /full width modal -->

                                </div>

                                <div class="header-elements">
                                  <div class="list-icons">
                                            <a class="list-icons-item" data-action="collapse"></a>
                                            <a class="list-icons-item" data-action="reload"></a>
                                            <a class="list-icons-item" data-action="remove"></a>
                                          </div>
                                        </div>
                                  </div>


                                  <?php
                                    $ulasan=$this->Madmin->get_detail_tahap('kajian_ulasan',$k->id,$id_kajian);
                                    if($ulasan){?>
                                  <div style="padding:2%" class="media card-body flex-column flex-md-row m-0">

                                    <div class="mr-md-3 mb-2 mb-md-0">
                                      <a href="#">
                                        <img src="<?=base_url()?>assets/global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="64" height="64" alt="">
                                      </a>
                                    </div>

                                    <div class="media-body">
                                      <h6 class="media-title font-weight-semibold"><?=$nama?></h6>
                                      <p><?=$ulasan->Tanggal?></p>
                                      <p><?=$ulasan->komentar?></p>

                                    </div>

                                  </div>
                                <?php }else{?>
                                  <div class="alert alert-primary border-0 alert-dismissible">
                                  <span class="font-weight-semibold">Usulan Kosong</span>.
                                </div>
                                <?php }?>

                                </div>
                              </div>

                    </div>
                    <?php }}?>
  								</div>
                  <div class="col-sm-12C">
                    <?php if($id_user==4){?>
                    <button class="col-sm-12 btn btn-success">Verifikasi Usulan</button>
                  <?php }else{?>
                    <button class="col-sm-12 btn btn-success">Kirim Usulan</button>
                  <?php }?>
                  </div>
                </div>

              </div>

            </div>

          </div>
  				<!-- /highlighted tabs -->


        </div>
      </div>





    </div>
  </div>
</div>

</div>

</div>
<!-- /dashboard content -->

</div>
<!-- /content area -->
