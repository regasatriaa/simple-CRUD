<?php
@ob_start();
session_start();
?>

<html>
<head>
<title></title>
</head>
<body>

<?php
require_once("Koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
echo "Username Belum Terdaftar!<br/>";
echo "<a href='index.html'>Back</a>";
} else {
if($pass <> $hasil['password']) {
echo "Password Salah!<br/>";
echo "<a href='index.html'>Back</a>";
} else {
$_SESSION['username'] = $hasil['username'];
header('location:Utama.php');
if($username == 'admin' && $pass == 'admin') {
	$_SESSION ['masuk'] = 'admin';
	header ('location: admin.php');
} else {
$_SESSION['username'] = $hasil['username'];
header('location:Utama.php');
if($username == 'superadmin' && $pass == '1234') {
	$_SESSION ['masuk'] = 'admin';
	header ('location: superadmin.php');
}
}
	}
}
?>
<br></br>
<br></br>
<br></br>
</body>
</html>