<?php
// include('script/func.php');
include('script/_upload-file.php');
include('script/_delete-file.php');
$results = [];

// $results['random string'] = generateRandomString();

$results['image name'] = $image;

print_r(json_encode($results));