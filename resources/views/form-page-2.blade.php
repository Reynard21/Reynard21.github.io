<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite('resources/css/app.css')
    <title>SPS Pinang Dahlia Teratai</title>
</head>
<body>
<nav>
    <div class="container mx-auto px-8 py-4 flex items-center justify-between">
        <div class="flex items-center">

        <img src="https://s6.imgcdn.dev/mDEt0.png" alt="mDEt0.png"  class="h-30 w-25 mr-9">
            <span class="text-black font-semibold text-lg">SPS DAHLIA PINANG GRIYA</span>
        </div>

        <!-- Menu Items -->
        <ul class="hidden lg:flex space-x-9">
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <button type="button" onclick="window.location.href='/'">HOME</button>
  <button type="button" class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">GALLERY</button>
  <button type="button" onclick="window.location.href='/aboutus'">ABOUT US</a>
  <button type="button" onclick="window.location.href='/form-page-1'">PPDB</a>
  <button type="button" onclick="window.location.href='/admin'">LOGIN</a>
  <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="/aktivitasanak">Aktivitas Anak - Anak</a></li>
      <li><a class="dropdown-item" href="/kegiatanguru">Kegiatan Guru</a></li>
      <li><a class="dropdown-item" href="/puncaktema">Puncak Tema</a></li>
      <li><a class="dropdown-item" href="/kegiatanpembelajaran">Kegiatan Pembelajaran</a></li>
    </ul>
  </div>
</div>
</nav>
<br>
<br>
<div class="formt-container">
<form action="/form-page-2" method="POST" enctype="multipart/form-data">
    @csrf


        <h5>Data Orang Tua</h5>
        <labelt for="childName">Nama Ayah</labelt>
        <input type="text" id="childName" name="childName" placeholder="Masukkan nama ayah">
        <br>
        <br>

        <labelt for="work">Pekerjaan</labelt>
        <input type="text" id="work" name="work" placeholder="Masukkan Pekerjaan">
       <br>
       <br>
        <labelt for="phoneno">Nomor Telepon</labelt>
        <input type="text" id="phone" name="phone" placeholder="Masukkan No Telepon">
        <br>
        <br>
        <labelt for="address">Email</labelt>
        <input type="text" id="email" name="email" placeholder="Masukkan Alamat Email">
        <br>
        <br>
        <labelt for="photo">KTP*</labelt>
        <input type="file" id="photo" name="photo">
        <br>
        <br>
        <labelt for="childName">Nama Ibu</labelt>
        <input type="text" id="childName" name="childName" placeholder="Masukkan nama ibu">
        <br>
        <br>

        <labelt for="work">Pekerjaan</labelt>
        <input type="text" id="work" name="work" placeholder="Masukkan Pekerjaan">
       <br>
       <br>
        <labelt for="phoneno">Nomor Telepon</labelt>
        <input type="text" id="phone" name="phone" placeholder="Masukkan No Telepon">
        <br>
        <br>
        <labelt for="address">Email</labelt>
        <input type="text" id="email" name="email" placeholder="Masukkan Alamat Email">
        <br>
        <br>
        <labelt for="photo">KTP*</labelt>
        <input type="file" id="photo" name="photo">
        <br>
        <br>
        <labelt for="photo">Fotokopi Kartu Keluarga*</labelt>
        <input type="file" id="photo" name="photo">
        <br>
        <br>

        <button type="submit" class="buttont">Submit</button>
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        @endif
    </div>




    </form>
    </div>

    <br>
    <br>
    <br>
    <footer>
  <div class="footer-container">
    <div class="logo">
    <img src="https://s6.imgcdn.dev/mDEt0.png" alt="mDEt0.png">
    </div>

    <div class="nav">
        <div class="school">
    <p><b>SPS DAHLIA PINANG GRIYA </b></p>
    </div>
      <a href="/">Home</a>
      <a href="#">Gallery</a>
      <a href="/aboutus">About Us</a>
      <a href="/form-page-1">PPDB</a>
    </div>
    <div class="location">
      <h3><b>LOCATION</b></h3>
      <p>Jl. Anggrek Cendrawasih Rt.05/06</p>
      <p>Pinang Griya Permai Kec. Pinang Kota</p>
      <p>Tangerang, PINANG, PINANG</p>
      <p>(PENANG), TANGERANG, BANTEN 340</p>
    </div>
    <div class="contact">
      <h3><b>CONTACT</b></h3>
      <p><i class="fa fa-whatsapp" style="font-size:24px"></i>: 081212876049</p>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
