<!DOCTYPE html>
<html lang="en">
<nav class="menu">
    <div class="dropdwn">
        <a href="http://localhost/ETI%20461/Final/index.php">
            <img src="https://www.footballdb.com/images/logoflat.png" id="logoflat">
        </a>    
    </div> 

    <div class="dropdwn">
        <button class="dropbutn">Standings</button>
        <div class="dropdwn-content">
            <a href="http://localhost/ETI%20461/Dropdowns/regularseason.php">Regular Season</a>
        </div>
    </div>   
    <div class="dropdwn">
        <button class="dropbutn">Games</button>
        <div class="dropdwn-content">
            <a href="http://localhost/ETI%20461/Dropdowns/scoreboard.php">Scoreboard</a>
        </div>
    </div>

    
    <div class="dropdwn">
        <button class="dropbutn">Stats</button>
        <div class="dropdwn-content">
            <a href="http://localhost/ETI%20461/Dropdowns/statindex.php">Stat Index</a>
            <a href="http://localhost/ETI%20461/Dropdowns/playerstats.php">Player Stats</a>
            <a href="http://localhost/ETI%20461/Dropdowns/teamstats.php">Team Stats</a>
        </div>
    </div>

    
    <div class="dropdwn">
        <button class="dropbutn">Teams</button>
        <div class="dropdwn-content">
            <a href="http://localhost/ETI%20461/Dropdowns/teamindex.php">Team Index</a>
        </div>
    </div>

    
    <div class="dropdwn">
        <button class="dropbutn">Players</button>
        <div class="dropdwn-content">
            <a href="http://localhost/ETI%20461/Dropdowns/playerindex.php">Player Index</a>
            <a href="http://localhost/ETI%20461/Dropdowns/currentplayers.php">Current Players</a>
        </div>
    </div>

    <!--
    <div class="dropdwn">
        <button class="dropbutn">Draft</button>
        <div class="dropdwn-content">
            <a href="#">2022 Draft Order</a>
            <a href="#">Past Draft Results</a>
            <a href="#">2022 Combine Invitees</a>
            <a href="#">Draft Prospects</a>
            <a href="#">Draft Pick Signings</a>
        </div>
    </div>

    
    <div class="dropdwn">
        <button class="dropbutn">College</button>
        <div class="dropdwn-content">
            <a href="#">Home</a>
            <a href="#">Standings</a>
            <a href="#">Rankings</a>
            <a href="#">Scores</a>
            <a href="#">Stats</a>
            <a href="#">Teams</a>
            <a href="#">Players</a>
        </div>
    </div>
-->
    
    <div class="dropdwn">
        <button class="dropbutn">More</button>
        <div class="dropdwn-content">
            <a href="http://localhost/ETI%20461/Dropdowns/leaders.php">Leaders</a>
        </div>
    </div>
</nav> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Index</title>
    <link rel="stylesheet" href="style.css">
    <? require_once 'C:\Program Files\Ampps\www\ETI 461\Final\connect.php'?>
</head>
<body>
    <?php
        include 'C:\Program Files\Ampps\www\ETI 461\Final\connect.php';

        $query = "SELECT Team_Name, Team_Coach FROM team";
        $result = $connection->query($query);

        $rows = $result->num_rows;
    ?>

<h1>Teams</h1>

<table>
        <tr>
            <th>Team Name</th>
            <th>Team Coach</th>
        </tr>
   <?php
            //Loop to print out all of the data from the database
            for ($i = 0; $i < $rows; $i++) {
                $fullRow = $result -> fetch_array(MYSQLI_ASSOC);
                echo '<tr><td>' . $fullRow['Team_Name'] . '</td>';
                echo '<td>' . $fullRow['Team_Coach'] . '</td>';              
            }
    ?>
</table>
       

<?php
        //Prevent memory leaks
        $result  -> close();
        $connection -> close();
    ?> 
</body>
</html>