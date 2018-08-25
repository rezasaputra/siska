<div class="section-column-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="our-clients-wrapper">
                  <?php foreach ($patner as $p) {?>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="<?=base_url()?>assets/uploads/patner/<?=$p->gambar?>" alt="">
                            </a>
                        </div>


                        <div class="media-body">
                            <h2 class="media-heading"><?=$p->judul?></h2>
                            <span><?=$p->subjudul?></span>
                            <p><?=$p->deskripsi?></p>
                            <p>website : <a href="<?=$p->website?>"><?=$p->website?></a></p>
                        </div>


                    </div>
                      <?php   } ?>
                  </div><!-- /.our-clients-wrapper -->
            </div>

            <div class="col-md-3">
                <div class="right-sidebar">

                    <div class="text-box text-box-style-1 margin-bottom-50">
                        <h3>Do You Need Help?</h3>
                        <p>Interactively evolve sustainable services for intermandated innovation. Completely monetize.</p>
                        <a href="#">Contact us</a>
                    </div>



                </div>
                <!--.left-sidebar-->
            </div>

        </div>
    </div>
</div>
