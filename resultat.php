<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gameon";

    $_SESSION['rate'] = $_GET['rate'];

    $rate = $_SESSION['rate'];
    $anv = $_SESSION['id'];

    // Create Connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "INSERT INTO `resulutat` (`GruppID`, `FrageID`, `PersonID`, `Svar`) VALUES ('1', '1', '$anv', '$rate');";
    if(mysqli_query($conn, $sql)){
        echo "It work</br>";
    } else{
        echo "It no work </br>";
    }
    
    $res = $_GET["rate"];
    echo "$res";

?>