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

p{
    font-size:20px;
    margin-left:20px;
}

.container .row .thumbnail {
  padding-bottom: 70px;
}

.container .pagination{
    padding-top: 30px;
    margin-left:320px;
    align-items:center;
    
}



footer{
    padding-top: 70px;
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
		<li><a href="index.php">HOME</a></li>
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

    <body style="background:white;">

    <ul class="pagination" style="margin-top:100px; margin-left:42%;">
    <li class="active"><a href="Profile.php">Profil <span class="sr-only">(current)</span></a></li>
    <li><a href="visimisi.php">Visi & Misi</a></li>
    </ul>
                        <h2 style="margin-top:1%; margin-left:20px;">PROFIL BP-TAPERA </h2>
                        <br>
                            <img src="img/logo3.png" width="35%" class="img-responsive" alt="Responsive image" style="margin-left:20px;">
                        <br>
                        <br>
                            <p style="text-align:justify; margin-right:12%;">Undang-Undang Nomor 4 Tahun 2016 Tentang Tabungan Perumahan Rakyat merumuskan pengertian Badan Pengelola Tabungan
                              Perumahan Rakyat dalam Pasal 1 angka 12. Badan Pengelola Tapera yang selanjutnya disebut BP Tapera adalah badan hukum
                              yang dibentuk untuk mengelola Tapera.Badan Pengelola Tabungan Perumahan Rakyat (BP-TAPERA) didirikan berdasarkan Undang-Undang 
                              Nomor 4 Tahun 2016 tentang Tabungan Perumahan Rakyat.TAPERA bertujuan untuk menghimpun dan menyediakan dana murah jangka panjang 
                              yang berkelanjutan untuk pembiayaan perumahan dalam rangka memenuhi kebutuhan rumah yang layak dan terjangkau bagi peserta melalui 
                              keterpaduan penyusunan rencana, program, dan pelaksanaan kegiatan secara keseluruhan.</p> 
      <br>
			<br>
      <h2 style="margin-top:1%; margin-left:20px;">TUJUAN BP-TAPERA </h2>
      <p style="text-align:justify; margin-right:12%;">Tapera bertujuan untuk menghimpun dan menyediakan dana murah jangka panjang yang berkelanjutan untuk pembiayaan perumahan dalam rangka
           memenuhi kebutuhan rumah yang layak dan terjangkau bagi Peserta.
      
      <br>
			<br>
      <h2 style="margin-top:1%; margin-left:20px;">DASAR HUKUM </h2>
      <p style="text-align:justify; margin-right:12%;">UUD 1945 PASAL 28 H AYAT (1) Setiap orang berhak hidup sejahtera lahir dan batin, bertempat tinggal, dan mendapatkan lingkungan hidup yang baik dan sehat serta berhak memperoleh pelayanan kesehatan.</p>
     <img src="img/rumah.jpg" width="35%" class="img-responsive" alt="Responsive image" style="margin-left:20px;">     
     <footer class="container-fluid bg-4 text-center">
<br>

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