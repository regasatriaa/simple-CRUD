<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:index.html'); }
else { $username = $_SESSION['username']; }
require_once("Koneksi.php");
$query = mysql_query("SELECT * FROM situasional WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>
<html>
<head>
<title>SISTEM INFORMASI</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="shortcut icon" href="images/Kemenhukham.png">
</head>
<body>
    <br>
    <br>
<center>
<link rel="stylesheet" href="Form.css" type="text/css">
<form action="prosesdaftaruser.php" method="post" class="white-pink">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
    <h1>Daftar User Baru
        <span>Harap Seluruh Form Diisi Dengan Lengkap Dan Benar Sesuai Dengan Fakta</span>
    </h1>
    <label>
        <span>Username :</span>
        <input id="username" autocomplete="off" type="text" name="username" placeholder="Masukkan Username" required />
    </label>
	        <label>
        <span>Password :</span>
        <input id="password" autocomplete="off" type="text" name="password" placeholder="Masukkan Password" required />
    </label>
    <label>
        <center>
        <span>&nbsp;</span> 
        <input type="submit" class="button" value="Daftar" />
		<img src="" width="55" height="0"/>
		<a href="listlogin.php" ><input type="button" class="button" value="Batal"></a>
    </center>
    </label>    
</form>
</center>
<br></br>
<br></br>
<br></br>
</body>
<hr>
<div class="row">
    <p class="text-center">Copyright &copy;  2018</p>
  </div>

</html>