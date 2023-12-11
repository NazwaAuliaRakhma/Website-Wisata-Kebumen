
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>PAGE LOGIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="../css/login.css">
<style>
a {
  text-decoration: none;
}
body {
  background-repeat: no-repeat;
  background-image: url(../media/background_login.jpg);
        height: 93%;
        width: 100%;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
#forgot-pass {
  color: #2dbd6e;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 3px;
  text-align: right;
}
#login {
  background: #fbfbfb;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 410px;
  margin: 6rem auto 8.1rem auto;
  width: 329px;
}
#login-content {
  padding: 12px 44px;
}
#login-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 13px;
  text-align: center;
}
#submit-btn {
  background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #24c64f;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px #24c64f;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}
.form-border {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 2px;
  width: 100%;
}
.form-content {
  background: #fbfbfb;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}

</style>
</head>

<body>

<div id="main">
<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" >WISATA KEBUMEN</a>
			</div>
			<ul class="nav navbar-nav">
        <li><a href="https:\\localhost\WisataKebumen\front\">HOME</a></li>
				<li><a href="http://localhost/WisataKebumen/front/profil.php">PROFIL</a></li> 
				<li><a href="https://localhost/WisataKebumen/front/objekwisata/konten.php">OBJEK WISATA</a></li>
				<!-- <li><a href="https:\\localhost\wisata\front\kuliner\konten.php">KULINER KHAS</a></li> 
				<li><a href="https:\\localhost\wisata\front\penginapan\konten.php">PENGINAPAN/HOTEL</a></li>  -->
				<li><a href="http:\\localhost\WisataKebumen\front\about.php">ABOUT US</a></li> 
			</ul>
			<div class="colapse navbar-colapse" id="myNavbar">
<div class="container">
<ul class="nav navbar-nav">

</ul>
			
	</nav>

  <div id="login">
    <div id="login-content">
      <div id="login-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="POST" class="form" action="ceklogin.php">
        <label for="user-email" style="padding-top:13px">Username</label>
        <input id="username" class="form-content" type="text" name="username" autocomplete="on" required autofocus />
        <div class="form-border"></div>
        <label for="password" style="padding-top:22px">Password</label>
        <input id="password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div><br>
        <input id="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="LOGIN" />
      </form>
    </div>
  </div>
  </body>

</html>