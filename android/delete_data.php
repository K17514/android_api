<?php
include 'db_connect.php';
// Ambil id_barang dari request 
$id_barang = $_POST['id_barang'];

// Siapkan dan eksekusi query untuk menghapus data
$stmt = $conn->prepare("DELETE FROM barang WHERE id_barang = ?");
$stmt->bind_param("s", $id_barang);

if ($stmt->execute()) {
    echo json_encode(["status" => "success"]);
} else {
    error_log("Error executing query: " . $stmt->error);
    echo json_encode(["status" => "error", "message" => "Gagal menghapus data!"]);
}

$stmt->close();
$conn->close();
?>