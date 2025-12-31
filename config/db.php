<?php
$conn = new mysqli("localhost", "root", "", "industry_system");

if ($conn->connect_error) {
    die("Database connection failed");
}
?>
