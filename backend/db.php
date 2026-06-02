<?php
$conn = new mysqli("localhost", "projectuser", "1234", "digital_life_manager", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>