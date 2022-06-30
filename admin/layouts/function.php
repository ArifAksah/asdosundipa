<?php

$conn = mysqli_connect("localhost", "root", "", "asdosundipa");

function query($query) {
    global $conn;
    $kotak = [];
    $result = mysqli_query($conn, $query);
    while($lemari = mysqli_fetch_assoc($result)) {
        $kotak [] = $lemari;
    }
    return $kotak;
}

function register($data) {
    global $conn;

    $nama =  htmlspecialchars(strtolower($data['nama_lengkap'])); 
    $nisn = htmlspecialchars(strtolower($data['nisn']));
    $username = htmlspecialchars(strtolower($data['username']));
    $email = htmlspecialchars(strtolower($data['email']));
    $password = htmlspecialchars(strtolower($data['password']));
    $pass_confir = htmlspecialchars(strtolower($data['password_confirmation']));

    // Cek Apakah Data Diisi
    if ( empty($nama) || empty($nisn) || empty($username) || empty($email) || empty($password) || empty($pass_confir) ) {
        echo "<script>
            alert('Isi Semua Data Kamu !!');
            document.location.href = 'index.php';
        </script>";
        exit();
    }

    // Cek apakah Nama Sudah ada Di DB
    $nama_ada = "SELECT nama, nisn, username FROM user WHERE username = '$username' || nisn = '$nisn' || nama = '$nama' ";
    $query_ada = mysqli_query($conn, $nama_ada);
    if (mysqli_num_rows($query_ada) > 0) {
        
        echo "<script>
            alert('Kamu Sudah Terdaftar');
            document.location.href = 'index.php';
        </script>";
        exit();
    }

    // Cek Apakah Password Sama
    if ($password !== $pass_confir) {
        echo "<script>
            alert('Password Tidak Sama');
            document.location.href = 'index.php';
        </script>";
        exit();
    }

    // Enkripsi Password
    $pw_hash = $password;

    // Input Data
    $q_regis = "INSERT INTO user VALUES (null, '$nama', '$nisn', '$username', '$email', '$pw_hash')";
    $q_regis2 = mysqli_query($conn, $q_regis);

    return mysqli_affected_rows($conn);

}

function user(){
    global $conn;
    $query = "SELECT * FROM user";
    return mysqli_affected_rows($conn);
}
function terima($data) {
    global $conn;
    $id = $data['id_pdtr'];
    $terima_msk = $data['terima_msk'];
    $terima_msk2 = $data['terima_msk2'];

    for ($i=0; $i < count($id) ; $i++) {
        $data = "SELECT * FROM pendaftar WHERE id_user = '$id[$i]' ";
        $result = mysqli_query($conn, $data);
        $result_fix = mysqli_fetch_assoc($result);
        $nama = $result_fix['nama_lengkap'];
        $id_sah = $result_fix['id_user'];
        $nim = $result_fix['nim'];
        $jurusan = $result_fix['jurusan']; 
        $semester = $result_fix['semester']; 
        $asdos_masuk = $terima_msk[$i];   
        $asdos_masuk2 = $terima_msk2[$i];   
        $insert = mysqli_query($conn, "INSERT INTO terima (id,id_user,nama_lengkap,nim,jurusan,asdos_masuk,asdos_masuk2,semester) 
        VALUES(null, '$id_sah', '$nama', '$nim', '$jurusan', '$asdos_masuk', '$asdos_masuk2', '$semester' )");      
        $delete = mysqli_query ($conn, "DELETE FROM pendaftar WHERE id_user = '$id_sah'");
    }

    return mysqli_affected_rows($conn);
}

function hapus(){
    global $conn;
    
}

?>
