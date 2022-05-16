<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    //$servername = "localhost";
    //$username = "ntigskov_go1";
    //$password = "iH_n-SnWtCy.";
    $dbname = "gameon";

    // Creat Connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_error());
    }
?>