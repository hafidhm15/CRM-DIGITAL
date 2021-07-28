<?php
	include "koneksi.php";
	error_reporting(0);
?>

<?php
$nik = $_GET['nik'];

$query = mysql_query("DELETE FROM data_alamat WHERE nik = '$nik'");

if($query)
header('location:dataalamat.php');
else
    echo 'Delete data gagal';

?>