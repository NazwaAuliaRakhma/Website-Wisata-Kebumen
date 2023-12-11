<!DOCTYPE HTML>
<html>
<head>
<TITLE>OBJEK WISATA</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="../../js/jquery-2.0.2.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/login.css">
<style type="text/css">
body{
	background-image: url('bg_wisata.jpg');
	color: black;
	background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    background-size: auto 100%;
}
h1 {
   color: white;
}
</style>
<style type="text/css">
    #footer{
    line-height: 40px;
    background: #DEB887;
    height: 50px;
    color: #00008B;
    }
</style>
</head>
<body>

<div id="main">
<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">WISATA KEBUMEN</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="https:\\localhost\WisataKebumen\front\">HOME</a></li>
				<li><a href="http://localhost/WisataKebumen/front/profil.php">PROFIL</a></li> 
				<li class="active"><a href="https://localhost/WisataKebumen/front/objekwisata/konten.php">OBJEK WISATA</a></li>
				<!-- <li><a href="https:\\localhost\WisataKebumen\front\kuliner\konten.php">KULINER KHAS</a></li> 
				<li><a href="https:\\localhost\WisataKebumen\front\penginapan\konten.php">PENGINAPAN/HOTEL</a></li>  -->
				<li><a href="http:\\localhost\WisataKebumen\front\about.php">ABOUT US</a></li>    
			</ul>
			<div class="colapse navbar-colapse" id="myNavbar">
<div class="container">
<ul class="nav navbar-nav">

</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="https://localhost/WisataKebumen/admin/index.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
			</ul>
		</div>
	</nav>


</div>
</div>
</div>
</div>




<?php
	include"../../lib/koneksi.php";
	
	$sql = "select * from wisata";
	$result = mysqli_query($mysqli,$sql);	
?>
<div class="container">
	<table class="table table-bordered" >
    <thead>
	<center><strong><h1>OBJEK WISATA</strong></b></center>
	<br>
    <tr  style="background-color: #FFEBCD;">
    	<th><center>Nama Objek Wisata</center></th>
        <th><center>Detail</center></th>
    </tr>
    </thead>
    <tbody>
        <?php
                while($row=mysqli_fetch_assoc($result)){
					
                    echo"<tr bgcolor = Aliceblue>
                    <td>".$row['judul']."</td>
                    <td><a id='edit_data' data-toggle='modal' data-target='#modal_wisata' href='wisata_detail.php?id=".$row['id_wisata']."'>Detail</a></td></tr>";
					
                }
        ?>
    </tbody>
    </table>
 </div>
 
 <div class="modal fade" id="modal_wisata" tabindex="-1" role="dialog" aria-labelledby="wisata" aria-hidden="true"></div>

	<!-- js untuk jquery -->
	<script src="../../js/jquery-1.11.2.min.js"></script>
	<!-- js untuk bootstrap -->
	<script src="../../js/bootstrap.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('a#edit_data').click(function(){
				var url = $(this).attr('href');
				$.ajax({
					url : url,
					success:function(response){
						$('#modal_wisata').html(response);
					}
				});
			});
			
		});
	</script>
</body>
</html>
