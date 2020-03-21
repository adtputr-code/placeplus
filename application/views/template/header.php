<?php 
  function rupiah($angka){
  $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
  return $hasil_rupiah;
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Placeplus</title>
  <link href="<?php echo site_url('asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet'); ?>">
  <link href="<?php echo site_url('asset/css/modern-business.css" rel="stylesheet'); ?>" rel="stylesheet">
  <script src="https://kit.fontawesome.com/be4d5ec7e7.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top" style="background-color: #336699">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo site_url('asset/gambar/logo/logo.png'); ?>" width="100px" height="auto"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item btn-group">
            <button class="btn btn-outline-light btn-sm " style="width: 100px;cursor: pointer;" data-toggle="dropdown" >
              Masuk
            </button>
            <div class="dropdown-menu dropdown-menu-md-right" style="min-width: 250px;">
            <div class="d-flex justify-content-center mt-2">
                <a href="home.php" class="btn btn-primary mx-2" style="background: #3b5998;"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="home.php" class="btn btn-primary mx-2" style="background: #c32f10;"><i class="fab fa-google"></i> Google</a>
            </div>
            <hr>
            <form action="#" method="POST" class="px-md-3">
                <div class="form-group">
                    <label for="loginEmail"><small>E-Mail/No HP</small></label>
                    <input type="email" name="email" id="loginEmail" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="loginPassword"><small>Password</small></label>
                    <input type="password" name="password" id="loginpassword" class="form-control">
                 </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" id="loginRemember" class="custom-control-input" checked="">
                        <label for="loginRemember" class="custom-control-label">Ingat Saya</label>
                    </div>
                </div>
                <a href="#" class="btn btn-primary btn-block btn-sm" style="background-color: #336699">Masuk</a>
            </form>
            </div>
          </li>
          &#160
          <li class="nav-item">
            <a href="#" class="btn btn-light btn-sm" style="width: 100px" href="about.html" data-toggle="modal" data-target="#exampleModalCenter">Daftar </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
