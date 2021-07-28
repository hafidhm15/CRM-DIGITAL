<?php
	include "koneksi.php";
	error_reporting(0);
?>

<?php
$nomor_peserta = $_GET['nomor_peserta'];

$query = mysql_query("DELETE FROM data_individu WHERE nomor_peserta = '$nomor_peserta'");

if($query)
header('location:datapeserta.php');
else
    echo 'Delete data gagal';

?>