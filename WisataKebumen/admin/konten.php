<?php
	if(!defined("INDEX")) die("---");

	if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "beranda";

	if( $tampil == "beranda" )		include("beranda.php");
	elseif( $tampil == "keluar" )	include("keluar.php");
	elseif( $tampil == "penginapan" )				include("penginapan/penginapan_tampil.php");
	elseif( $tampil == "penginapan_tambah" )		include("penginapan/penginapan_tambah.php");
	elseif( $tampil == "penginapan_tambahproses" )	include("penginapan/penginapan_tambahproses.php");
	elseif( $tampil == "penginapan_edit" )			include("penginapan/penginapan_edit.php");
	elseif( $tampil == "penginapan_editproses" )	include("penginapan/penginapan_editproses.php");
	elseif( $tampil == "penginapan_hapus" )		include("penginapan/penginapan_hapus.php");

	elseif( $tampil == "kuliner" )				include("kuliner/kuliner_tampil.php");
	elseif( $tampil == "kuliner_tambah" )		include("kuliner/kuliner_tambah.php");
	elseif( $tampil == "kuliner_tambahproses" )	include("kuliner/kuliner_tambahproses.php");
	elseif( $tampil == "kuliner_edit" )			include("kuliner/kuliner_edit.php");
	elseif( $tampil == "kuliner_editproses" )	include("kuliner/kuliner_editproses.php");
	elseif( $tampil == "kuliner_hapus" )			include("kuliner/kuliner_hapus.php");

	elseif( $tampil == "ow" )				include("objekwisata/ow_tampil.php");
	elseif( $tampil == "ow_tambah" )		include("objekwisata/ow_tambah.php");
	elseif( $tampil == "ow_tambahproses" )	include("objekwisata/ow_tambahproses.php");
	elseif( $tampil == "ow_edit" )			include("objekwisata/ow_edit.php");
	elseif( $tampil == "ow_editproses" )	include("objekwisata/ow_editproses.php");
	elseif( $tampil == "ow_hapus" )		include("objekwisata/ow_hapus.php");


	elseif( $tampil == "user_edit" ) 			include("user/user_edit.php");
	elseif( $tampil == "user_editproses" )		include("user/user_editproses.php");

	else echo"Konten tidak ada";
?>
