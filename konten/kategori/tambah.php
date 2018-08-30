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
                <h3>Tambah Kategori</h3>
              </li>
            </ol>


            <form upload='uploadForm' action='aksi.php?act=input_kategori' method='post' enctype='multipart/form-data' class='form-horizontal style-form'>

              <div class="form-group">
                <h5 class="col-md-12">Nama</h5>
                <div class="col-sm-12">
                  <input type="text" name="nama" class="form-control" placeholder="Nama Kategori" required="">
                </div>
              </div>

          <div class='form-group'>
            <!-- <div class='col-sm-12'>
              <button type="submit" name="submit" value="submit" class="btn btn-success"><i class="fa fa-check">Tambahkan</i></button>
              <a href="home.php?page=read_buku"><button type="button" class="btn btn-success"><i class="fa fa-close"> Cancel</i></button></a>
            </div>-->

            <div class='col-sm-12'>
              <button type="submit" name="submit" value="submit" class="btn btn-primary"><i class="fa fa-check">Save</i></button>
              <a href="home.php?page=read_barang"><button type="button" style="color: #1645dd; height: 35px; padding-bottom: 6px;"><i class="fa fa-close"> Batal</i></button></a>
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