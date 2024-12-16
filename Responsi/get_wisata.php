<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "responsi";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query data wisata
$sql = "SELECT Nama, Deskripsi, Latitude, Longitude FROM wisata";
$result = $conn->query($sql);

$wisataData = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $wisataData[] = $row;
    }
}

$conn->close();

// Return data sebagai JSON
header('Content-Type: application/json');
echo json_encode($wisataData);
?>
