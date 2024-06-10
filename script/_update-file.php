<?php
require_once('func.php');

if (isset($_PUT["image"]["name"])) {
    $fileExtension = pathinfo($_PUT['image']['name'], PATHINFO_EXTENSION);
    $newFileName = generateRandomString(). '.' .$fileExtension;
    $targetFile = "src/image/". $newFileName;
    
    // Memeriksa tipe file jika diperlukan
    $imageName = $_PUT['image']['name'];
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
    move_uploaded_file($_PUT['image']['tmp_name'], $targetFile);
    $image = $targetFile;

}else{
    $getImage = "SELECT image FROM user WHERE user_id = $user_id";
    $result = mysqli_query($conn, $getImage);

    // if form image not fill, image not replaced
    $image = (mysqli_num_rows($result) > 0) ? mysqli_fetch_assoc($result)['image'] : null;
    
    // $results['message'] = 'data: '. $image;	
}

?>
