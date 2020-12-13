<?php
error_reporting(0);
	require "connection.php";
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$hobi = implode(",", $_POST['hobi']);
	$deskripsi = $_POST['deskripsi'];
	$asal_info = $_POST['asal_info'];
	
			
	$strQuery = "INSERT INTO tabel_registrasi VALUES(null,'$nama','$username','$password','$jenis_kelamin','$hobi','$deskripsi','$asal_info')";
	$query = mysqli_query($connection, $strQuery);
	if(!$query){
		
	}
	echo "<script language=javascript>alert('Data Berhasil Disimpan');</script>";	
	echo "<script language=javascript>document.location.href='registrasi.php'</script>";
	mysqli_close($connection);
?>