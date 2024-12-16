<?php
// Koneksi ke database
$host = '127.0.0.1';
$user = 'root';
$password = ''; // Sesuaikan dengan password database Anda
$database = 'responsi';

$conn = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Proses penambahan data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $latitude = $_POST['Latitude'];
    $longitude = $_POST['Longitude'];
    $deskripsi = $_POST['Deskripsi'];

    $sql = "INSERT INTO wisata (Nama, Alamat, Latitude, Longitude, Deskripsi) VALUES ('$nama', '$alamat', '$latitude', '$longitude', '$deskripsi')";

    if ($conn->query($sql) === TRUE) {
        header('Location: tabel.php'); // Redirect ke halaman tabel setelah berhasil menambahkan data
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Wisata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Wisata Palembang</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="map.php">Peta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tabel.php">Tabel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kontak</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Form Tambah Data -->
<div class="container mt-5">
    <h2 class="mb-4">Tambah Data Wisata</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="text" class="form-control" id="Nama" name="Nama" required>
        </div>
        <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" class="form-control" id="Alamat" name="Alamat" required>
        </div>
        <div class="form-group">
            <label for="Latitude">Latitude</label>
            <input type="text" class="form-control" id="Latitude" name="Latitude" required>
        </div>
        <div class="form-group">
            <label for="Longitude">Longitude</label>
            <input type="text" class="form-control" id="Longitude" name="Longitude" required>
        </div>
        <div class="form-group">
            <label for="Deskripsi">Deskripsi</label>
            <textarea class="form-control" id="Deskripsi" name="Deskripsi" rows="3" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

<!-- Footer -->
<footer class="footer text-center mt-5 bg-light py-3">
    <p>&copy; 2024 WebGIS Wisata Palembang. Semua hak dilindungi.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
