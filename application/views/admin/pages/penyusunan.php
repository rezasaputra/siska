


		<!-- Main content -->
		<div class="content-wrapper">



			<!-- Content area -->
			<div class="content">



				<!-- Dashboard content -->
				<div class="row">

          <div class="col-sm-12">
            <div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">penyusunan Kajian</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
                  </div>
                  <div class="margin-bottom:20px;margin-left:20px">
										<?php
											if($id_user!=4){?>
												<button type="button" class="btn bg-info" data-toggle="modal" data-target="#modal_full">Tambah Kajian Baru <i class="icon-file-plus ml-2"></i></button>
										<?php	}
										?>

            <!-- Full width modal -->
      				<div id="modal_full" class="modal fade" tabindex="-1">
      					<div class="modal-dialog modal-lg">
      						<div class="modal-content">
      							<div class="modal-header">
      								<h5 class="modal-title">Form Tambah Kajian</h5>
      								<button type="button" class="close" data-dismiss="modal">&times;</button>
      							</div>

      							<div class="modal-body">
                      <form action="<?=base_url()?>siska/SusunKajian/tambah/kajian" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Tahun:</label>
                              <input type="text" id="tahun" name="tahun" class="form-control" placeholder="Tahun">
                            </div>
														<div class="form-group">
					                    <label>Jenis:</label>
					                    <select  id="jenis" name="jenis" data-placeholder="Pilih Jenis" class="form-control form-control-select2-icons" >
					                      <optgroup label="Jenis">
																	<?php foreach ($jenis as $j) {?>
						                        <option id="jen<?=$j->id?>" value="<?=$j->id?>" data-icon=""  ><?=$j->nama?></option>
																<?php	}?>
					                      </optgroup>
					                    </select>
					                  </div>
														<div class="form-group">
					                    <label>Unit:</label>
					                    <select  id="unit" name="unit" data-placeholder="Pilih Unit" class="form-control form-control-select2-icons" >
					                      <optgroup label="Unit LAN">
																	<?php foreach ($unit as $u) {?>
						                        <option id="uni<?=$u->id?>" value="<?=$u->id?>" data-icon=""  ><?=$u->Nama?></option>
																<?php	}?>
					                      </optgroup>
					                    </select>
					                  </div>
                            <div class="form-group">
                              <label>Judul:</label>
                              <textarea id="judul" name="judul" class="form-control" ></textarea>
                            </div>

                          </div>
                            <div class="col-sm-6">


                              <div class="form-group">
                                <label>Keyword:</label>
                                <input id="keyword" name="keyword" type="text" class="form-control" placeholder="Keyword">
                              </div>

                              <div class="form-group">
                                <label>Pegawai:</label>
                                <select id="pegawai" name="pegawai" multiple="multiple" data-placeholder="Pilih Pegawai" class="form-control form-control-select2-icons" data-fouc>
																	<optgroup label="Unit LAN">
																	 <?php foreach ($pegawai as $p) {?>
																		 <option id="peg<?=$p->id?>" value="<?=$p->id?>" data-icon=""  ><?=$p->Nama?></option>
																 <?php	}?>
																 </optgroup>
                                </select>
                              </div>
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
							<div class="card-body">

								<div class="jui-tabs-sortable" id="ui-tabs-sortable-container" data-fouc>
									<ul>
										<li><a href="#tabs-sortable-1">Daftar Kajian <span style="margin-left:5px" class="badge badge-primary"> <?=$jumkajian;?></span></a></li>
										<li><a href="#tabs-sortable-2">Daftar Jurnal <span style="margin-left:5px" class="badge badge-primary"> <?=$jumjurnal;?></span></a></li>
										<li><a href="#tabs-sortable-3">Daftar Policy Brief <span style="margin-left:5px" class="badge badge-primary"> <?=$jumPB;?></span></a></li>
										<li><a href="#tabs-sortable-4">Daftar Policy Note <span style="margin-left:5px" class="badge badge-primary"> <?=$jumPN;?></span></a></li>
									</ul>
									<div id="tabs-sortable-1">
                    <table class="table datatable-html">
                      <thead>
                        		<tr>
                                  <th>No</th>
                                  <th>Judul</th>
                                  <th>Tahun</th>
                                  <th>Jenis</th>
                                  <th>Unit</th>
                                  <th>Progress</th>
                                  <th class="text-center">Actions</th>
                              </tr>
                      </thead>
                      <tbody>
												<?php $no=0; foreach ($kajian as $k) { $no++;?>
                              <tr>
                                  <td><?=$no;?></td>
                                  <td><?=$k->Judul;?></td>
                                  <td><?=$k->Tahun;?></td>
                                  <td><?=$k->id_jenis;?></td>
                                  <td><?=$k->id_unit;?></td>
                                  <td>1/6</td>
                                <td class="text-center">
                                  <a href="<?=base_url()?>siska/SusunKajian/detail_kajian/<?=$k->id?>/1"  class="btn btn-info"><i class="icon-eye ml-2"></i></a>
																	<?php if($id_user!=4){?>
                                  <button onclick="edit(<?=$k->id?>)" class="btn btn-warning"><i class="icon-pencil5 ml-2"></i></button>
                                  <button  class="btn btn-danger"><i class="icon-trash ml-2"></i></button>
																	<?php }?>
                                </td>
                              </tr>
												<?php	}?>
                      </tbody>
                    </table>
                  	</div>


									<div id="tabs-sortable-2">
                    <table class="table datatable-html">
                      <thead>
                        <tr>
                                  <th>No</th>
                                  <th>Judul</th>
                                  <th>Tahun</th>
                                  <th>Jenis</th>
                                  <th>Unit</th>
                                  <th>Progress</th>
                                  <th class="text-center">Actions</th>
                              </tr>
                      </thead>
                      <tbody>
												<?php $no=0; foreach ($jurnal as $k) { $no++;?>
                              <tr>
                                  <td><?=$no;?></td>
                                  <td><?=$k->Judul;?></td>
                                  <td><?=$k->Tahun;?></td>
                                  <td><?=$k->id_jenis;?></td>
                                  <td><?=$k->id_unit;?></td>
                                  <td>1/6</td>
																	<td class="text-center">
	                                  <a href="<?=base_url()?>siska/SusunKajian/detail_kajian/<?=$k->id?>/1"  class="btn btn-info"><i class="icon-eye ml-2"></i></a>
																		<?php if($id_user!=4){?>
	                                  <button onclick="edit(<?=$k->id?>)" class="btn btn-warning"><i class="icon-pencil5 ml-2"></i></button>
	                                  <button  class="btn btn-danger"><i class="icon-trash ml-2"></i></button>
																		<?php }?>
	                                </td>
                              </tr>
												<?php	}?>

                      </tbody>
                    </table>
                  </div>


									<div id="tabs-sortable-3">
                    <table class="table datatable-html">
                      <thead>
                        <tr>
                                  <th>No</th>
                                  <th>Judul</th>
                                  <th>Tahun</th>
                                  <th>Jenis</th>
                                  <th>Unit</th>
                                  <th>Progress</th>
                                  <th class="text-center">Actions</th>
                              </tr>
                      </thead>
                      <tbody>
												<?php $no=0; foreach ($PB as $k) { $no++;?>
                              <tr>
                                  <td><?=$no;?></td>
                                  <td><?=$k->Judul;?></td>
                                  <td><?=$k->Tahun;?></td>
                                  <td><?=$k->id_jenis;?></td>
                                  <td><?=$k->id_unit;?></td>
                                  <td>1/6</td>
																	<td class="text-center">
																		<a href="<?=base_url()?>siska/SusunKajian/detail_kajian/<?=$k->id?>/1"  class="btn btn-info"><i class="icon-eye ml-2"></i></a>
																		<?php if($id_user!=4){?>
																		<button onclick="edit(<?=$k->id?>)" class="btn btn-warning"><i class="icon-pencil5 ml-2"></i></button>
																		<button  class="btn btn-danger"><i class="icon-trash ml-2"></i></button>
																		<?php }?>
																	</td>
                              </tr>
												<?php	}?>

                      </tbody>
                    </table>
                  </div>


                  <div id="tabs-sortable-4">
                    <table class="table datatable-html">
                      <thead>
                        <tr>
                                  <th>No</th>
                                  <th>Judul</th>
                                  <th>Tahun</th>
                                  <th>Jenis</th>
                                  <th>Unit</th>
                                  <th>Progress</th>
                                  <th class="text-center">Actions</th>
                              </tr>
                      </thead>
                      <tbody>
												<?php $no=0; foreach ($PN as $k) { $no++;?>
                              <tr>
                                  <td><?=$no;?></td>
                                  <td><?=$k->Judul;?></td>
                                  <td><?=$k->Tahun;?></td>
                                  <td><?=$k->id_jenis;?></td>
                                  <td><?=$k->id_unit;?></td>
                                  <td>1/6</td>
																	<td class="text-center">
	                                  <a href="<?=base_url()?>siska/SusunKajian/detail_kajian/<?=$k->id?>/1"  class="btn btn-info"><i class="icon-eye ml-2"></i></a>
																		<?php if($id_user!=4){?>
	                                  <button onclick="edit(<?=$k->id?>)" class="btn btn-warning"><i class="icon-pencil5 ml-2"></i></button>
	                                  <button  class="btn btn-danger"><i class="icon-trash ml-2"></i></button>
																		<?php }?>
	                                </td>
                              </tr>
												<?php	}?>

                      </tbody>
                    </table>
                  </div>


								</div>
							</div>
						</div>
          </div>

        	</div>
				<!-- /dashboard content -->

			</div>
			<!-- /content area -->
