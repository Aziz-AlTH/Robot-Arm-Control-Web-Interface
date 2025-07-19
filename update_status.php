<?php
include 'db.php';
$id = $_GET['id'] ?? 0;
$conn->query("UPDATE poses SET status = 1 WHERE id = $id");
$conn->close();
?>
