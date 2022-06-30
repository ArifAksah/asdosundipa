<div class="box">
  <div class="box-header  with-border">

  </div>
  <div class="body">
    <table class="table table-bordered text-center ">
      <tr>
        <th>Nama Lengkap</th>
        <th>Nim</th>
        <th>Jurusan</th>
        <th>Semester</th>
        <th>Di ACC Mata Kuliah I</th>
        <th>Di ACC Dosen Mata Kuliah II</th>
        
        <th>Aksi</th>
      </tr>
      
    <?php foreach($terima as $trm) : ?>
        <tr>
            <td><?php echo $trm['nama_lengkap'] ?></td>
            <td><?php echo $trm['nim'] ?></td>
            <td><?php echo $trm['jurusan'] ?></td>
            <td><?php echo $trm['semester'] ?></td>
            <td><?php echo $trm['asdos_masuk'] ?></td>
            <td><?php echo $trm['asdos_masuk2'] ?></td>
            <td><?php  echo "  <button><a href='delete.php?id=$trm[id]' style='color:#000;'>Delete</a></button>" ?></td>
        </tr>
    <?php endforeach ?>

    </table>
  </div>
</div>