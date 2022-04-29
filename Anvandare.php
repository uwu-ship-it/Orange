<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlogg</title>
</head>
<body>
    <?php
        session_start();
        $Name = "";
        $NameErr = false;
        $Password = "";
        $PasswordErr = false;

        if(isset($_POST['Namn']) && isset($_POST['Password'])){
        require_once('db.php');
        
        $anv = $_POST['Namn'];
        $pass = $_POST['Password'];
        
        $sql = "SELECT * FROM person WHERE Namn='$anv' and Password='$pass'";
        $result = $conn->query($sql);
        $print = mysqli_fetch_all($result, MYSQLI_ASSOC);
        print_r($print);

        // Initiera variabler och ställ in på tomma strängar
        $_SESSION["Namn"] = $anv;
        $_SESSION["Password"] = $pass;
        $NameErr = $PasswordErr = "";
        
        if ($result->num_rows<1) {
            header("location: Anvandare.php");
        }
        else{
            
            while($row = $result->fetch_assoc()){
                $id = $row['ID'];
            }
            $_SESSION['id'] = $id;
            header("location: test.php");

        }
    }
    ?>
        <form method="post">
        Namn: <input required type="text" name="Namn" placeholder="Namn" value="<?php echo $Name; ?>"><span class="error"> <?php echo $NameErr; ?></span><br><br>
        Lösenord: <input required type="text" name="Password" placeholder="Lösenord" value="<?php echo $Password; ?>"><span class="error"> <?php echo $PasswordErr; ?></span><br><br>
        <input type="submit">
        </form>
</body>
</html>