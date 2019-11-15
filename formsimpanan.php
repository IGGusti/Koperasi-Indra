<?php
  require_once("connectionsea.php"); //input koneksi dari file connection.php
  $ngaran = $_POST['nama'];
  $kode = $_POST['nim'];
  $besarsimpanan = $_POST['besarsimp'];
  $tglsimpanan = $_POST['tglsimp'];


  //buat variabel baru $simpan untuk menyimpan (INSERT INTO)
  $simpan = mysqli_query($connect, "INSERT INTO formsimpanan(nama,nim,besarsimpanan,tglsimpanan) VALUES ('$ngaran','$kode','$besarsimpanan','$tglsimpanan')");
  $cek = mysqli_query($connect, "SELECT * FROM formanggota WHERE nim= '$kode' AND nama='$ngaran'");
  $rowCheck = mysqli_num_rows($cek);


  if($simpan){
      if($rowCheck > 0){
        echo "<script> alert ('data telah dimasukkan'); location ='simpanan.php'</script>";
      }
      else{
        $delut = mysqli_query($connect, "DELETE FROM formsimpanan WHERE nim='$kode'");
         echo "<script> alert ('nim belum terdaftar'); location ='simpanan.php'</script>";
      }
  } 
  else{
    echo "<script> alert ('proses gagal'); location ='simpanan.php'</script>";
  }
?>


