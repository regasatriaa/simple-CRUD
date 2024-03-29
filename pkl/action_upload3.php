<?php
//Buat konfigurasi upload
//Folder tujuan upload file
$eror		= false;
$folder		= './upload/';
//type file yang bisa diupload
$file_type	= array('jpg','jpeg','png','gif','pdf','doc','docx','xls','xlsx','sql');
//tukuran maximum file yang dapat diupload
$max_size	= 10000000; // 1MB
if(isset($_POST['btnUpload'])){
	//Mulai memorises data
	$file_name	= $_FILES['data_upload']['name'];
	$file_size	= $_FILES['data_upload']['size'];
	//cari extensi file dengan menggunakan fungsi explode
	$explode	= explode('.',$file_name);
	$extensi	= $explode[count($explode)-1];

	//check apakah type file sudah sesuai
	if(!in_array($extensi,$file_type)){
		$eror   = true;
		$pesan .= '- Type file yang anda upload tidak sesuai<br />';
	}
	if($file_size > $max_size){
		$eror   = true;
		$pesan .= '- Ukuran file melebihi batas maximum<br />';
	}
	//check ukuran file apakah sudah sesuai

	if($eror == true){
		echo '<div id="eror">'.$pesan.'</div>';
	}
	else{
		//mulai memproses upload file
		if(move_uploaded_file($_FILES['data_upload']['tmp_name'], $folder.$file_name)){
			//catat nama file ke database
			$catat = mysql_query('insert into semester(Filename,Detail,nomor_surat,periode,tahun,username,Folder,DateUpload) values ("'.$file_name.'", "'.$_POST['Detail'].'", "'.$_POST['nomor_surat'].'",  "'.$_POST['periode'].'",  "'.$_POST['tahun'].'", "'.$_POST['username'].'", 
								  "'.$folder.'", "'.date('Y-m-d H:i:s').'")');
			//echo '<div id="msg">Berhasil mengupload file '.$file_name.'<a href="semester.php">back to list laporan</a> </div>';
			echo '<script language="javascript">alert("Berhasil mengupload file"); document.location="semester.php";</script>';	
		} else{
			echo "Proses upload eror";
		}
	}
}
?>