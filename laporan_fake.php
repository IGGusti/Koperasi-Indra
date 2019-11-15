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
              <a class="nav-link disabled" href="#" >Pegawai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" >Anggota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled " href="#" >Simpanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" >Pinjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" >Angsuran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="laporan_fake.php" style="color: white">Laporan</a>
            </li>
          </ul>
        </nav>
        
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1 style="border-bottom: 4px solid #eee; padding-bottom: 9px">Laporan</h1><br>



<?php

//ENTER YOUR DATABASE CONNECTION INFO BELOW:
require_once("connectionsea.php"); //input koneksi dari file connection.php

//DO NOT EDIT BELOW THIS LINE
$query="SELECT nim,nama,SUM(besarsimpanan) FROM formsimpanan GROUP BY nim";
$total="SELECT nim,nama,SUM(besarpinjam) FROM formpinjaman GROUP BY nim";
$result = mysqli_query($connect, $query)or die(mysqli_error());
$hasil = mysqli_query($connect, $total)or die(mysqli_error());
?>
<div class="container">
 <table class="table table-light table-hover">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Total Simpanan</th>
        <th>Total Pinjaman</th>
      </tr>
    </thead>
     <tbody>
<?php


  while(($row = mysqli_fetch_array($result)) and ($iya = mysqli_fetch_array($hasil)))
  {           
?>
               

   
      <tr>
        <td><?php echo $row['nim'] ?></td>
        <td><?php echo $row['nama'] ?></td>
        <td><?php echo $row['SUM(besarsimpanan)'] ?></td>
<td><?php echo $iya['SUM(besarpinjam)'] ?></td>
      </tr>
    



  
   <?php
  }
?>
       </tbody>
  </table>
</div>    
<?php
  mysqli_free_result($result);
  mysqli_close($connect);
?>   
  

 </main>
</div>
</div>        

</body> 
</html>