<?php
	include "koneksi.php";
	error_reporting(0);
?>

<?php
             $nik = $_POST['nik'];
             $alamat1 = $_POST['alamat1'];
             $alamat2 = $_POST['alamat2'];
             $alamat3 = $_POST['alamat3'];
             $alamat4 = $_POST['alamat4'];
             $kelurahan = $_POST['kelurahan'];
             $kecamatan = $_POST['kecamatan'];
             $kab_kota = $_POST['kab_kota'];
             $provinsi = $_POST['provinsi'];
             $kode_pos = $_POST['kode_pos'];
             $submit = $_POST['submit'];


            if(!empty($submit)){
            $update = mysql_query("UPDATE data_alamat SET nik = '$nik', alamat1= '$alamat1', alamat2='$alamat2',alamat3='$alamat3', alamat4='$alamat4', kelurahan='$kelurahan', kecamatan='$kecamatan', kab_kota='$kab_kota', provinsi='$provinsi', kode_pos='$kode_pos' WHERE nik='$nik'");
            if($update==true) {
                echo "<script>alert('Berhasil!');</script>";
            }
            else {
                echo "<script>alert('Gagal!');</script>";
            }
            
            echo "<meta http-equiv='refresh' content='0;URL='>";
        
    ?>
           
<?php 
}else{
header("location:datapeserta.php");
}
?>