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
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href='img/logo6.jpg' rel='shortcut icon'>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
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

  .tentang {
  margin-top:60px;
  padding:20px;
  margin:40px;
 text-align:center;
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
		<li class="active"><a href="index.php">HOME <span class="sr-only">(current)</span></a></li>
    <li><a href="datapeserta.php">DATA PESERTA</a></li>
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
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active" id="slide1">
        <div class="carousel-caption">
          <h3 style="text-align:center; margin-bottom:22%;">SELAMAT DATANG DI LAYANAN CRM DIGITAL TAPERA</h3>
          <p>Melayani peserta setiap saat</p>
        </div>      
      </div>

      <div class="item" id="slide2">
        <div class="carousel-caption">
          <h3 style="text-align:center; margin-bottom:22%;">MEMBERIKAN LAYANAN CRM SECARA MUDAH</h3>
          <p>Melalui media web </p>
        </div>      
      </div>
    
      <div class="item" id="slide3">
        <div class="carousel-caption">
          <h3 style="text-align:center; margin-bottom:22%;">MENERIMA SETIAP LAPORAN PESERTA </h3>
          <p>Melalui fitur layanan yang tersedia </p>
        </div>      
      </div>
    </div>



    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div class="tentang" class="container text-center">
  <h2>TENTANG CRM DIGITAL TAPERA</h2>

  <p><em>Customer Relationship Management(CRM)</em></p>
  <br>
  <p style="text-align:justify;">CRM DIGITAL TAPERA adalah sebuah aplikasi berbasis web yang berfokus pada pembangunan dan pemeliharaan hubungan dengan 
  pesertanya dan untuk mengatasi terjadinya kegagalan komunikasi dan kesalahan presepsi antara kedua pihak. CRM merupakan semua aspek yang berhubungan dengan
  lembaga dan peserta saat ini yang menekankan pada pendekatan holistik terhadap falsafah organisasi yang menekankan erat hubungan dengan pelanggannya. Dengan aplikasi CRM ini diharapkan 
  dapat meningkatkan kepuasan pelayanan dan menjalin hubungan yang kuat dengan pihak peserta. Selain itu, memudahkan akses informasi untuk para peserta sehingga lembaga 
  BP-TAPERA dapat meningkatkan layanan operasionalnya dan menjaga hubungan baik dengan para pesertanya. Aplikasi ini menyediakan layanan yang mudah digunakan untuk peserta melakukan pengaduan.</p>
<br>
</div>
<hr />
<div id="band" class="container text-center">
  <h3>TATA CARA PENGGUNAAN APLIKASI</h3>
  <br>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>1</strong></p><br>
      <p>lakukan aktivasi dan login</p>
      <a href="#demo" data-toggle="collapse">
        <img src="img/cara1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>2</strong></p><br>
      <p>Mengisi data peserta secara lengkap</p>
      <a href="#demo2" data-toggle="collapse">
        <img src="img/cara2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>3</strong></p><br>
      <p>Gunakan fitur layanan yang tersedia</p>
      <a href="#demo3" data-toggle="collapse">
        <img src="img/cara3.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      
    
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<hr/>
<div class="container text-center">
<h3>PELAYANAN KAMI</h3>
<br>
<br>
<div class="row">
      <div class="col-sm-4">
        <div class="thumbnail">
        <div class="satu">
          <img src="img/laporan.png" width="300" height="300">
          <p><strong>LAYANAN PENGADUAN</strong></p>
          <p>Sebuah layanan dalam bentuk form yang menerima sebuah laporan pengaduan setelah peserta berkomunikasi dengan customer service</p>
          <button class="btn" data-toggle="modal" data-target="#myModal"><a href="layananpengaduan.php">Lihat</a></button>
        </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
        <div class="2">
          <img src="img/contact.png" width="300" height="300">
          <p><strong>LAYANAN CHAT</strong></p>
          <p>Sebuah layanan chat melalui kontak yang telah tersedia</p>
          <button class="btn" data-toggle="modal" data-target="#myModal"><a href="layananchat.php">Lihat</a></button>
        </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/cs.jpg"  width="300" height="200">
          <p><strong>CALL CENTER & EMAIL</strong></p>
          <p>Sebuah layanan telepon dan kirim email untuk pengaduan peserta</p>
          <button class="btn" data-toggle="modal" data-target="#myModal"><a href="layanancallcenter.php">Lihat</a></button>
        </div>
      </div>
    </div>
  </div>
<footer class="container-fluid bg-4 text-center">
<p>Badan Pengelola Tabungan Perumahan Rakyat<br> <br> Wisma Iskandarsyah Blok B2, B3, dan C3 Jln. Iskandarsyah Raya Kav. 12-14
Kebayoran Baru, Jakarta Selatan 12160</p>
<br>
<hr>
<p>@Copyright 2021. Hak Cipta dilindungi Undang-Undang</p> 
</footer>


		<div class="col-md-4"></div>
		</div>
	</div>
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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