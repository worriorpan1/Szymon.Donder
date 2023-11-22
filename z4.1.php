<?php
$username = "admin";
$plainPassword = "test";
$hashedPassword = password_hash($plainPassword, PASSWORD_BCRYPT);

$sql = "INSERT INTO users (username, password) VALUES (?,?)";
?>