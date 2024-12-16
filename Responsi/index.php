<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - WebGIS Wisata Palembang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color:rgb(255, 255, 255);
        }
        .hero {
            background-image: url('images/hero-image.jpg'); /* Ganti dengan gambar yang sesuai */
            background-size: cover;
            background-position: center;
            margin-top:150px;
            margin-bottom:120px;
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.7);
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .content {
            margin-top: 30px;
        }
        .card {
            margin-bottom: 20px;
            transition: transform 0.2s; /* Efek transisi */
        }
        .card:hover {
            transform: scale(1.05); /* Efek hover */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
        .footer p {
            margin: 0;
        }
        h2 {
            margin-top: 40px;
            color: #007bff; /* Warna biru */
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Wisata Palembang</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="map.php">Peta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tabel.php">Tabel</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#kontakModal">Kontak</a>
        </li>
        </ul>
    </div>
</nav>

<!-- Modal untuk Kontak -->
<div class="modal fade" id="kontakModal" tabindex="-1" aria-labelledby="kontakModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="kontakModalLabel">
                    <i class="fas fa-address-book"></i> Kontak Pembuat
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="mb-4">Hubungi pembuat melalui platform berikut:</p>
                <div class="list-group">
                    <a href="https://facebook.com/Imsandry_Nur" target="_blank" class="list-group-item list-group-item-action">
                        <i class="fab fa-facebook-f text-primary"></i> Facebook
                    </a>
                    <a href="https://www.instagram.com/imsandrynur/" target="_blank" class="list-group-item list-group-item-action">
                        <i class="fab fa-instagram text-danger"></i> Instagram
                    </a>
                    <a href="mailto:imsandryn@gmail.com" class="list-group-item list-group-item-action">
                        <i class="fas fa-envelope text-secondary"></i> Email
                    </a>
                    <a href="https://linkedin.com/in/Imsandry_Nur_Wijayanto" target="_blank" class="list-group-item list-group-item-action">
                        <i class="fab fa-linkedin-in text-primary"></i> LinkedIn
                    </a>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fas fa-times"></i> Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Tambahkan Script Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Hero Section -->
<div class="hero">
    <h1>Selamat Datang di WebGIS Wisata Palembang!</h1>
</div>

<!-- Content Section -->
<div class="container content">
    <h2>Tentang Aplikasi</h2>
    <p>Aplikasi WebGIS ini dirancang untuk memberikan informasi tentang tempat-tempat wisata yang ada di kota Palembang. Dengan menggunakan teknologi GIS (Geographic Information System), pengguna dapat melihat lokasi wisata, deskripsi, dan gambar terkait dengan mudah.</p>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="images/jembatanampera.jpg" class="card-img-top" alt="Jembatan Ampera">
                <div class="card-body">
                    <h5 class="card-title">Jembatan Ampera</h5>
                    <p class="card-text">Jembatan ikonik yang menjadi simbol kota Palembang dan tempat yang wajib dikunjungi.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/ikanbelido.jpg" class="card-img-top" alt="Tugu Ikan Belido">
                <div class="card-body">
                    <h5 class="card-title">Tugu Ikan Belido</h5>
                    <p class="card-text">Ikan Belido dijadikan ikon lantaran merupakan ikan khas Palembang yang sering diolah menjadi beragam jenis makanan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/masjidchengho.jpg" class="card-img-top" alt="Masjid Cheng Ho">
                <div class="card-body">
                    <h5 class="card-title">Masjid Cheng Ho</h5>
                    <p class="card-text">Masjid Cheng Ho Palembang atau lebih dikenal dengan Masjid Sriwijaya adalah sebuah masjid bernuansa Muslim Tionghoa.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/museumbalaputradewa.png" class="card-img-top" alt="Museum Balaputra Dewa">
                <div class="card-body">
                    <h5 class="card-title">Museum Balaputra Dewa</h5>
                    <p class="card-text">Museum Balaputra Dewa menyimpan berbagai koleksi dari zaman pra-sejarah, zaman Kerajaan Sriwijaya, zaman Kesultanan Palembang, hingga ke zaman kolonialisme Belanda.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/monpera.jpg" class="card-img-top" alt="Monpera">
                <div class="card-body">
                    <h5 class="card-title">Monpera</h5>
                    <p class="card-text">Monumen Perjuangan Rakyat Sumatera Bagian Selatan atau disebut juga Monpera merupakan museum khusus yang dibangun di Jalan Merdeka.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/museumsultan.jpg" class="card-img-top" alt="Museum Sultan Mahmud Badaruddin II">
                <div class="card-body">
                    <h5 class="card-title">Museum Sultan Mahmud Badaruddin II</h5>
                    <p class="card-text">Museum yang menyimpan sejarah dan budaya Palembang dengan berbagai koleksi menarik.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/almunawar.jpg" class="card-img-top" alt="Kampung Arab Al-Munawar">
                <div class="card-body">
                    <h5 class="card-title">Kampung Arab Al-Munawar</h5>
                    <p class="card-text">Perkampungan Al-Munawar ini pertama kali didirikan sekitar 200 tahun yang lalu oleh Abdul Rahman Bin Muhammad Al-Munawar.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/pulaukemaro.png" class="card-img-top" alt="Pulau Kemaro">
                <div class="card-body">
                    <h5 class="card-title">Pulau Kemaro</h5>
                    <p class="card-text">Pulau Kemaro adalah tempat wisata di Palembang yang dihiasi dengan pesona alam, arsitektur, serta cerita, dan sejarah, sebagai unsur daya tariknya.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/kampungkapitan.jpg" class="card-img-top" alt="Kampung Kapitan">
                <div class="card-body">
                    <h5 class="card-title">Kampung Kapitan</h5>
                    <p class="card-text">Kampung yang terkenal dengan rumah-rumah adatnya dan suasana yang kental dengan budaya lokal.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/alquranalakbar.jpg" class="card-img-top" alt="Al-Qur'an Al-Akbar">
                <div class="card-body">
                    <h5 class="card-title">Al-Qur'an Al-Akbar</h5>
                    <p class="card-text">Terdapat 30 juz ayat suci Al-Quran yang berhasil dipahat/diukir ala khas Palembang dalam lembar kayu dan menghabiskan kurang lebih 40 meter kubik kayu tembesu.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/bentengkuto.jpg" class="card-img-top" alt="Benteng Kuto">
                <div class="card-body">
                    <h5 class="card-title">Benteng Kuto</h5>
                    <p class="card-text">Benteng Kuto Besak terletak di bagian tenggara dari Sungai Musi. Bentuk benteng adalah persegi panjang. Ukurannya adalah 288,75 meter × 183,75 meter.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/birdpark.jpg" class="card-img-top" alt="Palembang Bird Park">
                <div class="card-body">
                    <h5 class="card-title">Palembang Bird Park</h5>
                    <p class="card-text">Objek wisata ini memiliki koleksi burung yang cukup lengkap. Setidaknya, terdapat ratusan burung yang terdiri dari berbagai spesies.</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-5">Fitur Utama</h2>
    <ul>
        <li>Menampilkan lokasi wisata di peta interaktif.</li>
        <li>Memberikan informasi penting tentang setiap tempat wisata.</li>
        <li>Menampilkan gambar yang menarik dari lokasi wisata.</li>
    </ul>
</div>

<!-- Footer -->
<footer class="footer text-center mt-5">
    <p>&copy; 2023 WebGIS Wisata Palembang. Semua hak dilindungi.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>