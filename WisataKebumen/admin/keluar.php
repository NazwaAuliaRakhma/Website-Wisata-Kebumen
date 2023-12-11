<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['login']);
session_destroy();
echo"<center><h1>ANDA TELAH KELUAR</h1></center>";
echo"<meta http-equiv='refresh' content='1; url=http://localhost/WisataKebumen/admin/index.php'>";

?>