<?php

require $_SERVER["DOCUMENT_ROOT"] . '/databasing101/config/database.php';

$stmt = $conn->prepare("UPDATE users SET first_name = ?, last_name = ?, gender = ?, updated_At = ? WHERE id = ?");
$stmt->bind_param("sssss", $first_name, $last_name, $gender, $updated_At, $id);

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$updated_At = $_POST["Y-m-d H:i:s"];
$id = $_POST["id"];

$stmt->execute();

$stmt->close();
$conn->close();

header("location: ../../index.php?update-success=true");