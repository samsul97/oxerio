<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hebat-Art Digital Printing</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/logo.png" style="width: 100px; height: 100px;" />
  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container" style="height: 50px;">
      <a class="navbar-brand" href="#"><img src="img/logo.png" style="width: 100px; height: 100px;"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Produk
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">Fashion Baju & Kaos</a>
              <a class="dropdown-item" href="portfolio-2-col.html">Cetak Lembaran</a>
              <a class="dropdown-item" href="portfolio-3-col.html">Design</a>
              <a class="dropdown-item" href="portfolio-4-col.html">Large Format</a>
              <a class="dropdown-item" href="portfolio-item.html">Kado & Aksesoris</a>
              <a class="dropdown-item" href="portfolio-item.html">Sticker</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Cara Pemesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">About</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Other Pages
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="full-width.html">Full Width Page</a>
              <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
              <a class="dropdown-item" href="pricing.html">Pricing Table</a>
            </div>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <!-- <img src="img/logo.png" style="width: 100px; height: 100px;"> -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/slide1.png')">
          <div class="carousel-caption d-none d-md-block" style="color: #D35400;">
            <b><h3>Hemat Bersahabat</h3>
              <p>Mau print murah tapi berkualitas? Ya disini aja.</p></b>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/slide2.png')">
            <div class="carousel-caption d-none d-md-block" style="color: #D35400;">
              <b><h3>Hemat Bersahabat</h3>
                <p>Mau desain unik dan menarik? Ya disini aja.</p></b>
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('img/kaos.png')">
              <div class="carousel-caption d-none d-md-block" style="color: #D35400;">
                <b><h3>Hemat Bersahabat</h3>
                  <p>Mau  pesan baju/kaos? Ya disini aja.</p><b>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </header>

          <!-- Page Content -->


          <!-- Portfolio Section -->
          <br>
          <br>
          <!-- <h2>Produk</h2> -->
          <section id="sectionone">
            <div class="container">

              <center><h3>Kategori'Shop</h3><center>
                <br>
                <div class="row tx-center">
                  <?php
                  $data = mysqli_query($koneksi, "SELECT * FROM barang order by id_barang ASC" );
                  while ($row = mysqli_fetch_array($data)) {
                    echo "<div class='col-lg-3 col-sm-6 mb-4'>";
                    echo "";
                    echo "<div class='card' id=''>";
                    echo "<tr>";
                    echo "<td colspan='3'><b style='font-size:18px'>$row[nama]</b></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><img src='../images/barang/$row[image]' width=225px' height=200px;> $row[id_kategori] <br> Rp. $row[harga]</td>";
                    echo "</tr>";
                    echo "</div>";
                    echo "</div>";
                    echo "";
                  }
                  ?>
                </div>
                
                <!-- <?php
                include "../koneksi.php";

                $data = mysqli_query($koneksi, "SELECT * FROM barang order by id_barang ASC");
                while ($row = mysqli_fetch_array($data)) {
                  ?>
                  <div class="row tx-center">

                    <div class="col-lg-3 col-sm-6 mb-4" >
                      <div class="card" id="">
                        <?php echo "<img src = '../images/barang/$row[image]' width='255px'>"; ?>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4" >
                      <div class="card" id="">
                        <?php echo "<img src = '../images/barang/$row[image]' width='255px'>"; ?>
                      </div>
                    </div>


                    <div class="col-lg-3 col-sm-6 mb-4" >
                      <div class="card" id="">
                        <?php echo "<img src = '../images/barang/$row[image]' width='255px'>"; ?>
                      </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-4" >
                      <div class="card" id="">
                        <?php echo "<img src = '../images/barang/$row[image]' width='255px'>"; ?>
                      </div>
                    </div>
                    <?php
                  }
                  ?> -->
                </div>
              </div>
            </div>

            <section>
              <div class="container-fluid">
                <div class="TextTitleTwo">

                  <!-- Portfolio Section -->
                  <h2>What'sHot</h2>

                </div>
                <div class="row">
                  <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="img/wh2.png" alt=""></a>
                      <div class="card-body">
                        <div class="card-title">
                          <h3>SPORTY STREET WANITA</h3>
                        </div>
                        <a href="#">
                          <button  type="button" class="btn btn-outline-dark">Dark</button>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="img/wh2.png" alt=""></a>
                      <div class="card-body">
                        <div class="card-title">
                          <h3>SPORTY STREET WANITA</h3>
                        </div>
                        <a href="#">
                          <button  type="button" class="btn btn-outline-dark">Dark</button>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="img/wh2.png" alt=""></a>
                      <div class="card-body">
                        <div class="card-title">
                          <h3>SPORTY STREET WANITA</h3>
                        </div>
                        <a href="#">
                          <button  type="button" class="btn btn-outline-dark">Dark</button>
                        </a>
                      </div>
                    </div>
                  </div>


                </div>
                <!-- /.row -->

              </div>
            </section>








          </section>
          <div class="row" style="margin-left: 40px; margin-right: 40px; padding: 7px;">
            <div class="col-lg-3 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project One</a>
                  </h4>
                  <p class="card-text">fafasfasfafaf</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Two</a>
                  </h4>
                  <p class="card-text">fafasfasfafaf</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Three</a>
                  </h4>
                  <p class="card-text"><center><img src="../images/bg.jpg" style="width: 50px;"></center>fafasfasfafaf</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Four</a>
                  </h4>
                  <p class="card-text"><center><img src="../images/bg.jpg" style="width: 50px;"></center>fafasfasfafaf</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Five</a>
                  </h4>
                  <p class="card-text"><center><img src="../images/bg.jpg" style="width: 50px;"></center>fafafafafafaa</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Six</a>
                  </h4>
                  <p class="card-text">fafafafafafaa</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Six</a>
                  </h4>
                  <p class="card-text">fafafafafafaa</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Six</a>
                  </h4>
                  <p class="card-text">fafafafafafaa</p>
                </div>
              </div>
            </div>
          </div>



          <div class="col-md-12 col-xs-12 col-sm-12" style="background-color: #D2D7D3;">

            <div class="row" style="padding: 5px; margin-left: 150px; margin-top: 20px; padding-top: 40px; padding-bottom: 40px;">
              <div class="col-md-4">
                <div class="col-lg-4 col-sm-6 col-xs-6">
                  <div style="color: green;">
                    <img src="img/service.png" style="height: 70px; width: 70px;">
                  </div>
                  <br>
                  <small> Kami melayani servis dengan setulus hati</small>
                </div>
              </div>
              <div class="col-md-4">
                <div class="col-lg-4 col-sm-6 col-xs-6">
                  <div style="color: green;">
                    <img src="img/service.png" style="height: 70px; width: 70px;">
                  </div>
                  <br>
                  <small> Kualitas terjamin</small>
                </div>
              </div>
              <div class="col-md-4">
                <div class="col-lg-4 col-sm-6 col-xs-6">
                  <div style="color: green;">
                    <img src="img/service.png" style="height: 70px; width: 70px;">
                  </div>
                  <br>
                  <small> Antar barang tidak perlu repot-repot</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- </div> -->

      <!-- /.row -->

      <!-- Features Section -->
      <!-- <br>
      <div class="row" style="margin-top: 20px; margin-left: 20px;">
        <div class="col-lg-6">
          <h2>Modern Business Features</h2>
          <p>The Modern Business template by Start Bootstrap includes:</p>
          <ul>
            <li>
              <strong>Bootstrap v4</strong>
            </li>
            <li>jQuery</li>
            <li>Font Awesome</li>
            <li>Working contact form with validation</li>
            <li>Unstyled page elements for easy customization</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
        </div>
      </div> -->
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <!-- <div class="row mb-4">
        <div class="col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
        </div>
      </div> -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-3 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Hebat-Art 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  </html>
