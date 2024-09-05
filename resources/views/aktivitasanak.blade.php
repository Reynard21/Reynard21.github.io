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

                <img src="https://s6.imgcdn.dev/mDEt0.png" alt="mDEt0.png" class="h-30 w-25 mr-9">
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
    <br>
    <br>

    <div class="gallery-container">
        <div class="activities-title">
            <h2>Aktivitas Anak</h2>
            <br>
            <br>
            <br>


            <div class="gallery-grid">

                    @foreach ($data as $item)
                    <div class="gallery-item">
                    <div class="card" style="width: 18rem;" >
                        <img src="storage/{{ $item->image}}" class="card-img-top" alt="{{ $item->image}} " onclick="openModal(this)">
                        <div class="card-body">
                            <p class="card-text">{{ $item->description }}</p>
                        </div>
                    </div>
                    </div>

                    @endforeach



            </div>


            <img src="https://s6.imgcdn.dev/mYDEh.png" alt="mYDEh.png" border="0" style="position: absolute; left: 70px; top: 220px; width: 210px; height: auto;">

            <div id="myModal" class="modal" >
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
            <br>
            <br>
        </div>

        <script>
            function openModal(img) {
                var modal = document.getElementById('myModal');
                var modalImg = document.getElementById('img01');
                // var captionText = document.getElementById('caption');
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


        <!-- <img src="https://s6.imgcdn.dev/mDpOl.png" alt="mDpOl.png" border="0" style="position: relative; left: 70px; top: 930px; width: 190px; height: auto;"> -->

        <br>
        <br>
        <footer>
            <div class="footer-container">
                <div class="logo">
                    <img src="https://s6.imgcdn.dev/mDEt0.png" alt="mDEt0.png" style="position: relative; left: 100px; top: 10px;">
                </div>

                <div class="nav">
                    <div class="school">
                        <p><b>SPS DAHLIA PINANG GRIYA </b></p>
                    </div>
                    <a href="/" style="position: relative; left: -76px;">Home</a>
                    <a href="#" style="position: relative; left: -76px;">Gallery</a>
                    <a href="/aboutus" style="position: relative; left: -68px;">About Us</a>
                    <a href="/form" style="position: relative; left: -76px;">PPDB</a>
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
