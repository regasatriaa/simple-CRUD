<html>
<head>
<title></title>
</head>
<body>

<?php
require_once("Koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
if(mysql_num_rows($cekuser) <> 0) {
echo "Username Sudah Terdaftar!<br/>";
echo "<a href='daftaruser.php'>Kembali</a>";
} else {
if(!$username || !$password) {
echo "Masih ada data yang kosong!<br/>";
echo "<a href='daftaruser.php'>Kembali</a>";
} else {
$simpan = mysql_query("INSERT INTO user(username,password) VALUES('$username','$password')");
if($simpan) {
echo "Pendaftaran Sukses, Silahkan <a href='listlogin.php'>Kembali</a>";
} else {
echo "Proses Gagal!, Lakukan Pendaftaran Ulang <a href='daftaruser.php'>Kembali</a>";
}
}
}
?>
<br></br>
<br></br>
<br></br>
</body>
<footer>
</html>