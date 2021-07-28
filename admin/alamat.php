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
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Master Peserta</li>
        </ol>
        <!-- Example DataTables Card-->
        <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link" href="peserta.php">DATA INDIVIDU</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="alamat.php">DATA ALAMAT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pekerjaan.php">DATA PEKERJAAN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="keluarga.php">DATA KELUARGA</a>
  </li>
</ul>
<br>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i> Data Master Peserta
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                        <th>NIK </th>
						<th>Alamat 1 </th>
						<th>Alamat 2 </th>
						<th>Alamat 3 </th>
						<th>Alamat 4 </th>
						<th>Kelurahan</th>
						<th>Kecamatan </th>
						<th>Kab_Kota </th>
						<th>Provinsi</th>
						<th>Kode Pos</th>
						<th class="text-center">Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                        <th>NIK </th>
						<th>Alamat 1 </th>
						<th>Alamat 2 </th>
						<th>Alamat 3 </th>
						<th>Alamat 4 </th>
						<th>Kelurahan</th>
						<th>Kecamatan </th>
						<th>Kab_Kota </th>
						<th>Provinsi</th>
						<th>Kode Pos</th>
						<th class="text-center">Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                  $query = "SELECT * FROM data_alamat";
                  $sql = mysql_query($query);
                  while ($row = mysql_fetch_array($sql)) {
                  ?>
                    <tr>
                    <td><?php echo $row['nik'];?></td>
						<td><?php echo $row['alamat1'];?></td>
						<td><?php echo $row['alamat2'];?></td>
						<td><?php echo $row['alamat3'];?></td>
						<td><?php echo $row['alamat4'];?></td>
						<td><?php echo $row['kelurahan'];?></td>
						<td><?php echo $row['kecamatan'];?></td>
						<td><?php echo $row['kab_kota'];?></td>
						<td><?php echo $row['provinsi'];?></td>
						<td><?php echo $row['kode_pos'];?></td>
                      <td align="center"><a href="#" onclick="javascript: if (confirm('Data dengan nik <?php echo $row['nik']; ?> akan dihapus?')){ window.location.href='hapusalamat.php?nik=<?php echo $row['nik']; ?>';}" type="button" class="btn btn-danger btn-sm" href=""><i class="fa fa-fw fa-trash"></i><br> Hapus</a></td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid-->
      <!-- /.content-wrapper-->
      <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>@Copyright 2021. Hak Cipta dilindungi Undang-Undang</a></small>
          </div>
        </div>
      </footer>
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
                <span aria-hidden="true">×</span>
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
    </div>
  </body>

  </html>
<?php
} else {
  header("location:login.php");
}
?>