
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
			<center><h2 style="font-style: sans-serif;"><b>Data Kategori</b></h2></center>

      <a href='home.php?page=insert_kategori' class="btn btn-primary btn-sm w-20 mt-2 mb-3" style='font-size:14px; margin-top: 1px'><i class="fa fa-plus" aria-hidden="true"></i> Tambah Kategori</a>

			<div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> Kategori
              </div>
              <div class="card-body">
                <div class="table-responsive">

                  <table class="table table-bordered" id="maintable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th> No </th>
                        <th> Nama </th>
                        <th> Opsi </th>
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
                      $data = mysqli_query($koneksi, "SELECT * FROM kategori order by id ASC");
                      while ($row = mysqli_fetch_array($data)) {
                      $no++;
                        echo "
                        <tr>
                        <td>$no</td>
                        <td>$row[nama]</td>
                        <td>
                        <a href = 'home.php?page=update_kategori&id=$row[id]'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button></a>
                        <a href = 'aksi.php?act=hapus_kategori&id=$row[id]' onClick=\"return confirm ('apakah anda benar akan menghapus post Nomor $row[id]?')\"><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></button></a>
                        </td>
                        </tr>
                        ";
                      }
                    
                    ?>
                    </tbody>
                  </table>
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