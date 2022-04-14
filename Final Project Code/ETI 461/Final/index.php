<!DOCTYPE html>
<html lang="en" class=" js no-touch cssanimations csstransitions" style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Cmpatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football</title>
    <link rel="stylesheet" href="looks.css">
    <? require_once 'connect.php'?>
</head>
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

<body>
    <?php
            include 'connect.php';

            $query = "SELECT * FROM leaders";
            $result = $connection->query($query);

            $rows = $result->num_rows;
        ?>

    <h1>Leaders</h1>

    <table>
            <tr>
                <th>Yearly</th>
                <th>Season</th>
                <th>Active</th>
                <th>Career</th>
            </tr>
    <?php
                //Loop to print out all of the data from the database
                for ($i = 0; $i < $rows; $i++) {
                    $fullRow = $result -> fetch_array(MYSQLI_ASSOC);
                    echo '<tr><td>' . $fullRow['Yearly'] . '</td>';
                    echo '<td>' . $fullRow['Season'] . '</td>';
                    echo '<td>' . $fullRow['Active'] . '</td>';
                    echo '<td>' . $fullRow['Career'] . '</td>';                
                }
        ?>
    </table>
        

    <?php
            //Prevent memory leaks
            $result  -> close();
            $connection -> close();
        ?>
</body>

<body>
    <?php
        include 'C:\Program Files\Ampps\www\ETI 461\Final\connect.php';

        $query = "SELECT Team_Name, Wins, Losses, Points_Against, Points_For, Ties FROM standings INNER JOIN team ON team.Standings_fk = standings.Standings_ID";
                
        $result = $connection->query($query);

        $rows = $result->num_rows;
    ?>

<h1>Standings</h1>

<table>
        <tr>
            <th>Teams</th>
            <th>Wins</th>
            <th>Losses</th>
            <th>Points_Against</th>
            <th>Points_For</th>
            <th>Ties</th>
        </tr>
   <?php
            //Loop to print out all of the data from the database
            for ($i = 0; $i < $rows; $i++) {
                $fullRow = $result -> fetch_array(MYSQLI_ASSOC);
                echo '<tr><td>' . $fullRow['Team_Name'] . '</td>';
                echo '<td>' . $fullRow['Wins'] . '</td>';
                echo '<td>' . $fullRow['Losses'] . '</td>'; 
                echo '<td>' . $fullRow['Points_Against'] . '</td>';
                echo '<td>' . $fullRow['Points_For'] . '</td>'; 
                echo '<td>' . $fullRow['Ties'] . '</td>';               
            }
    ?>
</table>
       

<?php
        //Prevent memory leaks
        $result  -> close();
        $connection -> close();
    ?>
</body>

body>
    <?php
        include 'C:\Program Files\Ampps\www\ETI 461\Final\connect.php';

        $query = "SELECT DISTINCT Player_FName,Player_LName, Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks, Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions FROM stats
                  JOIN player ON Player_fk = Player_ID";
        $result = $connection->query($query);

        $rows = $result->num_rows;
    ?>

<h1>Stats</h1>

<table>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
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
