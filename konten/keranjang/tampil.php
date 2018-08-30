
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<link href="css/sb-admin.css" rel="stylesheet">
</head>
<body>
  <!-- <section id='main-content'>
    <section class='wrapper'> -->
<div class="row mt">
	<div class="col-md-12">
		<div class="content-panel">
			<center><h2 style="font-style: sans-serif;"><b>Data Keranjang</b></h2></center>

      

      <!-- <div class="col-lg-4 col-12 bg-white tab-head" style="float: right;">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-check" aria-hidden="true"></i> Layak Pakai</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-close" aria-hidden="true"></i> Tidak Layak Pakai </a>
                    </li>
                  </ul>
                </div>
			<hr> -->

			<div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> Data Keranjang
              </div>
              <div class="card-body">
                <div class="table-responsive">

                  <table class="table table-bordered" id="maintable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th> Id Barang </th>
                        <th> Id Pembeli </th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include "koneksi.php";
                    function TanggalIndo($date){
                      $BulanIndo = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

                      $tahun  = substr($date, 0, 4);
                      $bulan  = substr($date, 5, 2);
                      $tgl  = substr($date, 8, 2);

                      $result = $tgl . ' ' . $BulanIndo[(int)$bulan-1] . ' ' . $tahun;
                      return($result);
                    }
                    $no = 0;
                      $data = mysqli_query($koneksi, "SELECT * FROM keranjang order by id_keranjang ASC");
                      while ($row = mysqli_fetch_array($data)) {
                      $no++;
                        echo "
                        <tr>
                        <td>$no</td>
                        <td>$row[id_keranjang]</td>
                        <td>$row[id_barang]</td>
                        <td>$row[id_pembeli]</td>
                        <td>
                        <a href = 'home.php?page=update_keranjang&id_keranjang=$row[id_keranjang]'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button></a>
                        <a href= 'home.php?page=detail_keranjang&id_keranjang=$row[id_keranjang]' <button class='btn btn-primary btn-xs'><i class='fa fa-info'></i></button> </a>
                        <a href = 'aksi.php?act=hapus_keranjang&id_keranjang=$row[id_keranjang]' onClick=\"return confirm ('apakah anda benar akan menghapus post Nomor $row[id_keranjang]?')\"><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></button></a>
                        </td>
                        </tr>
                        ";
                      }
                    
                    ?>
                    </tbody>
                  </table>
                  <br>
                        <form role ="form" method="post" action="isi/eskuldananggota/print_anggota.php">
                        <div class="col-md-4">
                          <button type="submit" class="btn btn-primary" style="width: 80px;">Print</button>
                        </div><br/>
                      </form>
                </div>
              </div>
            </div>
		</div>
	</div>
</div>
<!-- </section>
</section> -->
</body>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="js/sb-admin.min.js"></script>
<script src="js/sb-admin-datatables.min.js"></script>
<script src="js/sb-admin-charts.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#maintable').DataTable();
  });
</script>
</html>