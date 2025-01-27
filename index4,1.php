<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$wpisany_uzytkownik = "przykladowy_user";
$wpisane_haslo = "przykladowe_haslo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password FROM users WHERE username='$wpisany_uzytkownik'";

$result = $conn->query($sql);

if($result->num_rows > 0) 
{   
$row = $result->fetch_assoc();  
$hashedPassword = $row['password'];
if (password_verify($wpisane_haslo, $hashedPassword)) {
echo "Logowanie udane!";
} 
else 
{
echo "Złe hasło!";
}
} 
else 
{
echo "Nie ma takiego użytkownika";
}

$conn->close();

?>
