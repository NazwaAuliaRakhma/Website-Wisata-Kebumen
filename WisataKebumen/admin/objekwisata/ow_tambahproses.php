<?php
	if(!defined("INDEX")) die("---");
$link=mysqli_connect("localhost","root","","objek_wisata");
	$nama_gambar 	= $_FILES['gambar']['name'];
	$lokasi_gambar 	= $_FILES['gambar']['tmp_name'];
	$tipe_gambar	= $_FILES['gambar']['type'];

	$tanggal	= date('Ymd');
	$isi 		= addslashes($_POST['isi']);

	if($lokasi_gambar==""){
		mysqli_query($link,"INSERT INTO wisata set
				judul	= '$_POST[judul]',
				isi		= '$isi',
				tanggal	= '$tanggal'
			") or die(mysqli_error());
	}else{
		move_uploaded_file($lokasi_gambar,"../gambar/upload/$nama_gambar");
		mysqli_query($link,"INSERT INTO wisata set
				judul	= '$_POST[judul]',
				isi		= '$isi',
				tanggal	= '$tanggal',
				gambar 	= '$nama_gambar'
			") or die(mysqli_error());
	}
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<h1>Data telah tersimpan</h1>";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=ow'>";
?>
