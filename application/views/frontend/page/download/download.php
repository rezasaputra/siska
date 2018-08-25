


                </div>
                <!--.left-sidebar-->
            </div>
            <div class="col-md-9">
                <div class="page-content">
                    <center><h3 class="margin-top-50">List Download <?=$judul?></h3></center>
                  </br>
                    <div class="row">
                      <?php foreach ($download as $d) {?>
                      <div class="col-md-6">
                          <div class="icon-box margin-bottom-10">
                              <i class="fa fa-file" aria-hidden="true"></i>
                              <a href="#" data-toggle="modal" data-target="#myModal"><?=$d->judul?></a>
                              <span><?php echo substr($d->ext,12)?> (<?=$d->ukuran?>kb)</span>
                          </div>
                      </div>


                      <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <center><h4 class="modal-title">Isi untuk download file</h4></center>
                            </div>
                            <div class="modal-body">
                                  <form class="form-horizontal" role="form" href="#"  method="POST" enctype="multipart/form-data">
                                  <div class="form-body">
                                    <input type="hidden"  name="id_down" id="id_down" value="<?=$d->id?>">
                                    <input type="hidden"  name="link" id="link" value="<?=$d->file?>">
                                      <div class="form-group">
                                          <label class="col-md-2 control-label">Nama</label>
                                          <div class="col-md-9">
                                              <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required="">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-md-2 control-label">Email</label>
                                          <div class="col-md-9">
                                              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-md-2 control-label">Instansi</label>
                                          <div class="col-md-9">
                                              <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Instansi" required="">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-md-2 control-label">Nomor HP</label>
                                          <div class="col-md-9">
                                              <input type="text" class="form-control" name="nomor" id="nomor" placeholder="Nomor Handphone" required="">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-md-2 control-label">Keperluan</label>
                                          <div class="col-md-9">
                                              <textarea class="form-control" name="keperluan" id="keperluan" required="">Keperluan</textarea>
                                          </div>
                                      </div>

                                  </div>

                              </form>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  <button onclick="download()" class="btn btn-primary">Save</button>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    <?php  }?>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<script>
  function download()
    {


      $.ajax({
          url : "<?=base_url()?>Download_form/save_form",
          type : "POST",
          data : {
            'nama':$('#nama').val(),
            'email':$('#email').val(),
            'instansi':$('#instansi').val(),
            'nomor':$('#nomor').val(),
            'keperluan':$('#keperluan').val(),
            'id_down':$('#id_down').val(),
            'status':1
          },
          success: function(data){
            //alert("sukses download");
            window.open("<?=base_url()?>assets/uploads/download/"+$('#link').val(),'_blank');
            $('#myModal').modal('hide');
          }
      });
    }
</script>
