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
          <ul class="nav nav-pills flex-column " style="background-color: #d65911; padding-right: 150px; padding-right: 210px">
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
        
        
          <?php

//ENTER YOUR DATABASE CONNECTION INFO BELOW:
require_once("connectionsea.php"); //input koneksi dari file connection.php

//DO NOT EDIT BELOW THIS LINE
$query = "SELECT nama,jabatan,nim,jurusan FROM formanggota";

$result = mysqli_query($connect, $query);
?>

<main role="main" class="col-md-10 ml-sm-auto col-md-10 pt-3">
          <h1 style="border-bottom: 4px solid #eee; padding-bottom: 9px">Anggota</h1><br>
          <section style="border-bottom: 2px solid #eee; padding-bottom: 9px;" class="row text-center placeholders" method="post" action="anggota.php">
            <div class="col-6 col-sm-3 placeholder">
              <a href="inputanggota.php"><img src="green.png" width="150" height="150" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"></a>
              <h4>Tambah Anggota</h4>
              <span class="text-muted"></span>
            </div>

            <div class="col-6 col-sm-3 placeholder">
              <a href="ubahanggota.php"><img src="update.png" width="150" height="150" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"></a>
              <h4>Ubah Anggota</h4>
              <span class="text-muted"></span>
            </div>

            <div class="col-6 col-sm-3 placeholder">
              <img src="delete.png" width="150" height="150" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Hapus Anggota</h4>
              <span class="text-muted"></span>
            </div>
            </section>

            <section class="row text-center placeholders" method="post" action="anggota.php">
<?php
  while($row = mysqli_fetch_array($result))
  {           
?>

          
              <div class="col-6 col-sm-3 placeholder" style=" padding-top: 20px">
              <img src="man2.png" width="150" height="150" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4><?php echo $row['nama']; ?></h4>
              <span class="text-muted"><?php echo $row['jabatan']; ?><br>
                  <?php echo $row['nim']; ?><br>
                  <?php echo $row['jurusan']; ?>
              </span>
              </div>

              
<?php
  }
?>
                </section>
<?php
  mysqli_free_result($result);
  mysqli_close($connect);
?>
</main>         
</div>
</div>
</body> 
</html>