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


.container .row .thumbnail {
  padding-bottom: 70px;
}

.container .pagination{
    padding-top: 30px;
    margin-left:320px;
    align-items:center;
    
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
<body style="background:rgb(37, 206, 93);">
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
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['nama_pelanggan']; ?> <span class="caret"></span></a>
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

        <ul class="pagination" style="margin-top:100px; margin-left:32%;">
    <li class="active"><a href="datapeserta.php">Data Individu <span class="sr-only">(current)</span></a></li>
    <li><a href="dataalamat.php">Data Alamat</a></li>
    <li><a href="datapekerjaan.php">Data Pekerjaan</a></li>
    <li><a href="datakeluarga.php">Data Keluarga</a></li>
  </ul>
		<div class="col-md-6" style="border: 0px solid black; background:white; margin-left:25%;">
	
		<?php
			$permintaankebutuhan= $_POST['permintaankebutuhan'];
			$penyebabkebutuhan = $_POST['penyebabkebutuhan'];
			$submit = $_POST['submit'];
			$query = "SELECT max(id_kebutuhan) as id_kebutuhan FROM identifikasi_kebutuhan_pelanggan";
			$sql = mysql_query($query);
			$row = mysql_fetch_array($sql);
			$idkebutuhan	= $row['id_kebutuhan'];
			$no = (int) substr($idkebutuhan, 3, 2);
			$no++;
			$idkebutuhan='IDP'.sprintf("%02s", $no);
			
		
			if(!empty($submit)){
				 $simpan = mysql_query("INSERT INTO identifikasi_kebutuhan_pelanggan VALUES('$idkebutuhan', '$r[id_pelanggan]', '$permintaankebutuhan', '$penyebabkebutuhan', now())");
				 if($simpan==true) {
					echo "<script>alert('Berhasil!');</script>";
				}
				else {
					echo "<script>alert('Gagal!');</script>";
				}
				
				echo "<meta http-equiv='refresh' content='0;URL='>";
			}
		?>
			<center>
				<div class="page-header">
			<h2>Data Individu</2>
				</div>
			</center><br>

			<form action="" method="POST">
				<!--has-success has-feedback-->
				<div class="form-group">
					<label>Nomor Peserta</label>
					<input type="text" name="nomorpeserta" id="nomorpeserta" class="form-control" value="<?php echo $r['email']; ?>">
					<!--
					<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
					<span id="inputSuccess5Status" class="sr-only">(success)</span>
					-->
				</div>

				<div class="form-group">
					<label>Nama Peserta</label>
					<input type="text" name="permintaankebutuhan" id="permintaan1" class="form-control" placeholder="Kebutuhan Pelanggan"  value="<?php echo $r['permintaan']; ?>">
				</div>
                
				<div class="form-group">
					<label>NIK</label>
					<input type="text" name="permintaankebutuhan" id="permintaan1" class="form-control" placeholder="Kebutuhan Pelanggan"  value="<?php echo $r['permintaan']; ?>">
				</div>
                
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input type="text" name="permintaankebutuhan" id="permintaan1" class="form-control" placeholder="Kebutuhan Pelanggan"  value="<?php echo $r['permintaan']; ?>">
				</div>

				<div class="form-group">
					<label>Agama</label>
                    <input type="text" name="permintaankebutuhan" id="permintaan1" class="form-control" placeholder="Kebutuhan Pelanggan"  value="<?php echo $r['permintaan']; ?>">
				</div>
                

                <div class="checkbox">
                <h5><b>Jenis Kelamin</b></h5>
                <label><input type="checkbox" value="">Laki-laki</label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="">Perempuan</label>
                </div>
                <br> 
                <div class="checkbox">
                <h5><b>Status Nikah</b></h5>
                <label><input type="checkbox" value="">Kawin</label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="">Belum Kawin</label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="">Cerai</label>
                </div>             
                <br>  
				<div class="form-group">
					<label>Pekerjaan</label>
                    <input type="text" name="permintaankebutuhan" id="permintaan1" class="form-control" placeholder="Kebutuhan Pelanggan"  value="<?php echo $r['permintaan']; ?>">
				</div>

                <div class="form-group">
					<label>Kwarganegaraan</label>
                    <input type="text" name="permintaankebutuhan" id="permintaan1" class="form-control" placeholder="Kebutuhan Pelanggan"  value="<?php echo $r['permintaan']; ?>">
				</div>

                <div class="form-group">
					<label>Negara Kelahiran</label>
                    <input type="text" name="permintaankebutuhan" id="permintaan1" class="form-control" placeholder="Kebutuhan Pelanggan"  value="<?php echo $r['permintaan']; ?>">
				</div>

                <div class="form-group">
					<label>Pendidikan</label>
                    <input type="text" name="permintaankebutuhan" id="permintaan1" class="form-control" placeholder="Kebutuhan Pelanggan"  value="<?php echo $r['permintaan']; ?>">
				</div>

                <div class="form-group">
					<label>NPWP</label>
                    <input type="text" name="permintaankebutuhan" id="permintaan1" class="form-control" placeholder="Kebutuhan Pelanggan"  value="<?php echo $r['permintaan']; ?>">
				</div>

                <div class="form-group">
                <label for="birthday">Tanggal NPWP</label><br>
                <input type="date" id="birthday" name="birthday">
                </div>

                <div class="form-group">
					<label>Nomor Paspor</label>
                    <input type="text" name="permintaankebutuhan" id="permintaan1" class="form-control" placeholder="Kebutuhan Pelanggan"  value="<?php echo $r['permintaan']; ?>">
				</div>

                <div class="form-group">
					<label>Nomor Paspor</label>
                    <input type="text" name="permintaankebutuhan" id="permintaan1" class="form-control" placeholder="Kebutuhan Pelanggan"  value="<?php echo $r['permintaan']; ?>">
				</div>

                <div class="form-group">
                <label for="birthday">Tgl_Kadaluarsa_Paspor</label><br>
                <input type="date" id="birthday" name="birthday">
                </div>

                <div class="form-group">
					<label>Nomor Ponsel</label>
                    <input type="text" name="permintaankebutuhan" id="permintaan1" class="form-control" placeholder="Kebutuhan Pelanggan"  value="<?php echo $r['permintaan']; ?>">
				</div>

                <div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" name="email" class="form-control" id="email" required>
					</div>
				<input type="submit" name="submit" value="submit" class="btn btn-primary">
					<a href="index.php" style="color:red">Kembali</a>
			</form><br>
			</div>
			<div class="col-md-3" style="border: 0px solid black;"></div>
		</div>
		<br>
	</div>
	<?php 
	}
	?>

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
