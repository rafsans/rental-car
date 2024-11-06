<?php
session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sessionEmail = $_SESSION['email'];
    $sessionPassword = $_SESSION['password'];
    if ($email == $sessionEmail && $password == $sessionPassword) {
        header('Location: /dashboard/dashboard.php');
    }
}else {
    header('Location: /login.php');
}

?>
