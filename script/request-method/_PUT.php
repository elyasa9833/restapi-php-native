<?php
parse_str(file_get_contents('php://input'), $_PUT);

// check body is fill
if(!isset($_PUT['user_id']) || !isset($_PUT['nama']) || !isset($_PUT['email'])){
    requestInvalid();
}

$user_id = $_PUT['user_id'];
$nama = $_PUT['nama'];
$email = $_PUT['email'];

$getUser = "SELECT user_id FROM user WHERE user_id='$user_id'";
$result = mysqli_query($conn, $getUser);

// check user is registered
if(mysqli_num_rows($result) == 0){
    requestInvalid();
}

include('script/_update-file.php');
if($image == null){
    $update = "UPDATE user SET nama='$nama', email='$email', image=null WHERE user_id ='$user_id'";
}else{
    $update = "UPDATE user SET nama='$nama', email='$email', image='$image' WHERE user_id ='$user_id'";
}

$conn->query($update);

if($update) {
    $results['message'] = 'Data berhasil diubah';	
}