<!-- Main content -->
<div class="content-wrapper">



  <!-- Content area -->
  <div class="content">



    <!-- Dashboard content -->
    <div class="row">

      <div class="col-sm-12">
        <div class="card ">
          <div class="card-header header-elements-inline">
            <h6 class="card-title">Detail Hasil Kajian</h6>
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


                      <h2>Upload Cover</h2>
                      <input class="form-control" type="file" />
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
