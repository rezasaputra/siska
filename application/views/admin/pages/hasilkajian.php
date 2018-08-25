


		<!-- Main content -->
		<div class="content-wrapper">



			<!-- Content area -->
			<div class="content">



				<!-- Dashboard content -->
				<div class="row">

          <div class="col-sm-12">
            <div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Hasil Kajian</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
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
                                  <!-- <button onclick="edit(<?=$k->id?>)" class="btn btn-warning"><i class="icon-pencil5 ml-2"></i></button> -->
                                  <a href="<?=base_url()?>siska/HasilKajian/detail_kajian/<?=$k->id?>/1"  class="btn btn-info"><i class="icon-eye ml-2"></i></a>
                                  <!-- <button  class="btn btn-danger"><i class="icon-trash ml-2"></i></button> -->

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
																	<!-- <button onclick="edit(<?=$k->id?>)" class="btn btn-warning"><i class="icon-pencil5 ml-2"></i></button> -->
																	<a href="<?=base_url()?>siska/HasilKajian/detail_kajian/<?=$k->id?>/1"  class="btn btn-info"><i class="icon-eye ml-2"></i></a>
																	<!-- <button  class="btn btn-danger"><i class="icon-trash ml-2"></i></button> -->


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
																	<!-- <button onclick="edit(<?=$k->id?>)" class="btn btn-warning"><i class="icon-pencil5 ml-2"></i></button> -->
																	<a href="<?=base_url()?>siska/HasilKajian/detail_kajian/<?=$k->id?>/1"  class="btn btn-info"><i class="icon-eye ml-2"></i></a>
																	<!-- <button  class="btn btn-danger"><i class="icon-trash ml-2"></i></button> -->


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
																	<!-- <button onclick="edit(<?=$k->id?>)" class="btn btn-warning"><i class="icon-pencil5 ml-2"></i></button> -->
																	<a href="<?=base_url()?>siska/HasilKajian/detail_kajian/<?=$k->id?>/1"  class="btn btn-info"><i class="icon-eye ml-2"></i></a>
																	<!-- <button  class="btn btn-danger"><i class="icon-trash ml-2"></i></button> -->


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
