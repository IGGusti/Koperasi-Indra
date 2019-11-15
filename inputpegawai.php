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
          <h1 style="border-bottom: 4px solid #eee; padding-bottom: 9px">Daftar Pegawai</h1><br>
          <form method="post" action="save.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="validationDefault01">NIM</label>
      <span class="input-group-addon"> 
      <input type="text" class="form-control" id="validationDefault01" name="inputNIM" placeholder="NIM" required>
      </span>
      <div class="invalid-feedback">
        Please provide a valid NIM.
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="validationDefault02">Password</label>
      <span class="input-group-addon"> 
      <input type="password" class="form-control" id="validationDefault02" name="inputPassword" placeholder="Password" required>
      </span>
      <div class="invalid-feedback">
        Please provide a valid password.
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="validationDefault03">Nama</label>
    <span class="input-group-addon"> 
    <input type="text" class="form-control" id="validationDefault03" name="inputName" placeholder="Nama" required>
    </span>
    <div class="invalid-feedback">
        Please provide a valid name.
      </div>
  </div>
   <div class="form-group">
    <label for="validationDefault04">Jenis Kelamin</label>
    <span class="input-group-addon"> 
    <input type="text" class="form-control"  id="validationDefault04" name="jeniskel" placeholder="Laki-laki/perempuan" required>
  </span>
  </div>
  <div class="form-group">
    <label for="validationDefault04">Alamat</label>
    <span class="input-group-addon"> 
    <input type="text" class="form-control"  id="validationDefault04" name="inputAddress" placeholder="Alamat" required>
  </span>
  </div>
   <div class="form-group">
    <label for="validationDefault05">Jabatan</label>
    <span class="input-group-addon"> 
    <input type="text" class="form-control" id="validationDefault05" name="inputJabatan" placeholder="Jabatan" required>
    </span>
    <div class="invalid-feedback">
        Please provide a valid position.
      </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="validationDefault06">Jurusan</label>
      <span class="input-group-addon"> 
      <input type="text" class="form-control" id="validationDefault06" name="inputJurusan" placeholder="Jurusan" required>
    </span>
    </div>
    <div> 
      
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
     
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
 </main>
</div>
</div>        

     

</body> 
</html>
