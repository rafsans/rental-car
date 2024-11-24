<?php
include '../php/conn.php';
$id = $_GET['id'];
$sql = "SELECT * FROM categories WHERE id = '$id'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_array($result);

?>