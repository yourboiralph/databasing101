<?php
require $_SERVER["DOCUMENT_ROOT"] . '/databasing101/config/database.php';

$sql = "SELECT * FROM users WHERE deleted_At IS null";
$result = $conn->query($sql);

$conn->close();