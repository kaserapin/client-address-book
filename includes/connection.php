<?php

$server     = "localhost";
$username   = "root";
$password   = "";
$db         = "clientaddressbook";

// create a connection

$conn = mysqli_connect( $server, $username, $password, $db);

// check the connection

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error() );
}

?>