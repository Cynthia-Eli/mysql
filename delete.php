<?php

include_once('conn.php');

$id = 1;
$sql = "DELETE FROM table_name WHERE id = $id";

if(mysqli_query($conn, $sql) === TRUE) {
    echo "Record deleted successfuly";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

?>