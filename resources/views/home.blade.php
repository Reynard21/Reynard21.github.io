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
<div class="image-container">
        <img src="https://binusianorg-my.sharepoint.com/personal/reynard_renato_binus_ac_id/Documents/foto%20main.png?csf=1&web=1&e=iBhNYH" alt="Image Description">
        <div class="centered-text">Selamat Datang
        <div class="additional-text">SPS Pinang Dahlia Griya</div>
        </div>
    </div>
</div>
</div>


<div id="controls-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<div class="gallery-container">
<div class="activity-title">
        <h2>Activity</h2>
        <br>
        <br>
    <div class="gallery-grid">

        <div class="gallery-item">
            <img src="https://binusianorg-my.sharepoint.com/personal/reynard_renato_binus_ac_id/Documents/Rectangle%204315.png?csf=1&web=1&e=fRp3Xn" alt="Description of Image 1" onclick="openModal(this);" style="width:100%;max-width:300px">
        </div>
        <div class="gallery-item">
            <img src="https://binusianorg-my.sharepoint.com/personal/reynard_renato_binus_ac_id/Documents/Rectangle%204316.png?csf=1&web=1&e=0tQVBp" alt="Description of Image 2" onclick="openModal(this);" style="width:100%;max-width:300px">
        </div>
        <div class="gallery-item">
            <img src="https://binusianorg-my.sharepoint.com/personal/reynard_renato_binus_ac_id/Documents/Rectangle%204317.png?csf=1&web=1&e=OMKbjV" alt="Description of Image 2" onclick="openModal(this);" style="width:100%;max-width:300px">
        </div>
        <div class="gallery-item">
            <img src="https://binusianorg-my.sharepoint.com/personal/reynard_renato_binus_ac_id/Documents/Rectangle%204318.png?csf=1&web=1&e=L2gkWb" alt="Description of Image 2" onclick="openModal(this);" style="width:100%;max-width:300px">
        </div>
        <div class="gallery-item">
            <img src="https://binusianorg-my.sharepoint.com/personal/reynard_renato_binus_ac_id/Documents/Rectangle%204319.png?csf=1&web=1&e=wOBVGi" alt="Description of Image 2" onclick="openModal(this);" style="width:100%;max-width:300px">
        </div>
        <div class="gallery-item">
            <img src="https://binusianorg-my.sharepoint.com/personal/reynard_renato_binus_ac_id/Documents/Rectangle%204320.png?csf=1&web=1&e=w2Sb3T" alt="Description of Image 2" onclick="openModal(this);" style="width:100%;max-width:300px">


        </div>

    </div>
    <div id="myModal" class="modal">
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<br>
<br>
</div>
<button class="selengkapnya-btn">Selengkapnya</button>
<script>
    function openModal(img) {
    var modal = document.getElementById('myModal');
    var modalImg = document.getElementById('img01');
    var captionText = document.getElementById('caption');
    modal.style.display = "block";
    modalImg.src = img.src;
    captionText.innerHTML = img.alt;
}

// JavaScript to close the modal
function closeModal() {
    var modal = document.getElementById('myModal');
    modal.style.display = "none";
}
window.onclick = function(event) {
        var modal = document.getElementById('myModal');
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
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
