<?php
$query = mysqli_query($conn, 'SELECT * FROM user');

// $i = 1;
if (mysqli_num_rows($query) == 0) {
    requestInvalid();
}

while($row = mysqli_fetch_assoc($query)) {
    $results['Hasil'][] = [
        'user_id' => $row['user_id'],
        'nama' => $row['nama'],
        'email' => $row['email'],
        'image' => $row['image']
    ];
    // $i = $i + 1;
}