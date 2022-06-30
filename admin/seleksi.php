<div class="box">
  <div class="box-header  with-border">

  </div>
  <div class="body">
    <table class="table table-bordered text-center ">
      <tr>
        <th>Nama Lengkap</th>
        <th>Nim</th>
        <th>IPK</th>
        <th>Jurusan</th>
        <th>Semester</th>
        <th>Asisten Dosen Mata Kuliah Pilihan I</th>
        <th>Asisten Dosen Mata Kuliah Pilihan II</th>
        <th>Transkip</th>
        <th>Aksi </th>
        
      </tr>
 
      <?php foreach($pendaftar as $pdtr) : ?>
        <tr>
          <td><?php echo $pdtr['nama_lengkap'] ?></td>
          <td><?php echo $pdtr['nim'] ?></td>
          <td><?php echo $pdtr['ipk'] ?></td>
          <td><?php echo $pdtr['jurusan'] ?></td>
          <td><?php echo $pdtr['semester'] ?></td>
          <td><?php echo $pdtr['asdos'] ?></td>
          <td><?php echo $pdtr['asdos2'] ?></td>

          
<td>
        <?php echo "<embed src= '../../user/layouts/berkas/$pdtr[transkip]' type='application/pdf' width= '350' height= '400' />" ;?>
</td>
         
        <td>
          <form action="" method="post">
            <input type="hidden" name="id_pdtr[]" value="<?php echo $pdtr['id_user'] ?>">
            <div class="form-group">
            <select name="terima_msk[]" id="" class="form-control">
            <?php foreach($jurusan as $jrs) : ?>
             
                <option value="<?php echo $jrs['nama_jurusan'] ?>"><?php echo $jrs['nama_jurusan'] ?></option>
              <?php endforeach ?>
            </select>
            <br>
            <select name="terima_msk2[]" id="" class="form-control">
            <?php foreach($jurusan as $jrs) : ?>
              
                <option value="<?php echo $jrs['nama_jurusan'] ?>"><?php echo $jrs['nama_jurusan'] ?></option>
              <?php endforeach ?>
            </select>
            </div>
          
        <?php endforeach ?> 
          <button type="submit" name="terima" class="btn btn-primary pull-right" ><i class="fa fa-edit"></i>  Terima</button>    
            </form>
          </td>

        </tr>
    </table>
  </div>
</div>