<!DOCTYPE html>
<html>
<head>
  <title>Update Anggota</title>
</head>
<body>
  <section id='main-content'>
    <section class='wrapper'>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <h3>Edit Kategori</h3>
        </li>
      </ol>
      <div class='row mt'>
        <div class='col-lg-12'>
          <div class='form-panel'>
            <?php
            include 'koneksi.php';
            $edit = mysqli_query($koneksi, "SELECT * FROM kategori where id ='$_GET[id]'");
            $row = mysqli_fetch_array($edit);

            echo "<form action='aksi.php?act=ubah_kategori' method='post' enctype='multipart/form-data' class='form-horizontal style-form'>
            <input class='form-control' id='focusedInput' type='hidden'  style='width: 100px' name='id' value='$row[id]'>

            <div class='form-group'>
            <h5 class='col-md-12'>Nama</h5>
            <div class='col-md-12'>
            <input class='form-control' type='text' name='nama' placeholder='Ubah Nama' style='width:100%; height:40px;' value='$row[nama]'>
            </div>
            </div>

            <button type='Submit' name='Submit' value='Submit' class=' col-md-2 btn btn-primary' style='margin-left: 15px;'> Simpan </button>

            <a href='home.php?page=read_kategori'><button type='button' class='col-md-2 btn btn-warning' style='margin-left: 15px;'>Cancel</button></a>
            </form>";
            ?>
            <br>
          </div>
        </div>
      </div>
    </section>          
  </section>
</body>
</html>