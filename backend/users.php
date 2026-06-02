<?php
header("Content-Type: application/json");

// include database connection
include "db.php";

// query
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// check if query works
if (!$result) {
    echo json_encode(["error" => $conn->error]);
    exit();
}

// store data
$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// output JSON
echo json_encode($data);
?>