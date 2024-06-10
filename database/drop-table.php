<?php
   include('../script/config.php');
   $table = $_POST['table'];
   
   $query = 'DROP TABLE '. $table;
//    mysqli_select_db("test_db");
   $retval = mysqli_query($conn, $query);
   
//    if(! $retval ) {
//       die('Could not create table: ' . mysqli_error());
//    }

   echo "Table $table drop successfully\n";
   
   mysqli_close($conn);
?>