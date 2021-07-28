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
	<title>Aplikasi DIGITAL CRM</title>

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
</head>

<body style="background:rgb(37, 206, 93);">
	<div class="container">
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<?php

			$nik = $_POST['nik'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$submit = $_POST['submit'];




			if (!empty($submit)) {
				$simpan = mysql_query("INSERT INTO data_aktivasi VALUES( '$nik', '$username', MD5('$password'), '$email')");
				if ($simpan == true) {
					echo "<script>alert('Berhasil!');</script>";
				} else {
					echo "<script>alert('Gagal!');</script>";
				}

				echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
			}
			?>
			<div class="col-md-6" style="border: 0px solid black; background:white;">
				<center>
					<br><img src="img/logo6.jpg" width="60%" class="img-responsive" alt="Responsive image">
					<div class="page-header">
						<h2>
							<b style="margin-bottom:20px">Aktivasi Akun</b>
							<small><br>Badan Pengelola Tabungan Rakyat</small>
						</h2>
					</div>
				</center><br>
				<form action="" method="POST">
					<!--has-success has-feedback-->
					<div class="form-group">
						<label>NIK</label>
						<input type="text" name="nik" id="nik" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" id="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" id="password" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" name="email" class="form-control" id="email" required>
					</div>
					<input type="submit" name="submit" value="Submit" class="btn btn-success">
					<a href="index.php" style="color:red">Kembali</a>
					<br>
				</form><br>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>