<?php
include "../koneksi.php";
$nik = $_GET['nik'];

$query = mysql_query("DELETE FROM data_aktivasi WHERE nik = '$nik'");

	if($query == true){
	echo"<script>alert('Data berhasil dihapus')</script>";
	} else{
	echo "<script>alert('Data gagal dihapus')</script>";
	}

?>
<meta http-equiv='refresh' content='0;URL=aktivasi.php'>