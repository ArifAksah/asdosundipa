<?php if(!empty($j_user)) :?>
    <div class="row">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-teal">
              <div class="widget-user-image">
                <img class="img-circle" src="../../assets/dist/img/avatar2.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?php echo $_SESSION['nama'] ?></h3>
                 <?php foreach($user as $usr) : ?>
                    <h5 class="widget-user-desc">Status : <?php echo $usr['stat'];?> </h5>
                <?php endforeach ?>
            </div>
            <div class="box-footer no-padding">
            <?php foreach($user as $usr) : ?>
              <ul class="nav nav-stacked">
                    <li><a href="#">Nama Lengkap <span class="direct-chat-text bg-teal"><i class="fa fa-user"></i> <?php echo $usr['nama_lengkap']; ?></span></a></li>
                    <li><a href="#">Jurusan <span class="direct-chat-text bg-teal"><i class="fa fa-university"></i> <?php echo $usr['jurusan'] ?></span></a></li>
                    <li><a href="#">IPK  <span class="direct-chat-text bg-teal"><i class="fa fa-tasks"></i> <?php echo $usr['ipk'] ?> </span></a></li>
                     <li><a href="#">Semester  <span class="direct-chat-text bg-teal"><i class="fa fa-tasks"></i> <?php echo $usr['semester'] ?> </span></a></li>
                    <li><a href="#">Pengajuan jadi asisten dosen I  <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $usr['asdos'] ?></span></a></li>
                     <li><a href="#">Pengajuan jadi asisten dosen II <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $usr['asdos2'] ?></span></a></li>
                        
              </ul>
              <?php endforeach ?>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
    </div>

    <?php elseif( !empty($terima)) : ?>
      <div class="row">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-teal">
              <div class="widget-user-image">
                <img class="img-circle" src="../../assets/dist/img/avatar2.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?php echo $_SESSION['nama'] ?></h3>
                 <?php foreach($terima as $trm) : ?>
                    <h5 class="widget-user-desc">Status : DITERIMA</h5>
                    <h6 class="widget-user-desc"><a href="cetak_bukti.php?id=<?php echo $trm['id'] ?>" class="btn btn-primary btn-sm" ><i class="fa fa-print"></i>  Cetak</a></h6>
                <?php endforeach ?>
            </div>
            <div class="box-footer no-padding">
            <?php foreach($terima as $trm) : ?>
              <ul class="nav nav-stacked">
                    <li><a href="#">Nama Lengkap <span class="direct-chat-text bg-teal"><i class="fa fa-user"></i> <?php echo $trm['nama_lengkap']; ?></span></a></li>
                    <li><a href="#">Jurusan <span class="direct-chat-text bg-teal"><i class="fa fa-university"></i> <?php echo $trm['jurusan'] ?></span></a></li>
                    <li><a href="#">NIM  <span class="direct-chat-text bg-teal"><i class="fa fa-tasks"></i> <?php echo $trm['nim'] ?> </span></a></li>
                    <li><a href="#">Semester  <span class="direct-chat-text bg-teal"><i class="fa fa-tasks"></i> <?php echo $trm['semester'] ?> </span></a></li>
                    <li><a href="#">Diterima Jadi Asisten Dosan Pada Mata Kuliah: <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $trm['asdos_masuk'] ?></span></a></li>     
                     <li><a href="#">Diterima Jadi Asisten Dosan Pada Mata Kuliah: <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $trm['asdos_masuk2'] ?></span></a></li>         
              </ul>
              <?php endforeach ?>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
    </div>

<?php elseif( empty($j_user)) : ?>
    <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-danger">  
              <h4>Kamu Belum  Mendaftar</h4>
                <p>
                    Kamu Belum Mendaftar !!, Silahkan Daftar Disini <br/><a href="index.php?page=daftar">Daftar ?</a>
                </p>  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      

      <?php endif ?>