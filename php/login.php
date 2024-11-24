<?php
session_start();

include 'conn.php';

$email = $_POST['email-login'];
$password = $_POST['password-login'];

if (empty($email) || empty($password)) {
    echo "
        <script>
            alert('Email dan password harus diisi!');
            window.location = 'login.php';
        </script>
    ";
    exit;
}

$stmt = $koneksi->prepare("SELECT * FROM admin WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['username'];
        header('Location: ../dashboard.php');
        exit;
    } else {
        echo "
            <script>
                alert('Email atau password salah. Silakan coba lagi.');
                window.location = 'login.php';
            </script>
        ";
    }
} else {
    echo "
        <script>
            alert('Email tidak ditemukan. Silakan coba lagi.');
            window.location = 'login.php';
        </script>
    ";
}

$stmt->close();
?>
