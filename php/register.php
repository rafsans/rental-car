<?php
session_start();

include 'conn.php';

    $email = $_POST['email'];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $passwordConfirmation = password_hash($_POST["password-confirmation"], PASSWORD_BCRYPT);
    $username = $_POST['username'];

    $sql = "INSERT INTO admin VALUES(NULL, '$username','$email', '$password')";

    if (empty($email) || empty($password) || empty($passwordConfirmation)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = '../register.php';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Registrasi Berhasil Silahkan login');
                window.location = '../login.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = '../register.php';
            </script>
        ";
    }
?>

