<?php
$database = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect('localhost', 'root', '', 'belajar_php');
   
if(! $conn ) {
   die('Could not connect: ' . mysqli_connect_error());
}