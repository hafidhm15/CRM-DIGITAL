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
$nomor_peserta = $_GET['nomor_peserta'];				
$query_mysql = mysql_query("SELECT * FROM data_individu WHERE nomor_peserta='$nomor_peserta'")or die(mysql_error());
while($row = mysql_fetch_array($query_mysql)){
?>

<form class="well form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Form Data Individu</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
							<label>Nomor Peserta <span class="text-danger">*</span></label>
							<input type="text" name="nomor_peserta" id="nomor_peserta" class="form-control" value="<?php echo $row['nomor_peserta']; ?>">
						</div>
						<div class="form-group">
							<label>Nama Peserta <span class="text-danger">*</span></label>
							<input type="text" name="nama_peserta" id="nama_peserta" class="form-control" value="<?php echo $row['nama_peserta']; ?>">
						</div>
                        <div class="form-group">
							<label>NIK<span class="text-danger">*</span></label>
							<input type="text" name="nik" id="nik" class="form-control"  value="<?php echo $row['nik']; ?>">
						</div>
                        <div class="form-group">
							<label>Tempat Lahir <span class="text-danger">*</span></label>
							<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="<?php echo $row['tempat_lahir']; ?>">
						</div>
                        <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label><br>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>">
                        </div>      
                        <br>
                        <div class="form-group">
                        <label>Agama:</label>
                        <select name="agama">
                            <option value="islam"<?php echo ($result['agama'] == 'Islam') ?'selected' : '';?>>Islam</option>
                            <option value="kristen"<?php echo ($result['agama'] == 'Kristen') ?'selected' : '';?>>Kristen</option>
                            <option value="hindu"<?php echo ($result['agama'] == 'Hindu') ?'selected' : '';?>>Hindu</option>
                            <option value="budha"<?php echo ($result['agama'] == 'Budha') ?'selected' : '';?>>Budha</option>
                        </select>
						</div>
                        <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select name="jenis_kelamin">
                            <option value="laki-laki"<?php echo ($result['jenis_kelamin'] == 'Laki-laki') ?'selected' : '';?>>Laki-laki</option>
                            <option value="Perempuan"<?php echo ($result['jenis_kelamin'] == 'Perempuan') ?'selected' : '';?>>Perempuan</option>
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
                            <option value="aktif"<?php echo ($result['status_peserta'] == 'Aktif') ?'selected' : '';?>>Aktif</option>
                            <option value="tidak aktif"<?php echo ($result['status_peserta'] == 'Tidak Aktif') ?'selected' : '';?>>Tidak Aktif</option>
                        </select>
						</div>

                        <div class="form-group">
							<label>Pekerjaan <span class="text-danger">*</span></label>
							<input type="text" name="pekerjaan" id="pekerjaan" class="form-control" value="<?php echo $row['pekerjaan']; ?>">
						</div>
                        <div class="form-group">
							<label>Kwarganegaraan<span class="text-danger">*</span></label>
							<input type="text" name="kwarganegaraan" id="kwarganegaraan" class="form-control" value="<?php echo $row['kwarganegaraan']; ?>">
						</div>
                        <div class="form-group">
							<label>Negara Kelahiran<span class="text-danger">*</span></label>
							<input type="text" name="negara_kelahiran" id="negara_kelahiran" class="form-control" value="<?php echo $row['negara_kelahiran']; ?>">
						</div>
                        <div class="form-group">
							<label>Pendidikan<span class="text-danger">*</span></label>
							<input type="text" name="pendidikan" id="pendidikan" class="form-control" value="<?php echo $row['pendidikan']; ?>">
						</div>
                        <div class="form-group">
							<label>NPWP<span class="text-danger">*</span></label>
							<input type="text" name="npwp" id="npwp" class="form-control" value="<?php echo $row['npwp']; ?>">
						</div>
                        <div class="form-group">
                        <label for="tanggal_npwp">Tanggal NPWP</label><br>
                        <input type="date" id="tanggal_npwp" name="tanggal_npwp" value="<?php echo $row['tanggal_npwp']; ?>">
                        </div>   
                        <div class="form-group">
							<label>Nomor Paspor<span class="text-danger">*</span></label>
							<input type="text" name="nomor_paspor" id="nomor_paspor" class="form-control" value="<?php echo $row['nomor_paspor']; ?>">
						</div>
    					<div class="form-group">
                        <label for="tgl_paspor">Tgl_Kadaluwarsa_Paspor</label><br>
                        <input type="date" id="tgl_paspor" name="tgl_paspor" value="<?php echo $row['tgl_paspor']; ?>">
                        </div>  
                        <div class="form-group">
							<label>Nomor Ponsel <span class="text-danger">*</span></label>
							<input type="text" name="nomor_ponsel" id="nomor_ponsel" class="form-control" value="<?php echo $row['nomor_ponsel']; ?>">
						</div>
                        <div class="form-group">
							<label>Email <span class="text-danger">*</span></label>
							<input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email']; ?>">
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


