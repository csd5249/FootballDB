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
    <title>Stat Index</title>
    <link rel="stylesheet" href="style.css">
    <? require_once 'C:\Program Files\Ampps\www\ETI 461\Final\connect.php'?>
</head>
<body>
    <?php
        include 'C:\Program Files\Ampps\www\ETI 461\Final\connect.php';

        $query = "SELECT p.Player_FName, p.Player_LName, s.Pass_Attempts, s.Games_Appeared, 
        s.Interceptions, s.Games_Started, s.Sacks, s.Touchdowns, s.Longest_Pass, s.Passing_Yards, s.Pass_Percentage, 
        s.Pass_Completions FROM player p INNER JOIN stats s ON p.Player_ID = s.Player_fk";
        $result = $connection->query($query);

        $rows = $result->num_rows;
    ?>

<h1>Player Stats</h1>

<table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Pass Attempts</th>
            <th>Games Appeared</th>
            <th>Interceptions</th>
            <th>Games Started</th>
            <th>Sacks</th>
            <th>Tocuhdowns</th>
            <th>Longest Pass</th>
            <th>Passing Yards</th>
            <th>Passing Percentage</th>
            <th>Passing Completions</th>
        </tr>
   <?php
            //Loop to print out all of the data from the database
            for ($i = 0; $i < $rows; $i++) {
                $fullRow = $result -> fetch_array(MYSQLI_ASSOC);
                echo '<tr><td>' . $fullRow['Player_FName'] . '</td>';
                echo '<td>' . $fullRow['Player_LName'] . '</td>';
                echo '<td>' . $fullRow['Pass_Attempts'] . '</td>';
                echo '<td>' . $fullRow['Games_Appeared'] . '</td>';
                echo '<td>' . $fullRow['Interceptions'] . '</td>';
                echo '<td>' . $fullRow['Games_Started'] . '</td>';
                echo '<td>' . $fullRow['Sacks'] . '</td>';
                echo '<td>' . $fullRow['Touchdowns'] . '</td>';
                echo '<td>' . $fullRow['Longest_Pass'] . '</td>';
                echo '<td>' . $fullRow['Passing_Yards'] . '</td>';
                echo '<td>' . $fullRow['Pass_Percentage'] . '</td>';
                echo '<td>' . $fullRow['Pass_Completions'] . '</td>';              
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