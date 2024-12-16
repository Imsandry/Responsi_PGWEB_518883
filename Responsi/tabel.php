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

// Query untuk mendapatkan data dari tabel wisata
$sql = "SELECT * FROM wisata";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Wisata - WebGIS Wisata Palembang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
            <li class="nav-item active">
                <a class="nav-link" href="tabel.php">Tabel <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <!-- Tombol untuk memunculkan modal -->
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

<!-- Tabel Data Wisata -->
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Wisata</h2>
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
    </div>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['Nama'] . "</td>";
                    echo "<td>" . $row['Alamat'] . "</td>";
                    echo "<td>" . $row['Latitude'] . "</td>";
                    echo "<td>" . $row['Longitude'] . "</td>";
                    echo "<td>" . $row['Deskripsi'] . "</td>";
                    echo "<td>";
                    echo "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-info btn-sm mr-2'>Edit</a>";
                    echo "<a href='hapus.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7' class='text-center'>Tidak ada data.</td></tr>";
            }
            ?>
        </tbody>
    </table>
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
