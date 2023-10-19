<?php

require $_SERVER["DOCUMENT_ROOT"] . '/databasing101/config/database.php';

$id = $_GET['id'];
$sq =  "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);

$conn->close();