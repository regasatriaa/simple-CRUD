<?php
include "Koneksi.php";

// membaca informasi yang dikirim dari file view.php pada address bar
$id = $_GET['id'];

// Perintah sql untuk menampilkan database
$queri = "select * from user where id = '$id'";

// perintah untuk menjalankan sql
$hasil = mysql_query($queri);

// menjadikan data dalam bentuk array
$data  = mysql_fetch_array($hasil);

$nomor = $data['id'];
$username = $data['username'];
$password = $data['password'];

?>


<link rel="stylesheet" href="Form.css" type="text/css">
<form action="aksiedit.php" method="post" class="white-pink">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
    <h1>Edit Data User
        <span>Harap Seluruh Form Diisi Dengan Lengkap Dan Benar Sesuai Dengan Fakta</span>
    </h1>
    <label>
        <span>Username :</span>
        <input type="text" name="username" required value="<?php echo $data['username']; ?>" />
    </label>
    
    <label>
        <span>password :</span>
        <input type="text" name="password" required value="<?php echo $data['password']; ?>" />
    </label>
	          <label>
        <span>&nbsp;</span> 
        <input type="submit" class="button" value="Kirim" />
		<img src="" width="55" height="0"/>
		<a href="listlogin.php" ><input type="button" class="button" value="Batal"></a>
    </label>    
</form>
<br></br>
<br></br>
<br></br>
</body>
<footer>
 <center><p class="text-center">Copyright &copy;  2018</p></center>
</footer>
</html>