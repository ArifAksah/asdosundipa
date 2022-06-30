<?php 

require_once 'function.php';
if (isset($_POST['daftar'])) {
   if (register($_POST) > 0) {
       echo "<script>
                alert('Kamu Berhasil Registrasi');
            </script>";
}
   
 else {
        echo "<script>
            alert('Kamu Tidak Berhasil Registrasi');
        </script>";
   }

    }
?>
<doctype html>
<body>
    
    <form id="test-form2" class="white-popup-block mfp-hide" action="" method="POST">
        
            <h3 class="text-center">Daftar Akun Asisten</h3>       
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-4">
                                <label for="">Nama Lengkap</label>
                                <input autocomplete="off" type="text" class="form-control" name="nama_lengkap">
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-4">
                                <label for="">NIM</label>
                                <input autocomplete="off" type="text" class="form-control" name="nisn">
                            </div>
                        </div>
                       <div class="row">
                        <div class="col-md-4">
                                <label for="">Username</label>
                                <input autocomplete="off" type="text" class="form-control" name="username">
                            </div>
                        </div>
                            <div class="row">
                        <div class="col-md-4">
                                <label for="">Email</label>
                                <input autocomplete="off" type="text" class="form-control" name="email">
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-4">
                                <label for="">Password</label>
                                <input autocomplete="off" type="password" class="form-control" name="password">
                            </div>
                            <div class="col-md-4">
                                <label for="">Konfirmasi password</label>
                                <input autocomplete="off" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <button type="submit" class="boxed_btn_orange" name="daftar">Daftar</button>
                        </div>
                    </div>
           
            </div>
        </div>
    </form>
 
</body>
</form>

</html>