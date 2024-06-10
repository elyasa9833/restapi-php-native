<?php
include('script/config.php');
include('script/func.php');

header("Content-Type:application/json");
mysqli_set_charset($conn, 'utf8');
$dir = "script/request-method/";
$method = $_SERVER['REQUEST_METHOD'];
$results = [];

switch ($method) {
    case 'GET':
        include($dir. '_GET.php');
        break;
    
    case 'POST':
        include($dir. '_POST.php');
        break;

    case 'PUT':
        include($dir. '_PUT.php');
        break;

    case 'DELETE':
        include($dir. '_DELETE.php');
        break;

    default:
        $results['Status']['code'] = 404;
        $results['Status']['description'] = "Not Found";
        break;
}

//Menampilkan Data JSON dari Database
print_r(json_encode($results));