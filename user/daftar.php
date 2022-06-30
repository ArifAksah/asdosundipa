
<?php if(empty($j_user)) : ?>
      <section class="content">
        
        <div class="card">
            <div class="card-header bg-primary">
              <i class="fa fa-user-plus"></i>  Formulir Pendaftaran Asisten Dosen
            </div>

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input autocomplete="off" type="text" class="form-control" value="<?php echo $_SESSION['nama'] ?> " name="nama_lengkap" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-control">
                                  <option value="Jurusan">--Jurusan--</option>
                                  <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                  <option value="Manajemen Informatika">Manajemen Infotmatika</option>
                                  <option value="Teknik Informatika">Teknik Informatika</option>
                                  <option value="Bisnis Digital">Bisnis Digital</option>
                                  <option value="Kewirausahaan">Kewirausahaan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input autocomplete="off" type="text" class="form-control" name="tempat_lahir">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input autocomplete="off" type="date" class="form-control" name="tgl_lahir">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input autocomplete="off" type="text" class="form-control" name="alamat">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">jenis kelamin</label>
                              
                                <select name="jkl" id="jkl" class="form-control">
                                  <option value="jkl">--Jenis Kelamin--</option>
                                  <option value="laki-laki" class="form-control">Laki-laki</option>
                                  <option value="perempuan" class="form-control">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Agama</label>
                                <select name="agama" id="agama" class="form-control">
                                  <option value="Agama">--Agama--</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Kristen">Kristen</option>
                                  <option value="Khonghucu">Khonghucu</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Budhha">Buddha</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">No Telepon</label>
                                <input autocomplete="off" type="number" class="form-control" name="no_telp">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Nim</label>
                            <input autocomplete="off" type="text"  class="form-control" value="<?php echo $_SESSION['nisn'] ?> " name="nim" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="">IPK</label>
                            <input autocomplete="off" type="text" class="form-control" name="ipk">
                        </div>


                        <div class="col-md-6">
                             <label for="">Semester</label>
                                <select name="semester" id="semester" class="form-control">
                                  <option value="Semester">--Semester--</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="6">7</option>
                                  <option value="6">8</option>
                                  <option value="6">9</option>
                                </select>
                        </div>
                            <div class="col-md-6">
                            <label for="">Transkip</label>
                            <input autocomplete="off" type="file" class="form-control" name="transkip">
                        </div>    
                    </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="">Mata Kuliah Pilihan I</label>
                            <select id="" class="form-control" name="asdos">
                                <?php foreach($jurusan as $jrs) : ?>
                                    <option value="<?php echo $jrs['nama_jurusan'] ?>"><?php echo $jrs['nama_jurusan'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                         <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="">Mata Kuliah Pilihan II</label>
                            <select id="" class="form-control" name="asdos2">
                                <?php foreach($jurusan as $jrs) : ?>
                                    <option value="<?php echo $jrs['nama_jurusan'] ?>"><?php echo $jrs['nama_jurusan'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    
                    <button type="submit" class="btn btn-primary mt-3" name="daftar"><i class="fa fa-edit"></i> Daftar</button>
                </form>
            </div>
        </div>

    </section>

    <?php elseif(!empty($j_usr_tolak)) : ?>
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
                <h4>Kamu Ditolak</h4>
              <?php foreach($user as $usr) : ?>
                <p>
                  Kamu Telah Melakukan Registrasi Pada <?php echo $usr['tgl_daftar'] ?> <br/>
                  Kamu Ditolak Karena Nilai Terlalu Rendah Atau Semester Kurang dari 3, Silahkan Logout <br/>
                  <a href="../../logout.php">Logout ?</a>
                </p>
              <?php endforeach ?>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div> 

    <?php elseif(!empty($j_user)) : ?>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-info">  
                <h4>Kamu Sudah Mendaftar</h4>
              <?php foreach($user as $usr) : ?>
                <p>
                  Kamu Telah Melakukan Registrasi Pada <?php echo $usr['tgl_daftar'] ?> <br/>
                  Kamu Mendaftar menjadi Asisten Dosen Pada <?php echo $usr['asdos'] ?> dan <?php echo $usr['asdos2'] ?> <br/>
                  Tunggu Kabar Selanjutnya 1x24 jam
                 
                </p>
              <?php endforeach ?>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
<?php endif ?>
    

