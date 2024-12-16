<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM wisata";
$result = $conn->query($sql);

$wisata = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $wisata[] = $row;
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($wisata);
?>