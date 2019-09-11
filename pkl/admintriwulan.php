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
</head>
<body>
<img src="images/kem.jpg" height="70px" width="300px">
<div id="header">
  <div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="admin.php">SISTEM INFORMASI PELAPORAN</a>
      </div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav navbar-right">
    <li><a href="admin.php">Home</a>
    </li>
    <li><a href="Logout.php">Keluar</a>
    </li>
  </ul>
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
<div class="container" style="margin-top:35px">
        <div class="form-group pull-right">
            <input type="text" class="search form-control" placeholder="Search here..."/>
        </div>
        <span class="counter pull-right"></span>
        <table class="table table-bordered table-striped results">
            <thead>
                <tr>
                    <th width="10%">Nama File</th>
                    <th width="10%">Dari</th>
                    <th width="20%">Jenis Laporan</th>
                    <th width="20%">Nomor Surat</th>
                    <th width="10%">Periode</th>
                    <th width="10%">Tahun</th>
                    <th width="25%">Tanggal Upload</th>
                    <th width="20%">Proses</th>
                    <th width="10%">Hapus</th>
                </tr>
                <tr class="no-result warning">
                    <td colspan="5">No result (Tidak ada hasil)</td>
                </tr>
            </thead>
            <tbody>
      <?php
  $konek = mysqli_connect("localhost","root","","db_kanwil");

  $query = "SELECT * FROM triwulan ORDER BY ID DESC";
  $hasil = mysqli_query($konek, $query);

  while ($r = mysqli_fetch_array($hasil)){
  ?>
  <tr><td><?php  echo "$r[Filename]";?></td>
  <td><?php echo "$r[username]";?></td>
  <td><?php  echo "$r[Detail] ";?></td>
  <td><?php  echo "$r[nomor_surat]";?></td>
  <td><?php echo "$r[periode]";?></td>
  <td><?php echo "$r[tahun]";?></td>
  <td><?php echo "$r[DateUpload]";?></td>
  <td><?php echo "<a href=\"donlot.php?file=$r[Filename]\">Download</a>";?></td>   
  <td><a href="adminHapustriwulan.php?id=<?php echo $r['id'] ?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data?')">Hapus</a>
   </td>
   </tr>
        
      <?php
       // $no++;
    };
    ?>
    </tbody>
        </table>
    </div>

    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.search').keyup(function(){
            var searchTerm = $(".search").val();
            var listItem = $('.results tbody').children('tr');
            var searchSplit = searchTerm.replace(/ /g, "'):containsi('");
            $.extend($.expr[':'],{
                'containsi': function(elem,i,match,array){
                    return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
                }
            })
            $(".results tbody tr").not(":containsi('"+ searchSplit +"')").each(function(){
                $(this).attr('visible','false');
            })
            $(".results tbody tr:containsi('"+ searchSplit +"')").each(function(){
                $(this).attr('visible','true');
            })
            var jobCount = $('.results tbody tr[visible="true"]').length;
            $('.counter').text(jobCount +' item');
            if(jobCount == 0){
                $('no-result').show();
            } else{
                $('no-result').hide();
            }
        })
    })
    </script>

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