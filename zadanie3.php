<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>

    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "logins";

    $connection = new mysqli($server, $username, $password, $database);
    if ($connection->connect_error) {
        die("<p style='color: red;'>Błąd połączenia z bazą danych: " . $connection->connect_error . "</p>");
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $loginInput = $_POST['login'] ?? '';
        $passwordInput = $_POST['haslo'] ?? '';

        $query = $connection->prepare("SELECT * FROM loginData WHERE login = ?");
        $query->bind_param("s", $loginInput);
        $query->execute();
        $result = $query->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if ($passwordInput === $user['pass']) {
                echo "<p style='color: green; text-align: center;'>Zalogowano pomyślnie</p>";
            } else {
                echo "<p style='color: red; text-align: center;'>Nieprawidłowe hasło</p>";
            }
        } else {
            echo "<p style='color: red; text-align: center;'>Nieprawidłowy login</p>";
        }
        $query->close();
    }
    ?>

    <div>
        <h2>Logowanie</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="login" placeholder="Login" required>
            <input type="password" name="haslo" placeholder="Hasło" required>
            <button type="submit">Zaloguj</button>
        </form>
    </div>

</body>
</html>

