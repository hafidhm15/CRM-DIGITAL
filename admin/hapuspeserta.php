<?php
include "../koneksi.php";
$nomor_peserta = $_GET['nomor_peserta'];

$query = mysql_query("DELETE FROM data_individu WHERE nomor_peserta = '$nomor_peserta'");

	if($query == true){
	echo"<script>alert('Data berhasil dihapus')</script>";
	} else{
	echo "<script>alert('Data gagal dihapus')</script>";
	}

?>
<meta http-equiv='refresh' content='0;URL=peserta.php'>