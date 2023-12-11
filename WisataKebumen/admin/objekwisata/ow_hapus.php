<?php
	if(!defined("INDEX")) die("---");
	$link=mysqli_connect("localhost","root","","objek_wisata");
	$artikel = mysqli_query($link,"select * from wisata where id_wisata='$_GET[id]'");
	$data = mysqli_fetch_array($artikel);
	if($data['gambar'] != "") unlink("../gambar/upload/$data[gambar]");

	mysqli_query($link,"delete from wisata where id_wisata='$_GET[id]'") or die(mysqli_error());
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<h1>Data telah hapus</h1>";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=ow'>";
?>
