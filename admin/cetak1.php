<?php session_start(); ?>
<?php if (isset($_SESSION['username'])) { ?>
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
    <title>Pekata - Data Master User</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="index.html">Halaman Admin</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="index.php">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Master">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMas" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">Data Master</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMas">
              <li>
                <a href="user.php">Master User</a>
              </li>
              <li>
                <a href="aktivasi.php">Master Aktivasi</a>
              </li>
              <li>
                <a href="peserta.php">Master Peserta</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Transaksi">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseTran" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">Transaksi</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseTran">
              <li>
                <a href="pengaduan.php">Pengaduan Peserta</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Laporan">
              <a class="nav-link" href="laporan.php">
              <i class="fa fa-fw fa-list-alt"></i>
              <span class="nav-link-text">Laporan</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-user"></i> <?php echo $_SESSION['username']; ?> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li class="divider"></li>
              <a data-toggle="modal" data-target="#exampleModal" style="cursor:pointer;"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
            </ul>
          </li>

          </li>
        </ul>
      </div>
    </nav>
    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Cetak Laporan</a>
          </li>
        </ol>

        <?php
$nik = $_GET['nik'];				
$query_mysql = mysql_query("SELECT * FROM pengaduan_peserta WHERE nik='$nik'")or die(mysql_error());
while($row = mysql_fetch_array($query_mysql)){
?>

<form class="well form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Form Pengaduan</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">NIK</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="nik" value="<?php echo $row['nik']; ?>" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Nomor Peserta</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="nomor_peserta" value="<?php echo $row['nomor_peserta']; ?>" class="form-control"  type="text">
</div>
</div>
</div>
<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label">E-Mail</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email" value="<?php echo $row['email']; ?>" class="form-control"  type="text">
</div>
</div>
</div>


<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label">Nomor Ponsel</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="nomor_ponsel"value="<?php echo $row['nomor_ponsel']; ?>" class="form-control" type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Pengaduan</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<input name="pengaduan" value="<?php echo $row['pengaduan']; ?>" class="form-control" type="textarea">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Jawaban Pengaduan</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<input name="jawaban_pengaduan" value="<?php echo $row['jawaban_pengaduan']; ?>" class="form-control" type="textarea">
<!-- <textarea style="height:200px; width:500px;"></textarea>

id="jawaban_pengaduan" name="jawaban_pengaduan" value=" -->
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group"> 
  <label class="col-md-4 control-label">Status Pengaduan</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="status_pengaduan" class="form-control selectpicker">
      <option value="Diterima/Selesai"<?php echo ($result['status_pengaduan'] == 'Diterima/Selesai') ?'selected' : '';?>>Diterima/Selesai</option>
      <option value="Menunggu Konfirmasi Lanjut"<?php echo ($result['status_pengaduan'] == 'Menunggu Konfirmasi Lanjut') ?'selected' : '';?>>Menunggu Konfirmasi Lanjut</option>
    </select>
  </div>
</div>
</div>
<div class="form-group" style="margin-left:40%; margin-top:5%;">
<button class="btn btn-primary" style="width:200px;"><i class="fa fa-fw fa-plus-circle"></i> Cetak</button>
</div>
</fieldset>
</form>
</div>
</div><!-- /.container -->
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
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">�</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Page level plugin JavaScript-->
      <script src="vendor/datatables/jquery.dataTables.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin.min.js"></script>
      <!-- Custom scripts for this page-->
      <script src="js/sb-admin-datatables.min.js"></script>
      <script>
		window.print();
	</script>
    </div>
  </body>

  </html>
<?php
} else {
  header("location:login.php");
}
?>
