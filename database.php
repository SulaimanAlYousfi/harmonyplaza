<?php
// establishing a connection to the SQL database harmonyplaza
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "harmonyplaza";
    // Create connection with sql
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection with sql
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
?>