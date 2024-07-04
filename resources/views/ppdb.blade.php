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
        <img src="https://i.ibb.co.com/gzy8ZK1/logo-dahlia-JPG-removebg-preview.png" alt="logo-dahlia-JPG-removebg-preview"  class="h-30 w-25 mr-9">
            <span class="text-black font-semibold text-lg">SPS DAHLIA PINANG GRIYA</span>
        </div>

        <!-- Menu Items -->
        <ul class="hidden lg:flex space-x-9">
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <button type="button" onclick="window.location.href='/'">HOME</button>
  <button type="button" class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">GALLERY</button>
  <button type="button" onclick="window.location.href='/aboutus'">ABOUT US</a>
  <button type="button" onclick="window.location.href='/ppdb'">PPDB</a>
  <button type="button" onclick="window.location.href='/login'">LOGIN</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="/aktivitasanak">Aktivitas Anak - Anak</a></li>
      <li><a class="dropdown-item" href="/kegiatanguru">Kegiatan Guru</a></li>
      <li><a class="dropdown-item" href="/puncaktema">Puncak Tema</a></li>
      <li><a class="dropdown-item" href="/kegiatanpembelajaran">Kegiatan Pembelajaran</a></li>
    </ul>
  </div>
</div>
</nav>
<div class="formt-container">
        <h5>Pendaftaran Siswa</h5>
        <labelt for="childName">Nama Anak</labelt>
        <input type="text" id="childName" name="childName" placeholder="Masukkan nama anak">
        <br>
<br>
        <labelt for="gender">Jenis Kelamin</labelt>
        <div class="radio-group">
            <input type="radio" id="male" name="gender" value="Laki-Laki">
            <labelt for="male">Laki-Laki</labelt>
            <input type="radio" id="female" name="gender" value="Perempuan">
            <labelt for="female">Perempuan</labelt>
        </div>
        <br>
        <labelt for="placeOfBirth">Tempat Lahir</labelt>
        <input type="text" id="placeOfBirth" name="placeOfBirth" placeholder="Masukkan tempat lahir">
       <br>
       <br>
        <labelt for="dateOfBirth">Tanggal Lahir</labelt>
        <input type="date" id="dateOfBirth" name="dateOfBirth">
        <br>
        <br>
        <labelt for="address">Alamat</labelt>
        <input type="text" id="address" name="address" placeholder="Masukkan alamat">
        <labelt for="photo">Foto (3x4)*</labelt>
        <input type="file" id="photo" name="photo">
        <br>
        <br>
        <labelt for="photo">Akte Lahir*</labelt>
        <input type="file" id="photo" name="photo">
        <br>
        <br>
        <labelt for="photo">Imunisasi Lengkap*</labelt>
        <input type="file" id="photo" name="photo">
        <br>
        <br>
        <button class="buttont" onclick="window.location.href='/ppdbnext'">Next </button>
    </div>
    <br>
    <br>
    <br>
    <footer>
  <div class="footer-container">
    <div class="logo">
      <img src="https://i.ibb.co.com/gzy8ZK1/logo-dahlia-JPG-removebg-preview.png" alt="logo-dahlia-JPG-removebg-preview">
    </div>

    <div class="nav">
        <div class="school">
    <p>SPS DAHLIA PINANG GRIYA </p>
    </div>
      <a href="/">Home</a>
      <a href="#">Gallery</a>
      <a href="/aboutus">About Us</a>
      <a href="/ppdb">PPDB</a>
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
