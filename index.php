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
   <h3><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none; color: white"><strong>Koperasi Mahasiswa</strong></a></h3>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
<div class="container-fluid">
<div class="row">
<nav class="col-md-2 col-md-2 d-none d-sm-block bg-dark sidebar">
          <ul class="nav nav-pills flex-column " style="background-color: #24bf57; padding-right: 150px; padding-right: 210px">
            <li class="nav-item" >
              <a class="nav-link" href="index.php" style="color: white">Login</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column"  >
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Pegawai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Anggota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  disabled" href="#">Simpanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Pinjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Angsuran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Laporan</a>
            </li>
          </ul>
          <ul class="nav nav-pills flex-column" >
            <li class="nav-item">
              <a class="nav-link" href="laporan.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="laporan.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="laporan.php"></a>
            </li>
          </ul>
        </nav>
       
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">

<div class="jumbotron jumbotron-fluid" style="background-color:#757474">
  <div class="container">
    <h1 class="display-3" style="border-bottom: 4px solid white; padding-bottom: 9px;color: white">Koperasi Simpan Pinjam </h1>
    <p class="lead" style="text-align: justify; color: white">Memajukan kesejahteraan anggota dan memiliki benefit kepada khususnya bagi mahasiswa dengan mewujudkan mahasiswa yang maju, adil, dan makmur. Kesejahteraan anggota merupakan prioritas utama yang harus dipegang teguh karena partisipasi anggota dan pengelolaan dengan cara profesional dapat meningkatkan hasil yang baik untuk koperasi itu sendiri.</p>
  </div>
</div><br>


<h3 style="border-bottom: 4px solid #eee; padding-bottom: 9px">Login</h3><br>
<form method="post" action="login.php">

  <div class="form-group">
    <label for="exampleInputNIM">NIM Mahasiswa</label>
    <input type="text" class="form-control" id="exampleInputNIM"  name="nimim"  placeholder="NIM">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" name="passwordim" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



  </main>
 </div>
</div>
</body> 
</html>

