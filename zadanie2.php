<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="" method="post">
        <label for="user">Username</label>
        <input type="text" id="user" name="username"><br><br>
        <label for="pass">Password</label>
        <input type="password" id="pass" name="userpass">
        <button type="submit">Log In</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $storedUser = "admin";
    $storedPass = "test";

    $enteredUser = $_POST["username"];
    $enteredPass = $_POST["userpass"];

    if ($enteredUser === $storedUser && $enteredPass === $storedPass) {
        echo "<p style='color:green;'>Zalogowales się!</p>";
    } else {
        echo "<p style='color:red;'>Niepoprawny login lub haslo.</p>";
    }
}
?>