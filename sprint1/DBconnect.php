<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";

// creating connection

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
    }
else{
    mysqli_select_db($conn, $dbname);
    //echo "Connection succesful";
    }

?>