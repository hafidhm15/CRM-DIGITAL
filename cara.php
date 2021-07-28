<?php session_start(); ?>
<?php if(isset($_SESSION['nama_pelanggan'])){ ?>
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
	<title>Pekata - Identifikasi Kebutuhan Pelanggan</title>
	
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href='img/logo2.png' rel='shortcut icon'>
	<style>




.navbar-default .navbar-nav>li>a {
    color:black;
    TEXT-DECORATION: none;
    WHITE-SPACE: nowrap;
    DISPLAY: block;
}

.container {
 margin:0;

 
}

.h2{
	color:white;
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
	<div class="container">
	<div class="row">
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
		<li><a href="index.php">HOME</a></li>
        <li><a href="keluhan-pelanggan.php">KELUHAN PELANGGAN</a></li>
        <li><a href="identifikasi-kebutuhan-pelanggan.php">KEBUTUHAN PELANGGAN</a></li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LIHAT LAPORAN <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="laporan-keluhan.php">Keluhan Pelanggan</a></li>
            <li><a href="laporan-kebutuhan.php">Kebutuhan Pelanggan</a></li>
          </ul>
        </li>
        <li><a href="cara.php">CARA</a></li>
		<li><a href="profile.php">PROFIL</a></li>

			</ul>
				
			  <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['nama_pelanggan']; ?> <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Akun Saya</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Histori Kunjungan</a></li>
					<li class="divider"></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
                    </ul>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
        <body>

<div class="container"> 
<h2>Cara Pengaduan</h2>
  <img src="img/carapengaduan.jpg"  width="70%" class="img-responsive" alt="Responsive image" style="background-size:cover;" > 
  <p>1.Buka browser dan login Web CRM Tapera<br>
  2.Pada halaman utama klik Pengaduan Peserta<br>
  3.Pada halaman Pengaduan Peserta isi form untuk dikirim<br>
  4.Setelah melakukan pengisian form kirim    
  </p>
</div>
<br>
<br>
<br>
<div class="container"> 
  <img src="img/carakebutuhan.jpg"  width="70%" class="img-responsive" alt="Responsive image" style="background-size:cover;" > 
  <p>1.Buka browser dan login Web CRM Tapera<br>
  2.Pada halaman utama klik Kebutuhan Peserta<br>
  3.Pada halaman Kebutuhan Peserta isi form untuk dikirim<br>
  4.Setelah melakukan pengisian form kirim    
  </p>
</div>

</body>
</html>
<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
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

