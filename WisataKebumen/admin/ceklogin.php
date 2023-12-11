<?php
	session_start();
	
	include("../lib/koneksi.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$cek 	= $mysqli->query("select * from user where username='$username' and password='$password'");
	$data	= $cek->fetch_array();
	$jumlah = $cek->num_rows;
	
	if($jumlah>0){
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		
		echo"<center><h1>Login berhasil!</h1></center>";
		echo"<meta http-equiv='refresh' content='1; url=admin.php'>";
	}else{
		echo"<center>Gagal, username atau password salah! <br><b><a href='index.php'>ULANGI</a></b></center>";
	}
?>

