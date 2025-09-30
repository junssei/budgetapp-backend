<?php
header('Content-Type: application/json');
require 'index.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT amount FROM budget_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $budgets[] = $row;
    }
    echo json_encode($budgets);
} else {
    echo json_encode([]);
}

$conn->close();
