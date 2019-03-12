 <?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");



  //tombol cari ditekan
  if(isset($_POST["cari"])){
    $blog=cari($_POST["keyword"]);

  }

  function cari($keyword){
    $query = "SELECT * FROM blog WHERE
    nama LIKE '%$keyword' OR
    asal_negara LIKE '%$keyword' OR
    prestasi LIKE '%$keyword' OR
    ";
   
   return query($query);

  }

 ?>
<!DOCTYPE HTML>  
<html>
<head>
 <title>CRUD</title>
</head>
<body style="background: url('messi.jpg');">
<center>
  <br>
    <h2>DAFTAR PEMAIN TERBAIK DUNIA</h2>
  <br>
        <form action="" method="post" class ="caru">

          <input type="text" nama="keyword" size=50 autofocus placeholder="masukkan data yang ingin dicari" autocomplete="off">
          <button type="submit" nama="cari">cari</button>
 </form>
  <br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>NO</th>
    <th>NAMA</th>
    <th>ASAL NEGARA</th>
    <th>PRESTASI</th>
    <th>WAKTU</th>
    <th>opsi</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["nama"] ?></td>
    <td><?= $x["asal_negara"];  ?></td>
    <td><?= $x["prestasi"] ?></td>
    <td><?= $x["waktu"];  ?></td>
    <td>
      <a href="register.php">ubah</a> | <a href="register.php">hapus</a>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</center>
  </body>
</html>
