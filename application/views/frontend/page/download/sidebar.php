<div class="section-column-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="left-sidebar">

                    <div class="sidebar-menu margin-bottom-30">
                        <ul>
                          <?php
                          $aktif="";
                            foreach ($kateg as $kat) {
                              if($kate==$kat->id){$aktif="active";}else{$aktif="";}
                              ?>
                            <li class="<?=$aktif?>"><a href="<?=base_url()?>home/download/<?=$kat->id?>"><?=$kat->category?></a></li>
                          <?php }?>
                        </ul>
                    </div>
                    <!--.sidebar-menu-->
