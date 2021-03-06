<?php
	include "../koneksi.php";
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pekata - Halaman Login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
	  <div id="hasil"></div>
        <form action="" method="POST" onsubmit="ajax_login(); return false">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="user" id="username" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="pass" id="password" required>
          </div>
          <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-fw fa-sign-in"></i> Login</button>
        </form><br>
		<script type="text/javascript">
			function ajax_login(){
				var username = document.getElementById("username").value;
				var password = document.getElementById("password").value;
				$.ajax({
					url:"login-proses.php",
					type:"POST",
					data:{
						username:username,
						password:password
					},
					success:function(result){
						$("#hasil").html(result);
					}
				});
			}
		</script>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
