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
	

		<h1><a href="https://learncodeweb.com/php/php-crud-in-bootstrap-3-with-a-search-functionality/">Edit Data Pekerjaan</a></h1>

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

			$nik = $_GET['nik'];				
			$query_mysql = mysql_query("SELECT * FROM data_pekerjaan WHERE nik='$nik'")or die(mysql_error());
			while($row = mysql_fetch_array($query_mysql)){
			?>
		<div class="panel panel-default">
			<div class="panel-heading clearfix"><i class="fa fa-fw fa-plus-circle"></i> <strong>Edit Data</strong> <a href="datapekerjaan.php" class="pull-right btn btn-danger btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Data Pekerjaan</a></div>
			<div class="panel-body">
				<div class="col-sm-6">
					<form action="edit3-proses.php" method="post">
                        <div class="form-group">
							<label>NIK<span class="text-danger">*</span></label>
							<input type="text" name="nik" id="nik" class="form-control" value="<?php echo $row['nik']; ?>">
						</div>
                        <div class="form-group">
							<label>Nomor Pegawai <span class="text-danger">*</span></label>
							<input type="text" name="nomor_pegawai" id="nomor_pegawai" class="form-control" value="<?php echo $row['nomor_pegawai']; ?>">
						</div>
                        <div class="form-group">
							<label>Jabatan <span class="text-danger">*</span></label>
							<input type="text" name="jabatan" id="jabatan" class="form-control" value="<?php echo $row['jabatan']; ?>">
						</div>
                        <div class="form-group">
                        <label for="tanggal_mulai_kerja">Tanggal Mulai Kerja</label><br>
                        <input type="date" id="tanggal_mulai_kerja" name="tanggal_mulai_kerja" value="<?php echo $row['tanggal_mulai_kerja']; ?>">>
                        </div>    
                        <div class="form-group">
							<label>Batas Usia Pensiun <span class="text-danger">*</span></label>
							<input type="text" name="batas_usia_pensiun" id="batas_usia_pensiun" class="form-control" value="<?php echo $row['batas_usia_pensiun']; ?>">
						</div>  
                        <br>
                        <div class="form-group">
                        <label>Status Kerja :</label>
                        <select name="status_kerja">
                            <option value="Aktif"<?php echo ($result['status_kerja'] == 'Aktif') ?'selected' : '';?>>Aktif</option>
                            <option value="Tidak Aktif"<?php echo ($result['status_kerja'] == 'Tidak Aktif') ?'selected' : '';?>>Tidak Aktif</option>
                        </select>
						</div>

                        <div class="form-group">
							<label>Instansi Kerja <span class="text-danger">*</span></label>
							<input type="text" name="instansi_kerja" id="instansi_kerja" class="form-control" value="<?php echo $row['instansi_kerja']; ?>">
						</div>
                        <div class="form-group">
							<label>Penghasilan Bersih<span class="text-danger">*</span></label>
							<input type="text" name="penghasilan_bersih" id="penghasilan_bersih" class="form-control" value="<?php echo $row['penghasilan_bersih']; ?>">
						</div>
                        <div class="form-group">
							<label>Rekening Bank<span class="text-danger">*</span></label>
							<input type="text" name="rekening_bank" id="rekening_bank" class="form-control" value="<?php echo $row['rekening_bank']; ?>">
						</div>
						<div class="form-group">
							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Perbaharui</button>
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
    <?php 
	}
	?>
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
header("location:datapeserta.php");
}
?>