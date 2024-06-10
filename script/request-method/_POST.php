<?php
if(!isset($_POST['nama']) || !isset($_POST['email'])){
    requestInvalid();
}

$nama = $_POST['nama'];
$email = $_POST['email'];

include('script/_upload-file.php');

if($image == null){
    $tambah = "INSERT INTO user (nama, email) VALUES ('$nama','$email')";
}else{
    $tambah = "INSERT INTO user (nama, email, image) VALUES ('$nama','$email', '$image')";
}

$conn->query($tambah);

if($tambah){
    $results['message'] = "Data berhasil ditambahkan";
}