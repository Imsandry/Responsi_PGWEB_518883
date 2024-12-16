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

// Periksa apakah parameter ID ada
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Aksi Edit Data
    if (isset($_POST['edit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $deskripsi = $_POST['deskripsi'];

        // Query untuk mengupdate data berdasarkan ID
        $update_sql = "UPDATE wisata SET Nama = ?, Alamat = ?, Latitude = ?, Longitude = ?, Deskripsi = ? WHERE id = ?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("ssddsi", $nama, $alamat, $latitude, $longitude, $deskripsi, $id);

        if ($stmt->execute()) {
            header("Location: tabel.php?pesan=sukses_edit");
            exit();
        } else {
            echo "Gagal mengupdate data: " . $conn->error;
        }
    }

    // Ambil data lama untuk form edit
    $query = "SELECT * FROM wisata WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
} else {
    echo "ID tidak ditemukan.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Wisata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Data Wisata</h2>
    <form action="edit.php?id=<?php echo $id; ?>" method="POST">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data['Nama']; ?>" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data['Alamat']; ?>" required>
        </div>
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" name="latitude" id="latitude" value="<?php echo $data['Latitude']; ?>" required>
        </div>
        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input type="text" class="form-control" name="longitude" id="longitude" value="<?php echo $data['Longitude']; ?>" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4" required><?php echo $data['Deskripsi']; ?></textarea>
        </div>
        <button type="submit" name="edit" class="btn btn-success">Simpan Perubahan</button>
        <a href="tabel.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
