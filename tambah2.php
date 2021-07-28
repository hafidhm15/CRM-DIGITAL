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
	

		<h1><a href="https://learncodeweb.com/php/php-crud-in-bootstrap-3-with-a-search-functionality/">Tambah Data Alamat</a></h1>

		
		

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
				 $simpan = mysql_query("INSERT INTO data_alamat VALUES('$nik','$alamat1', '$alamat2', '$alamat3', '$alamat4', '$kelurahan','$kecamatan','$kab_kota','$provinsi','$kode_pos', now())");
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
			<div class="panel-heading clearfix"><i class="fa fa-fw fa-plus-circle"></i> <strong>Tambah Data</strong> <a href="dataalamat.php" class="pull-right btn btn-danger btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Data Alamat</a></div>
			<div class="panel-body">
				<div class="col-sm-6">
					<form method="post">
						<div class="form-group">
							<label>NIK <span class="text-danger">*</span></label>
							<input type="text" name="nik" id="nik" class="form-control"  placeholder="Masukkan NIK" required>
						</div>
						<div class="form-group">
							<label>Alamat 1 <span class="text-danger">*</span></label>
							<input type="text" name="alamat1" id="alamat1" class="form-control" placeholder="Masukkan Alamat 1" required>
						</div>
                        <div class="form-group">
							<label>Alamat 2<span class="text-danger">*</span></label>
							<input type="text" name="alamat2" id="alamat2" class="form-control" placeholder="Masukkan Alamat 2" required>
						</div>
                        <div class="form-group">
							<label>Alamat 3 <span class="text-danger">*</span></label>
							<input type="text" name="alamat3" id="alamat3" class="form-control" placeholder="Masukkan Alamat 3" required>
						</div>
                        <div class="form-group">
							<label>Alamat 4 <span class="text-danger">*</span></label>
							<input type="text" name="alamat4" id="alamat4" class="form-control" placeholder="Masukkan Alamat 4" required>
						</div>
                        <div class="form-group">
							<label>Kelurahan<span class="text-danger">*</span></label>
							<input type="text" name="kelurahan" id="kelurahan" class="form-control" placeholder="Masukkan Kelurahan" required>
						</div>
                        <div class="form-group">
							<label>kecamatan<span class="text-danger">*</span></label>
							<input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="Masukkan Kecamatan" required>
						</div>
                        <div class="form-group">
							<label>Kabupaten Kota<span class="text-danger">*</span></label>
							<input type="text" name="kab_kota" id="kab_kota" class="form-control" placeholder="Masukkan Kabupaten Kota" required>
						</div>
                        <div class="form-group">
							<label>Provinsi<span class="text-danger">*</span></label>
							<input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="Masukkan Provinsi" required>
						</div>
                        <div class="form-group">
							<label>Kode Pos<span class="text-danger">*</span></label>
							<input type="text" name="kode_pos" id="kode_pos" class="form-control" placeholder="Masukkan Kode Pos" required>
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