<?php
include 'db_connect.php';

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$status = $_POST['status'];
$ketersediaan = $_POST['ketersediaan'];

$sql = "UPDATE barang SET 
            nama_barang='$nama_barang', 
            jenis_barang='$jenis_barang', 
            status='$status', 
            ketersediaan='$ketersediaan' 
        WHERE id_barang='$id_barang'";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diubah";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
