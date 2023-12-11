<?php
	if(!defined("INDEX")) die("---");
	$link=mysqli_connect("localhost","root","","objek_wisata");
	$tampil = mysqli_query($link,"SELECT * FROM wisata WHERE id_wisata='$_GET[id]'") or die(mysqli_error());
	$data  	= mysqli_fetch_array($tampil);
?>
<h2 class="sub-header">Wisata wisata</h2>

<form name="edit" method="post" action="?tampil=ow_editproses" enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_wisata']; ?>">

		<div class="form-group">
			<label class="label-control col-md-2">Tempat</label>
			<div class="col-md-4"> <input type="text" class="form-control" name="judul" size="50" value="<?php echo $data['judul']; ?>"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Gambar</label>
			<div class="col-md-4"><img src="../gambar/upload/<?php echo $data['gambar']; ?>" width="300" class="thumbnail"> <input type="file" class="form-control" name="gambar"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Deskripsi</label>
			<div class="col-md-9"><textarea name="isi" cols="80" rows="15" class="form-control"><?php echo $data['isi']; ?></textarea></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2"></label>
			<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div>
		</div>

</form>
