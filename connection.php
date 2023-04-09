<?php

$conn = new mysqli('localhost','root','','');

if($conn){
    echo "connection successfully";
}else {
    echo $conn->error;
}

?>