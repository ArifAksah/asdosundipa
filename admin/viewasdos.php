<div class="box">
  <div class="box-header  with-border">

  </div>
  <div class="body">
    <table class="table table-bordered text-center ">
      <tr>
        <th>Nama Lengkap</th>
        <th>Nim</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
 
        <th>Aksi</th>
      </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "asdosundipa");
$data = mysqli_query($conn, "SELECT * FROM user");
while ($d=mysqli_fetch_array($data)) {
  


?>
        <tr>
            <td><?php echo $d['nama'] ?></td>
            <td><?php echo $d['nisn'] ?></td>
            <td><?php echo $d['username'] ?></td>
            <td><?php echo $d['email'] ?></td>
            <td><?php echo $d['password'] ?></td>
            <td><?php  echo "  <button><a href='delete.php?id=$d[id]' style='color:#000;'>Delete</a></button>" ?></td>
        </tr>
   
<?php } ?>
    </table>
  </div>
</div>