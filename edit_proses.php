<?php

include'connect.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$harga = $_POST['harga'];
$password = $_POST['password'];

$query = "UPDATE spp SET nama='$nama', harga='$harga', kelas='$kelas', harga=$harga, password='$password' WHERE id=$id";

$sql = mysqli_query($connect, $query);

if($sql){
    header('location:index.php');
}
?>
