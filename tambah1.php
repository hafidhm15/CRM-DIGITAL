<?php session_start(); ?>
<?php if(isset($_SESSION['nama_peserta'])){ ?>
<?php
	include "koneksi.php";
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRM DIGITAL TAPERA</title>	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href='img/logo6.jpg' rel='shortcut icon'>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	

<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>

<script type="text/javascript">
				function eraseText() {
				 document.getElementById("keperluan").value = "";
				 
				 document.getElementById("permintaan").value = "";
				 document.getElementById("permasalahan").value = "";
				 
				 document.getElementById("permintaan1").value = "";
				 document.getElementById("penyebab").value = "";
				}
	</script>

<style>
.navbar-default .navbar-nav>li>a {
    color:black;
    TEXT-DECORATION: none;
    WHITE-SPACE: nowrap;
    DISPLAY: block;
}


.h2{
	color:white;
}

.carousel-inner{
  margin-top:60px;
}
.carousel-inner .item {
    height:550px;
  }

.carousel-inner #slide1 {
  background: url('img/kontak.jpg') ;
  background-size: cover;
  background-position: top center;
  background-repeat: no-repeat;
}

.carousel-inner #slide2 {
  background: url('img/gedung.jpg') ;
  background-size: cover;
  background-position: top center;
  background-repeat: no-repeat;
}

.carousel-inner #slide3 {
  background: url('img/tangan.jpg') ;
  background-size: cover;
  background-position: top center;
  background-repeat: no-repeat;
}

.carousel-inner .carousel-caption h3 {
  color: #fff;
  margin: 0;
  align-items: center;
  font-size: 30px;
  font-weight: 700;
}

.carousel-inner .carousel-caption p {
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
  color: #fff;
  margin-top: 10px;

}

.tentang {
  margin-top:60px;
  padding:20px;
  margin:40px;
 text-align:center;
}

.tentang p {
  max-width: 950px;
  text-align:center;
  margin-left:12%;
}


.bg-4 { 
    background-color: #2f2f2f;
    color: #fff;
}

footer{
    padding-top: 70px;
    padding-bottom: 70px;
  }

.container .row .thumbnail {
  padding-bottom: 70px;
}


@media screen and (max-width: 768px) {
  .jumbotron {
    padding-top:20px;
    padding-bottom:20px;
  }
}


	</style>
	<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
	
	<script type="text/javascript">
				function eraseText() {
				 document.getElementById("keperluan").value = "";
				 
				 document.getElementById("permintaan").value = "";
				 document.getElementById("permasalahan").value = "";
				 
				 document.getElementById("permintaan1").value = "";
				 document.getElementById("penyebab").value = "";
				}
	</script>
</head>
<body style="background:white;">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	<img  src="img/logo5.png" width="215px">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
		<li><a href="index.php">HOME <span class="sr-only">(current)</span></a></li>
    <li class="active"><a href="datapeserta.php">DATA PESERTA</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LAYANAN<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="layananpengaduan.php">LAYANAN PENGADUAN</a></li>
            <li><a href="layananchat.php">LAYANAN CHAT</a></li>
            <li><a href="layanancallcenter.php">CALL CENTER & EMAIL</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CARA<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="carapengaduan.php">MENGGUNAKAN LAYANAN PENGADUAN</a></li>
            <li><a href="carachat.php">MENGGUNAKAN LAYANAN CHAT</a></li>
            <li><a href="caracsdanemail.php">MENGGUNAKAN CALL CENTER & EMAIL</a></li>
          </ul>
        </li>
				<li><a href="profile.php">PROFIL</a></li>

			</ul>
				
			  <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['nama_peserta']; ?> <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
          <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Akun Saya</a></li>
					<li class="divider"></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
				  </ul>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
<br>
<br>
<br>
	<div class="container">
	

		<h1><a href="https://learncodeweb.com/php/php-crud-in-bootstrap-3-with-a-search-functionality/">Tambah Data Individu</a></h1>

		<?php
		if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="un"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User name is mandatory field!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ue"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User email is mandatory field!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User phone is mandatory field!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ras"){
			echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record added successfully!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rna"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Record not added <strong>Please try again!</strong></div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="dsd"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Please delete a user and then try again <strong>We set limit for security reasons!</strong></div>';
		}
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
            $submit = $_POST['submit'];

						
			if(!empty($submit)){
            $simpan = mysql_query("INSERT INTO data_individu VALUES('$nomor_peserta', '$nama_peserta', '$nik','$tempat_lahir','$tanggal_lahir', '$agama', ' $jenis_kelamin', '$status_nikah', '$status_peserta', '$pekerjaan', '$kwarganegaraan', '$negara_kelahiran', '$pendidikan', '$npwp', '$tanggal_npwp', ' $nomor_paspor', '$tgl_paspor', '$nomor_ponsel', '$email', now())");
				 if($simpan==true) {
					echo "<script>alert('Berhasil!');</script>";
				}
				else {
					echo "<script>alert('Gagal!');</script>";
				}
				
				echo "<meta http-equiv='refresh' content='0;URL='>";
			}
		?>
		<div class="panel panel-default">
			<div class="panel-heading clearfix"><i class="fa fa-fw fa-plus-circle"></i> <strong>Tambah Data</strong> <a href="datapeserta.php" class="pull-right btn btn-danger btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Data Individu</a></div>
			<div class="panel-body">
				<div class="col-sm-6">
					<form method="post">
						<div class="form-group">
							<label>Nomor Peserta <span class="text-danger">*</span></label>
							<input type="text" name="nomor_peserta" id="nomor_peserta" class="form-control" placeholder="Masukkan Nomor Peserta" required>
						</div>
						<div class="form-group">
							<label>Nama Peserta <span class="text-danger">*</span></label>
							<input type="text" name="nama_peserta" id="nama_peserta" class="form-control" placeholder="Masukkan Nama Peserta" required>
						</div>
                        <div class="form-group">
							<label>NIK<span class="text-danger">*</span></label>
							<input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK" required>
						</div>
                        <div class="form-group">
							<label>Tempat Lahir <span class="text-danger">*</span></label>
							<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" required>
						</div>
                        <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label><br>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir">
                        </div>      
                        <br>
                        <div class="form-group">
                        <label>Agama:</label>
                        <select name="agama">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                        </select>
						</div>
                        <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select name="jenis_kelamin">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
						</div>
                        <div class="form-group">
                        <label>Status Nikah :</label>
                        <select name="status_nikah">
                            <option value="menikah">Menikah</option>
                            <option value="lajang">Lajang</option>
                        </select>
						</div>
                        <div class="form-group">
                        <label>Status Peserta :</label>
                        <select name="status_peserta">
                            <option value="aktif">Aktif</option>
                            <option value="tidak aktif">Tidak Aktif</option>
                        </select>
						</div>

                        <div class="form-group">
							<label>Pekerjaan <span class="text-danger">*</span></label>
							<input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" required>
						</div>
                        <div class="form-group">
							<label>Kwarganegaraan<span class="text-danger">*</span></label>
							<input type="text" name="kwarganegaraan" id="kwarganegaraan" class="form-control" placeholder="Masukkan Kwarganegaraan" required>
						</div>
                        <div class="form-group">
							<label>Negara Kelahiran<span class="text-danger">*</span></label>
							<input type="text" name="negara_kelahiran" id="negara_kelahiran" class="form-control" placeholder="Masukkan Negara Kelahiran" required>
						</div>
                        <div class="form-group">
							<label>Pendidikan<span class="text-danger">*</span></label>
							<input type="text" name="pendidikan" id="pendidikan" class="form-control" placeholder="Masukkan Pendidikan Terakhir" required>
						</div>
                        <div class="form-group">
							<label>NPWP<span class="text-danger">*</span></label>
							<input type="text" name="npwp" id="npwp" class="form-control" placeholder="Masukkan NPWP" required>
						</div>
                        <div class="form-group">
                        <label for="tanggal_npwp">Tanggal NPWP</label><br>
                        <input type="date" id="tanggal_npwp" name="tanggal_npwp">
                        </div>   
                        <div class="form-group">
							<label>Nomor Paspor<span class="text-danger">*</span></label>
							<input type="text" name="nomor_paspor" id="nomor_paspor" class="form-control" placeholder="Masukkan Nomor Paspor" required>
						</div>
                        <div class="form-group">
                        <label for="tgl_paspor">Tanggal Kadaluarsa Paspor</label><br>
                        <input type="date" id="tgl_paspor" name="tgl_paspor">
                        </div>   
                        <div class="form-group">
							<label>Nomor Ponsel <span class="text-danger">*</span></label>
							<input type="text" name="nomor_ponsel" id="nomor_ponsel" class="form-control" placeholder="Masukkan Nomor Ponsel" required>
						</div>
                        <div class="form-group">
							<label>Email <span class="text-danger">*</span></label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Nomor Ponsel" required>
						</div>
						<div class="form-group">
							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</div>
	<footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>@Copyright 2021. Hak Cipta dilindungi Undang-Undang</a></small>
          </div>
        </div>
      </footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins -->
	<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins below, or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script>
	  $(function () {
		$('#myTab a:first').tab('show')
	  })
	</script>
</body>
</html>
<?php 
}else{
header("location:login.php");
}
?>