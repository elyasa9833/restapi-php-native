<?php

$image = null;
if (isset($_FILES["image"]["name"])) {
    // $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $newFileName = generateRandomString(). '.' .$fileExtension;
    $targetFile = "src/image/". $newFileName;
    
    // Memeriksa tipe file jika diperlukan
    $imageName = $_FILES['image']['name'];
    $imageFileType = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
    $allowedTypes = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedTypes)) {
        echo "Hanya file dengan format JPG, JPEG, PNG, dan GIF yang diizinkan.";
        exit;
    }

    // Memeriksa apakah file sudah ada sebelumnya
    if (file_exists($targetFile)) {
        $newFileName = generateRandomString() . $fileExtension;
        $targetFile = "src/image". $newFileName;
    }

    // Pindahkan file ke folder tujuan
    move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
    $image = $targetFile;

} ?>
