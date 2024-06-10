<?php
// include('config.php');

$getImage = "SELECT image FROM user WHERE user_id = $user_id";
$result = mysqli_query($conn, $getImage);
$file = mysqli_fetch_assoc($result)['image'];
// $file = './src/image/pKjsM50oHNjDWbWqUVgr.png';

if($file != null) {
    if (file_exists($file)) {
        // Hapus file
        if (unlink($file)) {
            $results['message'] = 'File berhasil dihapus.';
        } else {
            $results['message'] = 'Gagal menghapus file.';
            print_r(json_encode($results));
            exit;
        }
    } else {
        $results['message'] = 'File tidak ditemukan.';
        print_r(json_encode($results));
        exit;
    }
}