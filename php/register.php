<?php
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['email'] = $email;
    $_SESSION['nama'] = 'John Doe';
    $_SESSION['password'] = $password;

    header('Location: /Tugas-prak-pemweb/login.php');
    exit();
} else {
    echo "Invalid form submission.";
}
