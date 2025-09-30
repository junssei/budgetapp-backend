<?php
header('Content-Type: application/json');

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "budget_db";

$servername = "sql100.infinityfree.com";
$username = "if0_40053035";
$password = "jEKGZjKMUEZKM3";
$dbname = "if0_40053035_budget_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"), true);
$name = $data['name'];
$description = $data['description'];
$amount = $data['amount'];

$stmt = $conn->prepare("INSERT INTO expenses_table (name, description, amount) VALUES (?, ?, ?)");
$stmt->bind_param("ssd", $amount, $description, $amount);

if ($stmt->execute()) {
    echo json_encode(["message" => "Expense added successfully"]);
} else {
    echo json_encode(["message" => "Error adding expense"]);
}

$stmt->close();
$conn->close();
