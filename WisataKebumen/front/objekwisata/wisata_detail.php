<?php
	include"../../lib/koneksi.php";
	$id_wisata = $_GET['id'];
	$sql = "select * from wisata where id_wisata='".$id_wisata."'";
	$result = mysqli_query($mysqli,$sql);	
    foreach ($result as $isi) {
        # code...
    }
	
	while($row=mysqli_fetch_assoc($result)){
        $gambar=$row['gambar'];
		$judul=$row['judul'];
        $isi=$row['isi'];	
	}
?>

<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   
                   <!--<h4 class="modal-title">Detail </h4>-->
                </div>
                <div class="modal-body">
                    <div class="row">
                    	<div class="col-xs-12">
                        	<div class="form-group">
                
                                <table class="table">
                                <tr>
                                <td><img src="../../gambar/upload/<?php echo $isi['gambar']; ?>" width="100%" height="40%"></td>
                                </tr><tr>
                                <td><b><?php echo $isi['judul']; ?></b></td>
                                </tr>
                                <tr>
                                <td><?php echo $isi['isi']; ?></td>
                                </tr></table>


                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Ok</button>
                </div>
            </div>
</div>