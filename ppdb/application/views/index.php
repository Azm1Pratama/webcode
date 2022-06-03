<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@500&family=Roboto&family=Tiro+Devanagari+Sanskrit&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../user/style.css">

    <script src="https://kit.fontawesome.com/b252fd8c02.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var image1=new Image()
      image1.src="img/gambar1.jpg"
      var image2=new Image()
      image2.src="img/gambar2.jpg"
      var image3=new Image()
      image3.src="img/gambar3.jpg"
    </script>

    <style>
      @media (min-width: 992px){
      .container1 {
        margin-left: 140px;
      }
      }
      .top {
        background-color: #2F4F4F;
      }

      .navbar-brand {
        font-family: 'Overpass', sans-serif;
        font-size: 22px;
      }
      .judul {
        padding-top: 15px;
        color: #F8F8FF;
      }
      .nav-link:hover {
        background-color: #778899;
        border-radius: 15px;
      }
      @media (min-width: 992px){
      .nav-link:hover::after {
        margin-right: 50px;
        content: '';
        display: block;
        border-bottom: 3px solid red;
        width: 50%;
        margin: auto;
        padding-bottom: 5px;
        margin-bottom: -8px;
      }
      }
      .navteks {
        font-family: 'Tiro Devanagari Sanskrit', serif;
      }
      .navbar-brand, .navbar-link {
        color: white !important;
        text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.7);
      }
      .tombol {
        font-family: 'Tiro Devanagari Sanskrit', serif;
        color: #F8F8FF;
        text-transform: uppercase;
        border-radius: 15px;
        margin-left: 12px;
      }
      @media (min-width: 992px){
      .carousel-caption {
        position: absolute;
        left: 10%;
        width: 50%;
        top: 30%;
        margin-left: 15%;
        text-align: center;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.9);
        color: #f0f8ff;
      }
      }
      @media (min-width: 992px){
      .tombol1 {
        font-family: 'Tiro Devanagari Sanskrit', serif;
        color: #F8F8FF;
        text-transform: uppercase;
        border-radius: 15px;
        margin-top: 40px;
      }
      }
    </style>

    <title>PPDB ONLINE </title>
  </head>
  <body>
   <!-- bagian navbar -->
   <nav class="navbar navbar-expand-lg navbar-light top">
      <div class="container">
      <a class="navbar-brand logo" href="#"><img src="img/logoheader.png" width="70px"></a>
      <a class="navbar-brand judul" href="#" style="color: #F8F8FF; text-shadow: 5px;">PPDB ONLINE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link navteks" href="#" style="color: #F8F8FF;">Syarat</a>
          <a class="nav-item nav-link navteks" href="#" style="color: #F8F8FF;">Cara pendaftaran</a>
          <a class="nav-item nav-link navteks" href="#" style="color: #F8F8FF;">Testimoni</a>
          <a class="nav-item nav-link navteks" href="#" style="color: #F8F8FF;">Kontak</a>
          <a class="nav-item btn btn-primary tombol" href="<?= base_url(); ?>login" style="color: #F8F8FF;">Masuk siswa</a>
        </div>
      </div>
  </nav>
   <!-- end navbar -->
   <!-- bagian carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/ga1.png" alt="First slide">
          <div class="carousel-caption">
            <h1>SELAMAT DATANG DI PPDB ONLINE SMK PUTRA MANDIRI BANGSA</h1>
            <button class="btn btn-primary tombol1" href="">daftar siswa baru</button>
          </div>
        </div>
        <div class="carousel-item ">
           <div class="carousel-caption">
            <h1>SELAMAT DATANG DI PPDB ONLINE SMK PUTRA MANDIRI BANGSA</h1>
           <button class="btn btn-primary tombol1" href="">daftar siswa baru</button>
          </div>
          <img class="d-block w-100" src="img/ga2.png" alt="Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
   <!-- end carousel -->
   <!-- bagian jumbotron -->
   <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Fluid jumbotron</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
  </div>
   <!-- end jumbotron -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>