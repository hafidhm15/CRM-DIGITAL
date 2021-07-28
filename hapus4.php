<?php
	include "koneksi.php";
	error_reporting(0);
?>

<?php
$nik = $_GET['nik'];

$query = mysql_query("DELETE FROM data_keluarga WHERE nik = '$nik'");

if($query)
header('location:datakeluarga.php');
else
    echo 'Delete data gagal';

?>