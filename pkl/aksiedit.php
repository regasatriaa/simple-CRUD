<?php

include 'Koneksi.php';


$id = $_POST['id'];

$username = $_POST['username'];
$password = $_POST['password'];



$update = "UPDATE user SET username='$username',password='$password' where id = '$id'";
$hasil = mysql_query($update);




if ($hasil){
//header ('location:view.php');
echo '<script language="javascript">alert("Data Berhasil Di Edit"); document.location="listlogin.php";</script>';
} else { echo '<script language="javascript">alert("Data Gagal Di Edit"); document.location="listlogin.php";</script>';
}

?>  