<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:Login.php'); }
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
<br>
<div id="header">
  <div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="Utama.php">SISTEM INFORMASI PELAPORAN</a>
      </div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav navbar-right">
    <li><a href="Utama.php">Home</a>
    </li>
    <li><a href="Daftar.php">Upload</a>
    </li>
    <li><a href="Logout.php">Keluar</a>
    </li>
  </ul>
</div>
</div>
</nav>

<br></br><?php
include 'Koneksi.php';
?>
<style>
    tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
        background-color: #ededed;
    }
    table{
        width: 100%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 3px;
    }
    thead tr {
        background-color: #36c2ff;
    }
</style>
 
<!--<h1 align="center"> Tabel Laporan</h1>--> 

<br>
<br>
<table border="1">
    <thead>
        <tr>
           
            <th><center>Nama file</center></th>
            <th><center>Jenis Laporan</center></th>
            <th><center>Nomor Surat</center></th>
            <th><center>Periode</center></th>
            <th><center>Tahun</center></th>
            <th><center>Tanggal Upload</center></th>
            <th><center>Proses</center></th>

            
        </tr>
    </thead>
     
    <tbody>
      <?php
    $query = mysql_query("SELECT * FROM bulanan WHERE username = '$username'");
 
   // $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
      <tr>
          
      <td><?php echo $data['Filename']; ?></td>
		  <td><center><?php echo $data['Detail']; ?></center></td>
      <td><?php echo $data['nomor_surat']; ?></td>
      <td><center><?php echo $data['periode']; ?></center></td>
      <td><center><?php echo $data['tahun']; ?></center></td>
		  <td><center><?php echo $data['DateUpload']; ?></center></td>
         		  
           		               <td align="center">                
                <a href="Hapus.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data?')">Hapus</a>
            </td>
		                           
	            </tr>
				
      <?php
       // $no++;
    }
    ?>
    </tbody>
</table>
<br></br>
<br></br>
<br></br>
</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
<div class="row">
    <p class="text-center">Copyright &copy;  2018</p>
  </div>

</html>