<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:index.html'); }
else { $username = $_SESSION['username']; }
require_once("Koneksi.php");
?>

<html lang="en">
<head>
  <TITLE>SISTEM INFORMASI</TITLE>
  <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/style.css" type="text/css" rel="stylesheet" />
  <link rel="shortcut icon" href="images/Kemenhukham.png">
  <link href="bootstrap.min.css" rel="stylesheet"/>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<img src="images/kem.jpg" height="70px" width="300px">
<div id="header">
<div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">SISTEM INFORMASI PELAPORAN</a>
      </div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav navbar-right">
  <li><a href="listlogin.php">Daftar User</a>
    <li><a href="Logout.php">Keluar</a>
    </li>
  </ul>
</div>
</div>
</nav>
   <td><marquee>
<h3 class="style2"><span class="style8">Selamat Datang Di Sistem Informasi Pelaporan</strong></span></h3>
</marquee></td>
      
      <ul class="nav nav-pills nav-stacked">
        <li><a href="adminbulanan.php"><strong>Bulanan</strong></a></li>
        <li><a href="admintriwulan.php"><strong>Triwulan</strong></a></li>
        <li><a href="adminsemester.php"><strong>Semesteran</strong></a></li>
        <li><a href="admintahunan.php"><strong>Tahunan</strong></a></li>
        <li><a href="adminsituasional.php"><strong>Situasional</strong></a></li>
      </ul><br>
</body>
<br>
<br>
<br>
<br>
<hr>
<div class="row">
    <p class="text-center">Copyright &copy;  2018</p>
  </div>
</html>