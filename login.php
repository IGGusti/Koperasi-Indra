  <?php
  require_once("connectionsea.php"); 
	$nimim = $_POST['nimim'];
	$passwordim = $_POST['passwordim'];


//simpan = mysqli_query($connect, "INSERT INTO formsimpanan(nama,nim,besarsimpanan,tglsimpanan) VALUES ('$ngaran','$','$besarsimpanan','$tglsimpanan')");
  $periksa = mysqli_query($connect, "SELECT nim,password FROM formanggota WHERE nim= '$nimim' AND password='$passwordim'");
  $rowperiksa = mysqli_num_rows($periksa);


      if($rowperiksa > 0){
        $peri_sa = mysqli_query($connect, "SELECT nim,password,jabatan FROM formanggota WHERE jabatan= 'Anggota' AND nim= '$nimim' AND password='$passwordim'");
        $row_periksa = mysqli_num_rows($peri_sa);
        if($row_periksa > 0){
          echo "<script> alert ('Log In Berhasil'); location ='laporan_fake.php'</script>";
        }
        else{
          echo "<script> alert ('Log In Berhasil'); location ='simpanan.php'</script>";
        }
      }
      else{
        echo "<script> alert ('Log In Gagal dong'); location ='index.php'</script>";
      }

  	?>