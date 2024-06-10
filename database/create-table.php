<?php
   include('../script/config.php');
   
   $query = 'CREATE TABLE user( '.
      'user_id INT NOT NULL AUTO_INCREMENT, '.
      'nama VARCHAR(20) NOT NULL, '.
      'email VARCHAR(20) NOT NULL, '.
      'image VARCHAR(255) NULL, '.
      'primary key ( user_id ))';
//    mysqli_select_db("test_db");
   $retval = mysqli_query($conn, $query);
   
//    if(! $retval ) {
//       die('Could not create table: ' . mysqli_error());
//    }
   
   echo "Table user created successfully\n";
   
   mysqli_close($conn);
?>