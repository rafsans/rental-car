<?php

include '../php/conn.php';

if(isset($_POST["save"])) {
    $name = $_POST["name"];
    $category = $_POST["category"];
    $harga = $_POST["harga"];
    $description = $_POST["description"];
    $sql = "INSERT INTO car VALUES(NULL, '$name', '$category', '$harga', '$description')";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                window.location = 'car.php';
            </script>
        ";
    }
}else if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST["category"];
    $harga = $_POST["harga"];
    $description = $_POST["description"];
    
    $sql = "UPDATE car SET name = '$name', categories_id = '$category', harga = '$harga', description = '$description' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                window.location = 'car.php';
            </script>
        ";
    }
}

?>