<?php
	if(!defined("INDEX")) die("---");
	$link=mysqli_connect("localhost","root","","objek_wisata");
	$nama_gambar 	= $_FILES['gambar']['name'];
	$lokasi_gambar 	= $_FILES['gambar']['tmp_name'];
	$tipe_gambar	= $_FILES['gambar']['type'];

	$tanggal	= date('Ymd');
	$isi 		= addslashes($_POST['isi']);

	if($lokasi_gambar==""){
		mysqli_query($link,"UPDATE wisata SET
				judul='$_POST[judul]',
				isi='$isi'
			WHERE id_wisata='$_POST[id]'") or die(mysqli_error());
	}else{
		$artikel = mysqli_query($link,"select * from wisata where id_wisata='$_POST[id]'");
		$data = mysqli_fetch_array($artikel);
		if($data['gambar'] != "") unlink("../gambar/upload/$data[gambar]");

		move_uploaded_file($lokasi_gambar,"../gambar/upload/$nama_gambar");
		mysqli_query($link,"UPDATE wisata SET
				judul='$_POST[judul]',
				isi='$isi',
				gambar='$nama_gambar'
			WHERE id_wisata='$_POST[id]'") or die(mysqli_error());
	}

	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=ow'>";
?>
