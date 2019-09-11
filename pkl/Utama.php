<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:index.html'); }
else { $username = $_SESSION['username']; }
require_once("Koneksi.php");
$query = mysql_query("SELECT * FROM bulanan WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>

<html>
<head>
  <title>SISTEM INFORMASI</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/Kemenhukham.png">
</head>
<link href="bootstrap.min.css" rel="stylesheet"/>
    <style>
        .results tr[visible='false'], .no-result{
            display: none;
        }
        .results tr[visible='true']{
            display: table-row;
        }
        .counter{
            padding: 8px;
            color: #acacac;
        }
</style>
<body>
<img src="images/kem.jpg" height="70px" width="330px">
<div id="header">
<div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">SISTEM INFORMASI PELAPORAN</a>
      </div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav navbar-right">
    </li>
    <li><a href="Logout.php">Keluar</a>
    </li>
  </ul>
</div>
</div>
</nav>
   <td><marquee>
<h3 class="style2"><span class="style8">Selamat Datang Di Sistem Informasi Pelaporan</strong></span></h3>
</marquee></td>
<table style="width:67%" align="center">
  <tr>
  </tr>
  </table>

 <ul class="nav nav-pills nav-stacked">
        <li><a href="bulanan.php"><strong>Bulanan</strong></a></li>
        <li><a href="triwulan.php"><strong>Triwulan</strong></a></li>
        <li><a href="semester.php"><strong>Semesteran</strong></a></li>
        <li><a href="tahunan.php"><strong>Tahunan</strong></a></li>
        <li><a href="situasional.php"><strong>Situasional</strong></a></li>
      </ul><br>

</body>
<br>
<br>
<br>
<br>
<br>
<div>
    <p class="text-center">Copyright &copy;  2018</p>
  </div>
</html>