<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:index.html'); }
else { $username = $_SESSION['username']; }
require_once("Koneksi.php");
$query = mysql_query("SELECT * FROM triwulan WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>
<html>
<head>
<title>SISTEM INFORMASI</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/Kemenhukham.png">
  <link href="bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<img src="images/kem.jpg" height="70px" width="300px">
<div id="header">
  <div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="superadmin.php">SISTEM INFORMASI PELAPORAN</a>
      </div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav navbar-right">
  <li><a href="daftaruser.php">Tambah User</a>
    </li>
    <li><a href="admin.php">Home</a>
    </li>
    <li><a href="Logout.php">Keluar</a>
    </li>
  </ul>
</div>
</div>
</nav>
<?php
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
           
            <th><center> Username</center></th>
            <th><center>Password</center></th>
            <th><center>proses</center></th>

            
        </tr>
    </thead>
     
    <tbody>
      <?php
    $query = mysql_query("SELECT * FROM user");
 
   // $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
      <tr>
      <td><?php echo $data['username']; ?></td>
      <td><center><?php echo $data['password'];?></center></td>

      <td align="center">                  
                <a href="hapususer.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data?')">Hapus</a>
                <a href="Edit.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Apakah Anda Yakin Akan Mengganti Data?')">Edit</a>
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
<div>
    <p class="text-center">Copyright &copy;  2018</p>
  </div>
</html>