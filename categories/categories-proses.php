<?php

include '../php/conn.php';

if(isset($_POST["save"])) {
    $name = $_POST["name"];
    $sql = "INSERT INTO categories VALUES(NULL, '$name')";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                window.location = 'categories.php';
            </script>
        ";
    }
}else if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sql = "UPDATE categories SET name = '$name' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                window.location = 'categories.php';
            </script>
        ";
    }
}

?>