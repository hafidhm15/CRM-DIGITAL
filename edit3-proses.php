<?php
	include "koneksi.php";
	error_reporting(0);
?>

<?php
            
			$nik = $_POST['nik'];
            $nomor_pegawai = $_POST['nomor_pegawai'];
            $jabatan = $_POST['jabatan'];
            $tanggal_mulai_kerja = $_POST['tanggal_mulai_kerja'];
            $batas_usia_pensiun = $_POST['batas_usia_pensiun'];
            $status_kerja = $_POST['status_kerja'];
            $instansi_kerja = $_POST['instansi_kerja'];
            $penghasilan_bersih = $_POST['penghasilan_bersih'];
            $rekening_bank = $_POST['rekening_bank'];
            $nama_bank = $_POST['nama_bank'];
            $submit = $_POST['submit'];

            if(!empty($submit)){
            $update = mysql_query("UPDATE data_pekerjaan SET nik = '$nik', nomor_pegawai= '$nomor_pegawai', jabatan='$jabatan',tanggal_mulai_kerja='$tanggal_mulai_kerja', batas_usia_pensiun='$batas_usia_pensiun', status_kerja='$status_kerja', instansi_kerja='$instansi_kerja', penghasilan_bersih='$penghasilan_bersih', rekening_bank='$rekening_bank', nama_bank='$nama_bank' WHERE nik='$nik'");
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