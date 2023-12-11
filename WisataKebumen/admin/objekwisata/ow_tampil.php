<?php
	if(!defined("INDEX")) die("---");

	include("../lib/fungsi_tglindonesia.php");
?>

<h2 class="sub-header">OBJEK WISATA</h2>

<a href="?tampil=ow_tambah" class="btn btn-primary">TAMBAH OBJEK WISATA</a><br><br>

<div class="table-responsive">
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Nama Tempat</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>

	<?php
	$link=mysqli_connect("localhost","root","","objek_wisata");
		$no=1;
		$tampil =mysqli_query($link,"SELECT * FROM wisata") or die(mysqli_error());
		while($data =mysqli_fetch_array($tampil))
		 { 
			$tanggal = tgl_indonesia($data['tanggal']);
	?>

	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['judul']; ?> </td>
		<td> <?php echo $tanggal; ?> </td>
		<td>
			<a href="?tampil=ow_edit&id=<?php echo $data['id_wisata']; ?>" class="btn btn-primary btn-sm"> Edit </a>
			<a href="?tampil=ow_hapus&id=<?php echo $data['id_wisata']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>

	<?php

			$no++;
		}

	?>

</table>
