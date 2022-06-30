<?php
$conn = mysqli_connect("localhost", "root", "", "asdosundipa");
 

if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $nama_lengkap=$_POST['nama_lengkap'];
    $nim=$_POST['nim'];
    $jurusan=$_POST['jurusan'];
    $asdos_masuk=$_POST['asdos_masuk'];
        
    // update user data
    $result = mysqli_query($conn, "UPDATE terima SET id=null,id_user='$id_user',nama_lengkap='$nama_lengkap',nim='$nim',jurusan='$jurusan',asdos_masuk='$asdos_masuk' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location:index.php?page=terima");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM terima WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id_user = $user_data['id_user'];
    $nama_lengkap = $user_data['nama_lengkap'];
    $nim = $user_data['nim'];
    $jurusan = $user_data['jurusan'];
    $asdos_masuk = $user_data['asdos_masuk'];
}
?>
<html>
<head>    
    <title>Edit Data Peserta</title>
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
    <a href="index.php?page=terima">Home</a>
    <br/><br/>
    <div>
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama_lengkap" value=<?php echo $nama_lengkap;?>></td>
            </tr>
            <tr> 
                <td>nim</td>
                <td><input type="text" name="nim" value=<?php echo $nim;?>></td>
            </tr>
            <tr> 
                <td>Sekolah Asal</td>
                <td><input type="text" name="jurusan" value=<?php echo $jurusan;?>></td>
            </tr>
            <tr> 
                <td>asdos_masuk</td>
                <td><input type="text" name="asdos_masuk" value=<?php echo $asdos_masuk;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
