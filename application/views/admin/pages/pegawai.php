


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
                <h5 class="card-title">Daftar pegawai</h5>
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
                <h5 class="card-title">Tambah pegawai</h5>
                <div class="header-elements">
                  <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                          </div>
                        </div>
              </div>

              <div class="card-body">
                <form action="<?=base_url()?>siska/Pegawai/tambah/pegawai" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="id" id="id" class="hidden">
									<div class="form-group">
                    <label>Nama:</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <label>NIP:</label>
                    <input type="text" id="NIP" name="NIP" class="form-control" placeholder="NIP">
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
                    <label>Golongan:</label>
                    <input type="text" id="gol" name="gol" class="form-control" placeholder="Ex: 3A">
                  </div>

									<div class="form-group">
                    <label>Jabatan:</label>
                    <input type="text" id="jab" name="jab" class="form-control" placeholder="Jabatan">
                  </div>

									<div class="form-group">
                    <label>Email:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                  </div>

									<div class="form-group">
                    <label>Username:</label>
                    <input type="text" id="user" name="user" class="form-control" placeholder="Username">
                  </div>

                  <div class="form-group">
                    <label>Password:</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Konfirmasi Password:</label>
                    <input type="password" id="konfirm" name="konfirm" class="form-control" placeholder="Konfirmasi Password">
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
