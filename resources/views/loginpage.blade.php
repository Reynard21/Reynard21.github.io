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
<div class="containerimage">
<img src="https://i.ibb.co.com/jWT1g0S/rectanglecolors.png" alt="rectanglecolors" border="0">
<div class="form-container">
        <h3>Login</h3>
        <br>
        <br>
        <div class="input-group">
            <input type="email" placeholder="Email" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Kata Sandi" required>
        </div>
        <div class="checkbox-group">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Ingat Saya</label>
        </div>
        <br>
<br>

        <button class="submit-button" type="submit">Masuk</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
