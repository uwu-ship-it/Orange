<?php
    session_start();
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gameon";

        // Create Connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $anv = $_SESSION['Namn'];
        $pass = $_SESSION['Password'];

        $sql = "SELECT * FROM person WHERE Namn='$anv' and Password='$pass'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            //Output rows as long as they exists
            while ($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row['ID'];
            }
        }
        else{
            echo "Det finns ingen data";
        }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=§, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultat.php" method="GET">
        <input type="range" name="rate" min="1" max="10">
        <input type="submit"> 
    </form>
</body>
</html>