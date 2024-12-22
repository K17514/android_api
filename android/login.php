<?php
header('Content-Type: application/json');

$username = $_GET['username'];
$password = $_GET['password'];

include 'db_connect.php';
$sql = "SELECT * FROM tb_user WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode(["success" => true, "message" => "Login berhasil!"]);
} else {
    echo json_encode(["success" => false, "message" => "Username atau password salah."]);
}

$stmt->close();
$conn->close();
?>