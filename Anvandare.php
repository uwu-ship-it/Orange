<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        //$username = "ntigskov_goa1;
        //$password = "iH_n-SnWtCy";
        $dbname = "gameon";

        // Creat Connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $anv = $_GET['Namn'];
        $pass = $_GET['Password'];

        $sql = "SELECT * FROM person WHERE Namn='$anv' and Password='$pass'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            //Output rows as long as they exists
            while ($row = $result->fetch_assoc()) {
                echo $row['Namn'] . ' ' . $row['Password'] . '<br>';
            }
        }
        else
        echo "hacksdnfjadk";
        
        $conn->close();
        /*if($anv=Jessica and $pass=123);
            echo "Hej";*/
    ?>
</body>
</html>