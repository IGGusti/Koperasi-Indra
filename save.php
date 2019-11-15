<?php
	require_once("connectionbasdat.php"); //input koneksi dari file connection.php
	$nama = $_POST['inputName'];
	$username = $_POST['inputUsername'];
	$password = $_POST['inputPassword'];
	$email = $_POST['inputEmail'];


	//buat variabel baru $simpan untuk menyimpan (INSERT INTO)
	$simpan = mysqli_query($connect, "INSERT INTO registrasi(nama,password,username,email) VALUES ('$nama','$password','$username','$email')");
	
	if ($simpan){
		echo "<script> alert ('data telah dimasukkan'); location='index.html'</script>";
	}else{
		echo "<script> alert ('proses gagal'); location ='index.html'</script>";
	}

?>