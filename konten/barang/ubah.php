<?php
include "koneksi.php";
$tampil=mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$_GET[id_barang]'");
$r=mysqli_fetch_array($tampil);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <section id='main-content'>
    <section class='wrapper'>
      <div class='row mt'>
        <div class='col-md-12'>
          <div class='content-panel'>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <h3>Update Barang</h3>
              </li>
            </ol>


            <form upload='uploadForm' action='aksi.php?act=ubah_barang' method='post' enctype='multipart/form-data' class='form-horizontal style-form'>

              <div class="form-group">
                <h5 class="col-md-12">Nama</h5>
                <div class="col-sm-12">
                  <input type="text" name="nama" class="form-control" placeholder="Nama Barang" required="" value="<?php echo $r['nama']; ?>">
                </div>
              </div>
                
                <?php
                $data = mysqli_query($koneksi, "SELECT * FROM kategori");
            
              echo "<div class='form-group'>
                <h5 class='col-sm-4 control-label'>Pilih Kategori</h5>
                <div class='col-md-4'>
                  <select class='selectpicker form-control' name='id_kategori' required='' style='width:100%'>
                    <option value='' selected=''>Pilih Kategori</option>";
                    while ($row = mysqli_fetch_array($data)) { echo "<option value='$row[id_kategori]' selected=''>$row[nama]</option>";
                  }
                  echo "</select>
                </div>
              </div>";
                ?>

              <ol class="breadcrumb">
                <div class='col-md-4 form-group' style="float: right;">
                  <h5 class='col-md-12'>Berat</h5>
                  <div class='input-group'>
                    <input class='form-control' required="" id='berat' name="berat"  placeholder="Berat Barang" value="<?php echo $r['berat']; ?>">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Gram</span>
                    </div>
                    <small>Berat barang di perlukan untuk estimasi ongkos kirim. Coba gunakan perhitungan volumetrik.</small>
                  </div>
                </div>

                <div class='col-md-3 form-group' style="float: right;">
                  <h5 class='col-md-12'>Ukuran</h5>
                  <div class='input-group'>
                    <input class='form-control' required="" id='ukuran' name="ukuran" value="<?php echo $r['ukuran']; ?>">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Cm</span>
                    </div>
                    <small>Ukuran barang adalah sangat penting. Coba input ukuran dengan sesuai.</small>
                  </div>
                </div>
                <div class='col-md-4 form-group' style="float: right;">
                  <h5 class='col-md-12'>Harga</h5>
                  <div class='col-sm-12'>
                    <input class='form-control' id='harga' placeholder="Harga Barang" name="harga" value="<?php echo $r['harga']; ?>">
                    <small>Harga barang harus kelipatan 100</small>
                  </div>
                </div>
              </ol>

              <div class='form-group'>
                <h5 class='col-md-12'>Deskripsi</h5>
                <div class='col-sm-12'>
                  <textarea class='form-control' required="" id='deskripsi' style="width: 100%; height: 200px;" rows="80" cols="40" name="deskripsi" placeholder="Deskripsi Barang"><?php echo $r['deskripsi']; ?></textarea>
                </div>
              </div>

              <div class='form-group col-md-6'>
                <div class='col-md-12'>
                  <?php echo "<img src='images/barang/$r[image]' width='50'>";?>
                </div>
              </div>

              <div class="form-group">
                <h5 class="col-md-12">Upload Foto Barang</h5>
                <div class="col-md-12">
                  <input name='image' type='file' class='inputFile' required="" /><br><h6 style="color: #CF000F"><font size="3"></font> Max. 200 KB </h6>
                </div>
              </div>


              <div class='form-group'>
                <div class='col-sm-12'>
                  <button type="submit" name="submit" value="submit" class="btn btn-primary"><i class="fa fa-check">Save</i></button>
                  <a href="home.php?page=read_barang"><button type="button" style="color: #1645dd; height: 35px; padding-bottom: 6px;"><i class="fa fa-close">Batal</i></button></a>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>
  </section>
</body>
</html>