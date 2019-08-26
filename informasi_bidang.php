<?php 
  include 'koneksi.php';

  $sql = 'SELECT * FROM tb_informasi';
  $query = mysqli_query($koneksi, $sql);
 ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Informasi Bidang</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <div class="btn-group" role="group" aria-label="Basic example">
        <a href="index.php"><button type="button" class="btn btn-link">Beranda</button></a>
        <a href="struktur_organisasi.php"><button type="button" class="btn btn-link">Struktur Organisasi</button></a>
        <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Informasi Bidang
          </button>
        </div>
        <a href="kontak_kami.php"><button type="button" class="btn btn-link">Kontak Kami</button></a>
      </div>
      <div>

        <a class="btn btn-success" href="auth/login/index.html">Masuk</a>
        <a class="btn btn-warning" href="auth/registrasi/index.html">Gabung</a>
      </div>

    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
      </div>
    </div>
  </header>


  <!-- Testimonials -->

  <section class="testimonials text-center bg-light mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="container" >
            <div class="row">
              <div class="card-deck">
                <?php 
                  while ($result = mysqli_fetch_assoc($query)) {
                 ?>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?= $result['bidang'] ?></h5>
                    <p class="card-text"> <?= $result['konten'] ?> </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
                <?php } ?>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>