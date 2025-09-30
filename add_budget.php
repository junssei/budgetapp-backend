<?php
header('Content-Type: application/json');

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "budget_db";

$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"), true);
$amount = $data['amount'];

$stmt = $conn->prepare("INSERT INTO budget_table (amount) VALUES (?)");

$stmt->bind_param("d", $amount);

if ($stmt->execute()) {
    echo json_encode(["message" => "Budget added successfully"]);
} else {
    echo json_encode(["message" => "Error adding budget"]);
}

$stmt->close();
$conn->close();
