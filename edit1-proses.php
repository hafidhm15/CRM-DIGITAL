<?php
	include "koneksi.php";
	error_reporting(0);
?>

<?php
            $nomor_peserta = $_POST['nomor_peserta'];
			$nama_peserta = $_POST['nama_peserta'];
            $nik = $_POST['nik'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $agama = $_POST['agama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $status_nikah = $_POST['status_nikah'];
            $status_peserta = $_POST['status_peserta'];
            $pekerjaan = $_POST['pekerjaan'];
            $kwarganegaraan = $_POST['kwarganegaraan'];
            $negara_kelahiran = $_POST['negara_kelahiran'];
            $pendidikan = $_POST['pendidikan'];
            $npwp = $_POST['npwp'];
            $tanggal_npwp = $_POST['tanggal_npwp'];
            $nomor_paspor = $_POST['nomor_paspor'];
            $tgl_paspor = $_POST['tgl_paspor'];
            $nomor_ponsel = $_POST['nomor_ponsel'];
            $email = $_POST['email'];
            $update_dated = $_POST['update_dated'];
            $submit = $_POST['submit'];


            if(!empty($submit)){
            $update = mysql_query("UPDATE data_individu SET nomor_peserta = '$nomor_peserta', nama_peserta= '$nama_peserta', nik='$nik',tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', agama='$agama', jenis_kelamin='$jenis_kelamin', status_nikah='$status_nikah', status_peserta='$status_peserta', pekerjaan='$pekerjaan', kwarganegaraan='$kwarganegaraan', negara_kelahiran='$negara_kelahiran', pendidikan='$pendidikan', npwp='$npwp', tanggal_npwp='$tanggal_npwp', nomor_paspor='$nomor_paspor', tgl_paspor='$tgl_paspor', nomor_ponsel='$nomor_ponsel', email='$email' WHERE nomor_peserta='$nomor_peserta'");
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