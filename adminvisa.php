<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>

<body>
<header>
  <img id = "logga" src='grafik/ntil.jpg'>
</header>
<div class="sidenav">
  <a href="adminanv.php">Användare</a>
  <a href="adminkategori.php">Kategorier</a>
  <a href="adminspel.php">Spel</a>
  <a style="background-color:purple" href="adminvisa.php">Visa data</a>
  <a href="LoggaIn.php">Logga ut</a>
</div>


<?php
    require_once('db.php');

    $sql = "SELECT person.Namn, kategori.Fraga, person.ID FROM fragor
    INNER JOIN person ON person.ID = fragor.PersonID
    INNER JOIN kategori ON kategori.FragaID = fragor.FragaID
    order by person.Namn asc";
    $result = $conn->query($sql);
    //$print = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($print);

    //Gå igenom resultatet från databasen
    $sammansatt_fraga = [];
    $sammansatt_ID = [];
    while($databas_rad=$result->fetch_row()){

        //Plocka ut värden från databas raderna
        $namn = $databas_rad[0]; //Namnet
        $fraga = $databas_rad[1]; //Frågan
        $ID = $databas_rad[2];
        //print_r($databas_rad);

        //Kolla om nyckeln/indexet existerar i arrayen
        if(array_key_exists($namn, $sammansatt_fraga)){

            //Nyckeln existerar, lägg på frågan på värdet som redan finns
            $sammansatt_fraga[$namn] .=", <br>". $fraga;
        }
        else{

            //Nyckeln existerar inte, lägg till namn och fråga i arrayen
            $sammansatt_fraga[$namn] = $fraga;
            $sammansatt_ID[$namn] = $ID;
        }
    }
?>
<div class = "card">
    <table>
        <tr>
            <th>
                Person ID    
            </th>
            <th>
                Namn
            </th>
            <th>
                Fråga
            </th>
        </tr>
        <?php

            //Lägg till rader i tabellen med data från databasen
            foreach($sammansatt_fraga as $namn => $fraga){
                echo "<tr>
                <td>$sammansatt_ID[$namn]</td>
                <td>$namn</td>
                <td>$fraga</td>
                </tr>";
            }
        ?>
    </table>
</div>