<?php
$conn = mysqli_connect("localhost", "root", "", "asdosundipa");
date_default_timezone_get();

function query($query) {
    global $conn;
    $kotak = [];
    $result = mysqli_query($conn, $query);

    while ($lemari = mysqli_fetch_assoc($result)) {
        $kotak [] = $lemari;
    }
    return $kotak;
}

    function daftar($data) {
        global $conn;
        
        $nama = $data['nama_lengkap'];
        $jurusan = $data['jurusan'];
        $nim = $data['nim'];
        $tempat_lahir=$data['tempat_lahir'];
        $tgl_lahir=$data['tgl_lahir'];
        $alamat=$data['alamat'];
        $jkl=$data['jkl'];
        $agama=$data['agama'];
        $no_telp=$data['no_telp'];
        $nilai = (float) $data['ipk'];
        $asdos=strtolower($data['asdos']);
        $asdos2=strtolower($data['asdos2']);
        $semester=$data['semester'];
        $id_user = $_SESSION['id_user'];
        $nisn_user = $_SESSION['nisn'];
        $nama_user = $_SESSION['nama'];
        $tgl_daftar = date('Y-m-d H:m:s');
        $file = $_FILES['transkip'];
        $file_name = $file['name']; 
        $file_temp = $file['tmp_name']; 
        $name = explode('.', $file_name); 
        $path = "berkas/".$file_name;
        move_uploaded_file($file_temp, $path);

    
    

        // Cek Nilai
        if ($nilai > 4.0) {
            echo "<script>
                  alert('Nilai Tidak Valid !!');
                  document.location.href = 'index.php';
                 </script>";
            exit;
        }

        // Cek Nilai
        if ($nilai >= 3.5 && $nilai <= 4.0 &&  $semester >= 3 && $semester <=14 ) {
            $stat = 'Menunggu Keputusan';
        }

        elseif ($nilai >= 3.0 && $nilai < 3.5 &&  $semester >= 3 && $semester <=14) {

            $stat = 'Menunggu Keputusan';
        }

        elseif ($nilai >= 2.0 && $nilai <= 3.0 && $semester >= 3 && $semester <=14) {
            $stat = 'Menunggu Keputusan';
        }
        elseif ($nilai >= 3.0 && $nilai < 3.5 &&  $semester < 3 ) {

            $stat = 'Ditolak';
        }
        elseif ($nilai >= 3.5 && $nilai <= 4.0 &&  $semester < 3 ) {

            $stat = 'Ditolak';

        }
         elseif ($nilai >= 2.0 && $nilai < 3.0 &&  $semester < 3 ) {

            $stat = 'Ditolak';
        }


        elseif($nilai < 2.0) {
            $jr = null;
            $stat = "Ditolak";
        }

        // Input --> DB
        $asdos = strtolower($data['asdos']); 
        
        $q_insert = "INSERT INTO pendaftar VALUES (null, '$id_user', '$nama_user','$tempat_lahir','$tgl_lahir','$alamat','$jkl','$agama','$no_telp','$jurusan', '$nisn_user', '$nilai', '$asdos', '$asdos2','$stat', '$tgl_daftar', '$semester', '$file_name') ";
        $insert = mysqli_query($conn, $q_insert);

        return mysqli_affected_rows($conn);
    }

?>