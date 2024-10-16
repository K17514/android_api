<?php
include 'db_connect.php';

// Check if POST variables are set and retrieve them
if (isset($_POST['nama_barang']) && isset($_POST['jenis_barang'])) {
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];

    // Log received variables for debugging (optional)
    error_log("Received nama_barang: $nama_barang, jenis_barang: $jenis_barang");

    // Prepare SQL statement to insert data
    $result = $conn->prepare("INSERT INTO barang (nama_barang, jenis_barang) VALUES (?, ?)");
    $result->bind_param("ss", $nama_barang, $jenis_barang);

    // Execute the query and check for success
    if ($result->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting record: " . $result->error;
    }

    $result->close();
} else {
    echo "Error: Missing required fields";
}

// Close the database connection
$conn->close();
?>