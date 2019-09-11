<?php
session_start();
unset($_SESSION['username']);
header('location:index.html');
?>
<html>
<head>
<link rel="shortcut icon" href="images/Kemenhukham.png">
</head>
<body>
<center>
<h2>Anda telah berhasil logout..</h2>
Silahkan klik <a href="index.html"> <b>disini</b> </a> untuk login kembali
</center>
<br></br>
<br></br>
<br></br>
</body>
<footer>
</footer>
</html>