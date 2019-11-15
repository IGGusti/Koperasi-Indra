<?php
	require_once("connectionsea.php"); //input koneksi dari file connection.php
	$jeniskel = $_POST['jeniskel'];
	$nim = $_POST['inputNIM'];
	$nama = $_POST['inputName'];
	$alamat = $_POST['inputAddress'];
	$jurusan = $_POST['inputJurusan'];
	$pass = $_POST['sandi'];

	//buat variabel baru $simpan untuk menyimpan (INSERT INTO)
	$simpan = mysqli_query($connect, "INSERT INTO formanggota(jeniskelamin,nim,nama,alamat,jabatan,jurusan,password) VALUES ('$jeniskel','$nim','$nama','$alamat','Anggota','$jurusan','$pass')");
	
	if ($simpan){
		echo "<script> alert ('data telah dimasukkan'); location ='anggota.php'</script>";
	}else{
		echo "<script> alert ('proses gagal'); location ='anggota.php'</script>";
	}


?>