


		<!-- Main content -->
		<div class="content-wrapper">



			<!-- Content area -->
			<div class="content">



				<!-- Dashboard content -->
				<div class="row">
          <div class="col-sm-8">

						<?php echo $this->session->flashdata('message'); ?>
            <!-- HTML sourced data -->
            <div class="card">
              <div class="card-header header-elements-inline">
                <h5 class="card-title">Daftar Anggota</h5>
                <div class="header-elements">
                  <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                          </div>
                        </div>
              </div>

								<div id="tabelreload"></div>
            </div>
            <!-- /HTML sourced data -->
          </div>
					<div class="col-xl-4">

            <div class="card">
              <div class="card-header header-elements-inline">
                <h5 class="card-title">Tambah Anggota</h5>
                <div class="header-elements">
                  <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                          </div>
                        </div>
              </div>

              <div class="card-body">
                <form action="<?=base_url()?>siska/Unit/tambah/unit" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="id" id="id" class="hidden">
									<div class="form-group">
										<label>Induk:</label>
										<select id="instansi" name="instansi" multiple="multiple" data-placeholder="Pilih Instansi" class="form-control form-control-select2-icons" data-fouc>
											<optgroup label="Instansi">
												<option  value="1" data-icon=""  >okkk</option>
												<?php foreach ($induk as $i) {?>
	                        <option id="inst<?=$i->id?>" value="1" data-icon=""  ><?=$i->Nama?></option>
											<?php	}?>
                      </optgroup>
										</select>
									</div>
									<div class="form-group">
                    <label>Eselon:</label>
                    <select  id="eselon" name="eselon" data-placeholder="Pilih Eselon" class="form-control form-control-select2-icons" >
                      <optgroup label="Eselon">
												<?php foreach ($unit as $u) {?>
	                        <option id="ese<?=$u->id?>" value="<?=$u->id?>" data-icon=""  ><?=$u->Nama?></option>
											<?php	}?>
                      </optgroup>
                    </select>
                  </div>
									<div class="form-group">
										<label>Nama:</label>
										<input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
									</div>
									<div class="form-group">
										<label>Singkatan:</label>
										<input type="text" id="singkatan" name="singkatan" class="form-control" placeholder="Singkatan">
									</div>
								</hr>
									<div class="form-group">
										<label>Username:</label>
										<input type="text" id="usrnm" name="usrnm" class="form-control" placeholder="username">
									</div>
									<div class="form-group">
										<label>Email:</label>
										<input type="email" id="email" name="email" class="form-control" placeholder="Email">
									</div>

                  <div class="text-right">
                    <button type="submit" class="btn btn-primary">Simpan Data <i class="icon-paperplane ml-2"></i></button>
                  </div>
                </form>
              </div>

              </div>
            <!-- /basic layout -->



					</div>

				</div>
				<!-- /dashboard content -->

			</div>
			<!-- /content area -->
