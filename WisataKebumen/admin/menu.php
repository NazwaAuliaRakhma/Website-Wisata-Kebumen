<html>
<head>
    
<?php
	if(!defined("INDEX")) die("---");
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="../js/jquery-2.0.2.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/login.css">

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
				<a class="navbar-brand" href="admin.php">BERANDA</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="?tampil=ow">OBJEK WISATA</a></li>
				<!-- <li><a href="?tampil=kuliner">KULINER KHAS</a></li> 
				<li><a href="?tampil=penginapan">PENGINAPAN/HOTEL</a></li>  
				<li><a href="?tampil=user_edit">CHANGE USER</a></li>   -->
			</ul>
			<div class="colapse navbar-colapse" id="myNavbar">
<div class="container">
<ul class="nav navbar-nav">

</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="keluar.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
			</ul>
		</div>
	</nav>
</div>

</body>
</html>