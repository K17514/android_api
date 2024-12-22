<?php
include 'db_connect.php';

$result = $conn->query("SELECT * FROM barang WHERE status='rusak'");
$barang = array();
while($row = $result->fetch_assoc()) {
    $barang[] = $row;
}
echo json_encode($barang);
?>