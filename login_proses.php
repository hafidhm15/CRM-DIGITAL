<?php
session_start();
include "koneksi.php";
$user	= $_POST['username'];
$pass	= $_POST['password'];
$query	= "SELECT username FROM data_aktivasi WHERE username = '$user' AND Password = MD5('$pass')";
$proses	= mysql_query($query) or die (mysql_error());
$jumlah	= mysql_num_rows($proses);
if($jumlah == 0){
echo "<script>alert('Username atau password salah!');</script>";
echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
}else{
list($nama_peserta) = mysql_fetch_row($proses);
$_SESSION['nama_peserta'] = $nama_peserta;
echo "<div class='alert alert-success' role='alert'>Login berhasil! Halaman dialihkan...</div>";
echo "<meta http-equiv='refresh' content='2;URL=index.php'>";
}
?>