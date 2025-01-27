<?php
$password = "SuperTajneHaslo123";

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$username = "użytkownik";

$sql = "INSERT INTO users (username, password_hash) VALUES (:username, :password_hash)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':username' => $username,
    ':password_hash' => $hashedPassword
]);

echo "Zaszyfrowane hasło zapisano w bazie.";
?>