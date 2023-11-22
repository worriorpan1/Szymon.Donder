<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameInput = isset($_POST["login"]) ? $_POST["login"] : '';
    $passwordInput = isset($_POST["haslo"]) ? $_POST["haslo"] : '';

    if ($usernameInput == "admin" && $passwordInput == "test") {
        echo "Zalogowano pomyślnie!";
    } else {
        echo "Błąd logowania. Spróbuj ponownie.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz logowania</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br>

        <label for="haslo">Hasło:</label>
        <input type="password" id="haslo" name="haslo" required><br>

        <input type="submit" value="Zaloguj">
    </form>
</body>
</html>