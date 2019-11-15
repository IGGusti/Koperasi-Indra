<!DOCTYPE html>
<html>
<head>
  <title>Koperasi Simpan Pinjam</title>
  <link rel="stylesheet" href="style.css">
  <script src="slim.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <style type="text/css">
    a{
      color: black;
      font-weight: bolder;
    }
    </style>
</head>
<body>
  <!--navigation content-->
  <nav class="navbar navbar-light" style="background-color: #a52615; justify-content-between">
   <h3><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none;color: white"><strong>Koperasi Mahasiswa</strong></a></h3>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
<div class="container-fluid">
<div class="row">
<nav class="col-md-2 col-md-2 d-none d-sm-block bg-dark sidebar">
          <ul class="nav nav-pills flex-column " style="background-color: #d65911; padding-right: 150px; padding-right: 213px">
            <li class="nav-item" >
              <a class="nav-link" href="index.php" style="color: white">Logout</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column"  >
            <li class="nav-item">
              <a class="nav-link " href="pegawai.php" style="color: white">Pegawai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="anggota.php" style="color: white">Anggota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  " href="simpanan.php" style="color: white">Simpanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="pinjaman.php" style="color: white">Pinjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="angsuran.php" style="color: white">Angsuran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="laporan.php" style="color: white">Laporan</a>
            </li>
          </ul>
          
        </nav>
        
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1 style="border-bottom: 4px solid #eee; padding-bottom: 9px">Pinjaman</h1><br>
<form class="container" id="needs-validation" novalidate  method="post" action="formpinjaman.php">
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">NIM</label>
      <span class="input-group-addon">  
      <input type="text" class="form-control" id="validationCustom01" name="nim" placeholder="NIM" required>
      </span>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Nama</label>
      <span class="input-group-addon">  
      <input type="text" class="form-control" id="validationCustom02" name="nama" placeholder="Nama" required>
      </span>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Besar Pinjaman</label>
      <span class="input-group-addon">Rp &nbsp;
      <input type="text" class="form-control" id="validationCustom03" name="besarpinjam" required>
      </span>
      <div class="invalid-feedback">
        Harap cantumkan besar pinjaman.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Tanggal Peminjaman</label>
      <span class="input-group-addon">
      <input type="date" class="form-control" id="validationCustom04" name="tglpinjam" placeholder="dd/mm/yy" required>
      </span>
      <div class="invalid-feedback">
        Harap cantumkan tanggal.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Tanggal Pengembalian</label>
      <span class="input-group-addon">
      <input type="date" class="form-control" id="validationCustom05" name="tglkembali" placeholder="dd/mm/yy" required>
      <span>
      <div class="invalid-feedback">
        Harap cantumkan tanggal.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('needs-validation');
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  }, false);
})();
</script><br>


<?php

//ENTER YOUR DATABASE CONNECTION INFO BELOW:
require_once("connectionsea.php"); //input koneksi dari file connection.php

//DO NOT EDIT BELOW THIS LINE
$query = "SELECT * FROM formpinjaman";

$result = mysqli_query($connect, $query);
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="text-align: center;">NIM</th>
      <th scope="col" style="text-align: center;">Nama</th>
      <th scope="col" style="text-align: right;">Besar Pinjaman</th>
      <th scope="col" style="text-align: center;">Tanggal Pinjaman</th>
      <th scope="col" style="text-align: center;">Tanggal Pengembalian</th>
    </tr>
  </thead>
<?php
if($result){
  while($row = mysqli_fetch_array($result))
  {           
?>

          
   <tbody>
    <tr>
      <td><?php echo $row['nim']; ?></td>
      <td><?php echo $row['nama']; ?></td>
      <td style="text-align: right;"><?php echo $row['besarpinjam']; ?></td>
      <td style="text-align: center;"><?php echo $row['tglpinjam']; ?></td>
      <td style="text-align: center;"><?php echo $row['tglkembali']; ?></td>
    </tr>
  </tbody>           
<?php
  }
}
?>
                </table>
<?php
  mysqli_free_result($result);
  mysqli_close($connect);
?>
</main>
</div>
</div>        

</body> 
</html>