<?php
  require_once("connectionsea.php"); //input koneksi dari file connection.php
  $ngaran = $_POST['nama'];
  $id = $_POST['nim'];
  $besarpinjam = $_POST['besarpinjam'];
  $tglpinjam = $_POST['tglpinjam'];
  $tglkembali = $_POST['tglkembali'];

  //buat variabel baru $simpan untuk menyimpan (INSERT INTO)
  $simpan = mysqli_query($connect, "INSERT INTO formpinjaman(nama,nim,besarpinjam,tglpinjam,tglkembali) VALUES ('$ngaran','$id','$besarpinjam','$tglpinjam','$tglkembali')");
  $cek = mysqli_query($connect, "SELECT * FROM formanggota WHERE nim= '$id' AND nama='$ngaran'");
  $rowCheck = mysqli_num_rows($cek);


  if($simpan){
      if($rowCheck > 0){
        echo "<script> alert ('data telah dimasukkan'); location ='pinjaman.php'</script>";
      }
      else{
        $delut = mysqli_query($connect, "DELETE FROM formpinjaman WHERE nim='$id'");
         echo "<script> alert ('nim belum terdaftar'); location ='pinjaman.php'</script>";
      }
  } 
  else{
    echo "<script> alert ('proses gagal'); location ='pinjaman.php'</script>";
  }
?>
