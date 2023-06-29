<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $newsletter = isset($_POST["newsletter"]) ? "Так" : "Ні";

    echo "Ім'я користувача: " . htmlspecialchars($username) . "<br>";
    echo "Пароль: " . htmlspecialchars($password) . "<br>";
    echo "Підписатися на розсилку: " . $newsletter;
}
?>