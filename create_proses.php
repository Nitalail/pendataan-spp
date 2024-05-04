<?php
include"connect.php";

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$harga = $_POST['harga'];
$password = $_POST['password'];

$query="INSERT INTO spp (nama,kelas,harga,password)VALUES ('$nama', '$kelas', '$harga', '$password')";

$result= mysqli_query($connect,$query);

if($result){
    header('location:index.php');
}
?>