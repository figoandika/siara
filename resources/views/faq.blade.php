<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service | Siara Solusi Survei</title>
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
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="/service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/faq">FaQ</a>
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


{{-- Konten utama --}}
<div style="background-image: url('img/service/sewajual.png'); background-size: cover; background-position: center; padding: 50px;">
  <div class="container mt-5 mb-5">
    <div class="row align-items-center">

      <!-- Kolom pertama -->
      <div class="col-md-6">
        <h1>Tentang Perusahaan</h1>
        <p class="mt-5 mb-5">PT. SIARA SOLUSI SURVEI merupakan salah satu perusahaan di Kabupaten Buleleng Bali dan Kabupaten Banyuwangi Jawa Timur yang bergerak di bidang pengadaan barang dan jasa dalam bidang pertanahan. Perusahaan kami menawarkankerja sama dengan perorangan, instansi pemerintahan, dan berbagai perusahaan berdasarkan bidang keahlian kami.</p>
        <a href="#" class="btn btn-primary">Image Button</a>
      </div>

      <!-- Kolom kedua -->
      <div class="col-md-6">
        <div class="row">
          <!-- Kolom 1 -->
          <div class="col-md-6">
            <!-- Form 1-4 -->
            <div class="form-group mt-3">
              <label for="form1">Form 1:</label>
              <input type="text" class="form-control" id="form1" placeholder="Subjek*">
            </div>
            <div class="form-group mt-3">
              <label for="form2">Form 2:</label>
              <input type="text" class="form-control" id="form2" placeholder="Nama depan*">
            </div>
            <div class="form-group mt-3">
              <label for="form3">Form 3:</label>
              <input type="text" class="form-control" id="form3" placeholder="Instansi*">
            </div>
            <div class="form-group mt-3">
              <label for="form4">Form 4:</label>
              <input type="text" class="form-control" id="form4" placeholder="Provinsi*">
            </div>
            <div class="form-group mt-3">
                <label for="form4">Form 4:</label>
                <input type="text" class="form-control" id="form4" placeholder="No telepon*">
              </div>
          </div>
    
          <!-- Kolom 2 -->
          <div class="col-md-6">
            <!-- Form 5-8 -->
            <div class="form-group mt-3">
              <label for="form5">Form 5:</label>
              <input type="text" class="form-control" id="form5" placeholder="Produk / Jasa*">
            </div>
            <div class="form-group mt-3">
              <label for="form6">Form 6:</label>
              <input type="text" class="form-control" id="form6" placeholder="Nama belakang*">
            </div>
            <div class="form-group mt-3">
              <label for="form7">Form 7:</label>
              <input type="text" class="form-control" id="form7" placeholder="Alamat email*">
            </div>
            <div class="form-group mt-3">
              <label for="form8">Form 8:</label>
              <input type="text" class="form-control" id="form8" placeholder="Kota*">
            </div>
          </div>
        </div>

        <!-- Radio Button "Saya Setuju" -->
        <div class="row">
          <div class="col">
            <div class="form-check">
              <input type="radio" class="form-check-input" id="setuju" name="setuju">
              <label class="form-check-label" for="setuju">Saya setuju dengan kebijakan dan ketentuan pengguna</label>
            </div>
          </div>
        </div>

        <!-- Pesan -->
        <div class="form-group mt-3">
          <label for="pesan">Pesan:</label>
          <textarea class="form-control" id="keterangan" rows="3" placeholder="Masukan pesan*"></textarea>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary mt-5">Kirim</button>
      </div>
    </div>
  </div>
</div>
{{-- Konten utama --}}


{{-- Footer --}}
<div class="container">
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2" src="img/logo.png" alt="" width="200" height="100">
          <small class="d-block mb-3 text-muted">© 2017–2021</small>
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