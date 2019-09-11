<html>
<head>
    <title>SISTEM INFORMASI</title>
    <link rel="shortcut icon" href="images/Kemenhukham.png">
</head>
<?php
require_once("Koneksi.php");
session_start();
if(!isset($_SESSION['username'])) {
header('location:index.html'); }
else { $username = $_SESSION['username']; }
include('action_upload.php');
?>
<style type="text/css">
    .table{
        font:normal 12px Tahoma,verdana;
        border:silver 1px solid;
        width:350px;
    }
    .table tr td{
        border-bottom:silver 1px solid;
        border-right:silver 1px solid;
        padding:0 5px 0 5px;
    }
    .table tr td.title{
        font:bold 12px Tahoma,verdana;
        background-color:#999999;
        color:#000000;
    }
    input{
        font:normal 12px Tahoma,verdana;
    }
    #eror{
        width:345px;;
        border:red 1px solid;
        margin-left:auto;
        margin-right:auto;
        margin-bottom:5px;
        padding:0 0 0 5px;
    }
    #msg{
        width:345px;;
        border:green 1px solid;
        margin-left:auto;
        margin-right:auto;
        margin-bottom:5px;
        padding:0 0 0 5px;
    }
</style>
<form method="post" enctype="multipart/form-data" action="">
<table class="table" cellpadding="0" cellspacing="0" align="center">
<tr>
    <td colspan="2" height="25" class="title">Form Upload File</td>
</tr>
<tr>
    <td width="100">File</td>
    <td><input type="file" name="data_upload" /></td>
</tr>
<tr><td>
    Jenis Laporan :</td>
                 <td>
                   <select name="Detail">
                   <option value=0 selected>Jenis Laporan</option>
                   <?php include 'Koneksi.php';
                   $q = mysql_query("select bulanan from laporanbulanan"); 
                   while ($row1 = mysql_fetch_array($q)){
                   echo "<option value=$row1[bulanan]>$row1[bulanan]</option>";
                   }
                   ?>
                   </td>
<tr>
<tr>
    <td >Nomor Surat </td>
    <td><textarea name="nomor_surat" cols="30" rows="3" placeholder="Nomor Surat" required></textarea></td>
</tr>
<tr><td>
    Dari :</td>
                 <td><p>
                   <select name="username">
                   <option value=0 selected>Dari</option>
                   <?php include 'Koneksi.php';
                   $q = mysql_query("select username from user"); 
                   while ($row1 = mysql_fetch_array($q)){
                   echo "<option value=$row1[username]>$row1[username]</option>";
                   }
                   ?>
                   </td>
                   <tr><td>
    Periode  :</td>
                 <td><p>
                   <select name="periode">
                   <option value=0 selected>Periode</option>
                   <?php include 'Koneksi.php';
                   $q = mysql_query("select bulan from periode"); 
                   while ($row1 = mysql_fetch_array($q)){
                   echo "<option value=$row1[bulan]>$row1[bulan]</option>";
                   }
                   ?>
                   </td>
                   <tr><td>
    Tahun :</td>
                 <td><p>
                   <select name="tahun">
                   <option value=0 selected>Tahun</option>
                   <?php include 'Koneksi.php';
                   $q = mysql_query("select tahun from tahun"); 
                   while ($row1 = mysql_fetch_array($q)){
                   echo "<option value=$row1[tahun]>$row1[tahun]</option>";
                   }
                   ?>
                   </td>
<br>
<br>
<tr>
    <td></td>
    <td><input type="submit" name="btnUpload" value="Upload" />
    <a href="bulanan.php" ><input type="button" class="button" value="Batal"></a></td>
</tr>
</table>
</form>
</html>