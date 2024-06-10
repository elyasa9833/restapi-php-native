<?php
parse_str(file_get_contents('php://input'), $_DELETE);
$user_id = $_DELETE['user_id'];

if (isset($user_id)) {
    $getUser = "SELECT user_id FROM user WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $getUser);

    // check user is registered
    if(mysqli_num_rows($result) > 0){
        include('script/_delete-file.php');
        $delete = "DELETE FROM user WHERE user_id ='$user_id'";
        $conn->query($delete);
        
        if($delete){
            $results['message'] = 'Data berhasil dihapus';	
        }
    }else{
        $results['Status']['code'] = 400;
        $results['Status']['description'] = 'Request Invalid';
    }
}