<?php

$conn = new mysqli("localhost", "root", "", "ramadan");

if($conn) {
    echo "Connection successfully";
}else {
    echo $conn->error;
}

?>