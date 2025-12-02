<?php
$host = "localhost";
$user = "root";
$pass = "1234";          // phpMyAdmin нууц үг хоосон бол хоосон үлдээнэ
$db   = "animaldb";  // Дээр үүсгэсэн database нэр

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database holbogdsongui: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>