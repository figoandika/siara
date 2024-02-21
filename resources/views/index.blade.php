<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Siara Solusi Survei</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: #F3F3F3;">
 
{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: rgba(255, 255, 255, 0.800);">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/faq">FaQ</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
{{-- Navbar --}}


{{-- Carousel --}}
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/home/1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p class="mb-5">Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/home/2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p class="mb-5">Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/home/3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p class="mb-5">Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
{{-- Carousel --}}


{{-- Profil Perusahaan --}}
<div class="container">
    <div class="row align-items-center">
      <!-- Kolom pertama -->
      <div class="col-md-8">
        <h1>Tentang Perusahaan</h1>
        <p class="mt-5">PT. SIARA SOLUSI SURVEI merupakan salah satu perusahaan di Kabupaten Buleleng Bali dan Kabupaten Banyuwangi Jawa Timur yang bergerak di bidang pengadaan barang dan jasa dalam bidang pertanahan. Perusahaan kami menawarkankerja sama dengan perorangan, instansi pemerintahan, dan berbagai perusahaan berdasarkan bidang keahlian kami.</p>
        <p class="mb-5">Perusahaan kami berpengalaman dalam Konsultasi Pertanahan, Perencanaan Pengelolaan Tanah, Pengukuran dan Pemetaan tanah, Penjualan dan Penyewaan Peralatan Pengukuran Tanah, dan berbagai pengalaman kerjasama yang telah kami kerjakan dapat menjadi salah satu pertimbangan memberikan kepercayaan kepada perusahaan kami.</p>
        <a href="#" class="btn btn-primary">Image Button</a>
      </div>
      <!-- Kolom kedua -->
      <div class="col-md-4">
        <img src="img/home/profil.png" class="img-fluid" alt="Image">
      </div>
    </div>
</div>
{{-- Profil Perusahaan --}}


{{-- Card Service --}}
<div style="background-image: url('img/home/bg_service.png'); background-size: cover; background-position: center; padding: 50px;">
    <div class="container text-center mt-5 mb-5">
        <h1>Layanan Kami</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
      
        <div class="row mt-5 justify-content-center">
            <!-- Kartu pertama -->
            <div class="col-md-4 mb-3">
              <div class="card" style="width: 18rem; background-color: rgba(255, 255, 255, 0.7);">
                <img src="img/home/konsultasi.png" class="card-img-top" alt="Card Image">
                <div class="card-body">
                  <h5 class="card-title">Konsultasi Pertanahan</h5>
                  <p class="card-text">Layanan konsultasi pertanahan unggul dengan pengalaman dan keahlian di bidang tersebut...</p>
                  <a href="#" class="btn btn-primary">Lihat</a>
                </div>
              </div>
            </div>
        
            <!-- Kartu kedua -->
            <div class="col-md-4 mb-3">
              <div class="card" style="width: 18rem; background-color: rgba(255, 255, 255, 0.7);">
                <img src="img/home/perencanaan.png" class="card-img-top" alt="Card Image">
                <div class="card-body">
                  <h5 class="card-title">Perencanaan & Pengelolaan</h5>
                  <p class="card-text">Layanan Pemetaan dan Pengukuran Tanah, memberikan solusi akurat untuk pemetaan dan pengukuran...</p>
                  <a href="#" class="btn btn-primary">Lihat</a>
                </div>
              </div>
            </div>
        
            <!-- Kartu ketiga -->
            <div class="col-md-4 mb-3">
              <div class="card" style="width: 18rem; background-color: rgba(255, 255, 255, 0.7);">
                <img src="img/home/pengukuran.png" class="card-img-top" alt="Card Image">
                <div class="card-body">
                  <h5 class="card-title">Pengukuran & Pemetaan</h5>
                  <p class="card-text">Menyediakan layanan dalam Pemetaan dan Pengukuran Tanah. Memberikan solusi akurat...</p>
                  <a href="#" class="btn btn-primary">Lihat</a>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
{{-- Card Service --}}


{{-- Footer --}}
<div class="container">
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="img/logo.png" alt="" width="200" height="100">
            <small class="d-block mb-3 text-muted">© 2024</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
</div>
{{-- Footer --}}


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>