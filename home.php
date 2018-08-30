<?php
session_start();
if (isset($_SESSION['namauser'])) 
{
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>Admin Hebat-Art</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<link href="css/sb-admin.css" rel="stylesheet">
<link rel="shortcut icon" href="images/bg.jpg" />
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <!-- <a href="home.php?page=dashboard"><img src="images/logo.png" style="position: relative; margin-top: 6px; width: 100px; height: 40px"; ></a> -->
    <b><a class="navbar-brand" style="margin-top: 4px; margin-left: 8px; color: #e6be34" href="home.php?dashboard">Hebat-art</a></b>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="padding-left: 8px; padding-top: 10px;">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="home.php?page=dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Pembeli">
          <a class="nav-link" href="home.php?page=read_pembeli">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Pembeli</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Kategori">
          <a class="nav-link" href="home.php?page=read_kategori">
            <i class="fa fa-fw fa-navicon"></i>
            <span class="nav-link-text">Kategori</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Kelola Barang">
          <a class="nav-link" href="home.php?page=read_barang">
            <i class="fa fa-fw fa-briefcase"></i>
            <span class="nav-link-text">Barang</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Keranjang">
          <a class="nav-link" href="home.php?page=read_keranjang">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span class="nav-link-text">Keranjang</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Transaksi">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-exchange"></i>
              <span class="nav-link-text">Data Transaksi</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                <a class="nav-link"  href="home.php?page=read_transaksi"> <i class="fa fa-fw fa-exchange"></i> Data Transaksi </a>
              </li>
              <li>
                <a class="nav-link" href="home.php?page=detail_transaksi"> <i class="fa fa-fw fa-exchange"></i> Detail Transaksi </a>
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
          <a href="aksi_login.php?act=logout" class="nav-link">
            <i class="fa fa-fw fa-sign-out"></i>Keluar
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">
      <?php include "konten/konten.php"; ?>
      </div>
    </div>
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Hebat-art-2018</small>
        </div>
      </div>
    </footer>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="js/sb-admin.min.js"></script>
<script src="js/sb-admin-datatables.min.js"></script>
<script src="js/sb-admin-charts.min.js"></script>
</body>

</html>
<?php
}
else
{
	print
	"<script>
	location.href = \"index.php\";
	</script>";
}
?>