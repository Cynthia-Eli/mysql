<?php

// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $db = 'new_database';

$conn = mysqli_connect('localhost','root','','bizmarrow_db');


if(!$conn){
    die("connection Failed" .mysqli_connect_error());
} 
echo "Connection successfully"; 


?> 