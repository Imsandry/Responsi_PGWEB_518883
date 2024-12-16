<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>WebGIS Wisata Palembang</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
        .popup-content {
            text-align: center;
        }
        .popup-content img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Wisata Palembang</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="map.php">Peta <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tabel.php">Tabel</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#kontakModal">Kontak</a>
        </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <h1>Wisata di Kota Palembang</h1>
    <div id="map"></div>
</div>

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
                    <a href="https://facebook.com/username" target="_blank" class="list-group-item list-group-item-action">
                        <i class="fab fa-facebook-f text-primary"></i> Facebook
                    </a>
                    <a href="https://www.instagram.com/imsandrynur/" target="_blank" class="list-group-item list-group-item-action">
                        <i class="fab fa-instagram text-danger"></i> Instagram
                    </a>
                    <a href="mailto:imsandryn@gmail.com" class="list-group-item list-group-item-action">
                        <i class="fas fa-envelope text-secondary"></i> Email
                    </a>
                    <a href="https://linkedin.com/in/username" target="_blank" class="list-group-item list-group-item-action">
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

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    // Inisialisasi peta
    var map = L.map('map').setView([-2.9977, 104.7751], 12); // Koordinat Palembang

    // Tambahkan layer peta
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
    }).addTo(map);

    // Ambil data dari database melalui PHP
    $.getJSON('get_wisata.php', function(data) {
        data.forEach(function(wisata) {
            var marker = L.marker([wisata.Latitude, wisata.Longitude])
                .addTo(map)
                .bindPopup(`
                    <div class="popup-content">
                        <h3>${wisata.Nama}</h3>
                        <p>${wisata.Deskripsi}</p>
                        <img src="${wisata.Gambar}" alt="${wisata.Nama}">
                    </div>
                `);
        });
    });
</script>

</body>
</html>
