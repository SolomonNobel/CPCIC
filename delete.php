<?php
session_start();
include __DIR__ . "/config/db.php";


// Optional: restrict access to logged-in users
// if (!isset($_SESSION['user_id'])) {
//     header("Location: index.php");
//     exit;
// }

// Validate ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid ID");
}

$id = (int) $_GET['id'];

// Delete the record
$stmt = $conn->prepare("DELETE FROM sustainability_data WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    // Redirect back to the main page after deletion
    header("Location: implant.php");
    exit;
} else {
    die("Error deleting record: " . $stmt->error);
}
?>
