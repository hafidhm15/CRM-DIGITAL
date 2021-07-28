<?php
	include "koneksi.php";
	error_reporting(0);
?>

<?php
            
			$nik = $_POST['nik'];
            $nomor_kk = $_POST['nomor_kk'];
            $hubungan_keluarga = $_POST['hubungan_keluarga'];
            $nama_pasangan = $_POST['nama_pasangan'];
            $nama_ibu_kandung = $_POST['nama_ibu_kandung'];
            $jumlah_anak = $_POST['jumlah_anak'];
            $submit = $_POST['submit'];

            if(!empty($submit)){
            $update = mysql_query("UPDATE data_keluarga SET nik = '$nik', nomor_kk= '$nomor_kk', hubungan_keluarga='$hubungan_keluarga', nama_pasangan='$nama_pasangan', nama_ibu_kandung='$nama_ibu_kandung', jumlah_anak='$jumlah_anak' WHERE nik='$nik'");
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
header("location:datapekerjaan.php");
}
?>