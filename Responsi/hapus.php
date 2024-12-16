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

    // Query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM wisata WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect kembali ke halaman tabel.php setelah berhasil menghapus data
        header("Location: tabel.php?pesan=sukses_hapus");
        exit();
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "ID tidak ditemukan.";
}

$conn->close();
?>
