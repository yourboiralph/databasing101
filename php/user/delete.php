<?php

require $_SERVER["DOCUMENT_ROOT"] . '/databasing101/config/database.php';

$stmt = $conn->prepare("UPDATE users SET deleted_At = ? WHERE id = ?");
$stmt->bind_param("ss", $deleted_At, $id);

$deleted_At = date("Y-m-d H:i:s");
$id = $_GET["id"];
$stmt->execute();

$stmt->close();
$conn->close();

header("location: ../../index.php?delete-success=true");