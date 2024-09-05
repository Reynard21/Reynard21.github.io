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
    <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        } */
        /* .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: bold;
            margin: 10px 0 5px;
            color: #555;
        } */
        input[type="text"], textarea, input[type="file"], input[type="radio"] {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        textarea {
            resize: vertical;
            height: 100px;
        }
        .radio-group {
            margin-bottom: 15px;
        }
        .radio-group label {
            display: inline-block;
            margin-right: 15px;
        }
        /* button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        } */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .alert.success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .alert.error {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>
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
  <button type="button" onclick="window.location.href='/form'">PPDB</a>
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
        <h5>Pendaftaran Calon Murid Baru</h5>

        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert error">{{ session('error') }}</div>
        @endif

        <form action="{{ route('form.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <labelt for="nama_anak">Nama Anak:</labelt>
            <input type="text" id="nama_anak" name="nama_anak" required>

            <labelt>Jenis Kelamin:</labelt>
            <div class="radio-group">
                <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required>
                <labelt for="laki_laki">Laki-laki</labelt>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                <labelt for="perempuan">Perempuan</labelt>
            </div>

            <labelt for="tempat_lahir">Tempat Lahir:</labelt>
            <input type="text" id="tempat_lahir" name="tempat_lahir" required>

            <labelt for="tanggal_lahir">Tanggal Lahir:</labelt>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="d/m/y" required>

            <labelt for="alamat">Alamat:</labelt>
            <input type="text" id="alamat" name="alamat" required></input>
<br>
            <labelt for="foto">Foto:</labelt>
            <input type="file" id="foto" name="foto">

            <br>
            <labelt for="akte_lahir">Akte Lahir:</labelt>
            <input type="file" id="akte_lahir" name="akte_lahir">

            <br>

            <labelt for="imunisasi_lengkap">Imunisasi Lengkap:</labelt>
            <input type="file" id="imunisasi_lengkap" name="imunisasi_lengkap">
<br>
            <labelt for="nama_ayah">Nama Ayah:</labelt>
            <input type="text" id="nama_ayah" name="nama_ayah" required>

            <br>

            <labelt for="kerja_ayah">Pekerjaan Ayah:</labelt>
            <input type="text" id="kerja_ayah" name="kerja_ayah" required>


            <br>

            <labelt for="hp_ayah">No Hp Ayah:</labelt>
            <input type="text" id="hp_ayah" name="hp_ayah" required>

            <br>

            <labelt for="email_ayah">Email Ayah:</labelt>
            <input type="text" id="email_ayah" name="email_ayah" required>

            <br>

            <labelt for="nama_ibu">Nama Ibu:</labelt>
            <input type="text" id="nama_ibu" name="nama_ibu" required>

            <br>

            <labelt for="kerja_ibu">Pekerjaan Ibu:</labelt>
            <input type="text" id="kerja_ibu" name="kerja_ibu" required>

            <br>
            <labelt for="hp_ibu">No Hp Ibu:</labelt>
            <input type="text" id="hp_ibu" name="hp_ibu" required>

            <br>

            <labelt for="email_ibu">Email Ibu:</labelt>
            <input type="text" id="email_ibu" name="email_ibu" required>

            <br>
            <labelt for="ktp_ayah">KTP Ayah:</labelt>
            <input type="file" id="ktp_ayah" name="ktp_ayah" required>


            <br>
            <labelt for="ktp_ibu">KTP Ibu:</labelt>
            <input type="file" id="ktp_ibu" name="ktp_ibu" required>

            <br>
            <labelt for="foto_kopi_kartu_keluarga">Fotokopi Kartu Keluarga:</labelt>
            <input type="file" id="foto_kopi_kartu_keluarga" name="foto_kopi_kartu_keluarga" required>


            <br>
            <button type="submit" class="buttont">Submit</button>
        </form>
    </div>
    </br>
    </br>
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
      <a href="/form">PPDB</a>
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
