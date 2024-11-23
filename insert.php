<?php  
include('conn.php');  

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];

$sql = "INSERT INTO tale_name (firstname, secondname, lastname, email, phonenumber, textarea)
        VALUES ('$name', '$email',)";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Data has been successfully stored in the database.</h3>";
} else {
    echo "Error: Could not store data in the database. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
