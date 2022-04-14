--Creating tables--
CREATE TABLE `Player` (
  `Player_ID` int PRIMARY KEY,
  `Player_FName` varchar(255),
  `Player_LName` varchar(255),
  `Position` varchar(255),
  `Player_Age` int,
  `Player_DOB` date,
  `Retired_Status` varchar(255),
  `Player_Weight` int,
  `Player_Height` int,
  `Player_College` varchar(255),
  'Team_fk' int
);

CREATE TABLE `RetiredPlayer` (
  `Retired_ID` int PRIMARY KEY,
  `Year_Retired` date,
  `Age_Retired` int,
  `Player_fk` int
);

CREATE TABLE `Stats` (
  `Stat_ID` int PRIMARY KEY,
  `Pass_Attempts` int,
  `Games_Appeared` int,
  `Interceptions` int,
  `Games_Started` int,
  `Sacks` int,
  `Touchdowns` int,
  `Longest_Pass` int,
  `Passing_Yards` int,
  `Pass_Percentage` float,
  `Pass_Completions` int,
  `Player_fk` int
);

CREATE TABLE `Leaders` (
  `Leader_ID` int PRIMARY KEY,
  `Yearly` varchar(255),
  `Season` varchar(255),
  `Active` varchar(255),
  `Career` varchar(255),
  `Stat_fk` int
);

CREATE TABLE `Team` (
  `Team_ID` int PRIMARY KEY,
  `Playoff_Appearences` int,
  `SuperBowls` int,
  `Team_Coach` varchar(255),
  `Team_Name` varchar(255),
  `Standings_fk` int
);

CREATE TABLE `Standings` (
  `Standings_ID` int PRIMARY KEY,
  `Wins` int,
  `Losses` int,
  `Points_Against` int,
  `Points_For` int,
  `Ties` int
);

CREATE TABLE `Games` (
  `Games_ID` int PRIMARY KEY,
  `Final_Score` int,
  `FirstQ_Score` int,
  `SecondQ_Score` int,
  `ThirdQ_Score` int,
  `FourthQ_Score` int,
  `Year` date,
  `SuperBowl_Num` int,
  'Team_fk' int
);
ALTER TABLE `games` ADD INDEX(`Team_fk`);
ALTER TABLE `games` ADD FOREIGN KEY (`Team_fk`) REFERENCES `team`(`Team_ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `leaders` ADD INDEX(`Stat_fk`);
ALTER TABLE `leaders` ADD FOREIGN KEY (`Stat_fk`) REFERENCES `stats`(`Stat_ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `player` ADD INDEX(`Team_fk`);
ALTER TABLE `player` ADD FOREIGN KEY (`Team_fk`) REFERENCES `team`(`Team_ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `retiredplayer` ADD FOREIGN KEY (`Player_fk`) REFERENCES `player`(`Player_ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `stats` ADD INDEX(`Player_fk`);
ALTER TABLE `stats` ADD FOREIGN KEY (`Player_fk`) REFERENCES `player`(`Player_ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `team` ADD INDEX(`Standings_fk`);
ALTER TABLE `team` ADD FOREIGN KEY (`Standings_fk`) REFERENCES `standings`(`Standings_ID`) ON DELETE RESTRICT ON UPDATE CASCADE;

--Adding data--
INSERT INTO Standings (Wins, Losses, Points_Against, Points_For, Ties) VALUES (12,4,384,512,0);
INSERT INTO Standings (Wins, Losses, Points_Against, Points_For, Ties) VALUES (9,8,502,425,0);
INSERT INTO Standings (Wins, Losses, Points_Against, Points_For, Ties) VALUES (11,5,288,295,0);

INSERT INTO Team (Playoff_Appearences,SuperBowls,Team_Coach,Team_Name,Standings_fk) VALUES (18,6,'Mike Tomlin','Steelers',1);
INSERT INTO Team (Playoff_Appearences,SuperBowls,Team_Coach,Team_Name,Standings_fk) VALUES (21,6,'Bill Belichek','Patriots',2);
INSERT INTO Team (Playoff_Appearences,SuperBowls,Team_Coach,Team_Name,Standings_fk) VALUES (8,1,'Eagle Man','Eagles',3);

INSERT INTO Games (Final_Score,FirstQ_Score,SecondQ_Score,ThirdQ_Score,FourthQ_Score,Year,SuperBowl_Num,Team_fk) VALUES (44,23,0,21,0,'1999/02/05',29,1);
INSERT INTO Games (Final_Score,FirstQ_Score,SecondQ_Score,ThirdQ_Score,FourthQ_Score,Year,SuperBowl_Num,Team_fk) VALUES (44,23,0,21,0,'2003/02/05',31,2);
INSERT INTO Games (Final_Score,FirstQ_Score,SecondQ_Score,ThirdQ_Score,FourthQ_Score,Year,SuperBowl_Num,Team_fk) VALUES (54,25,4,25,0,'2007/02/16',44,3);

INSERT INTO Player (Player_ID, Player_FName, Player_LName, Position, Player_Age, Player_dob, Player_Weight, Player_Height, Player_College, Retired_Status, Team_fk) VALUES (1, 'Tom', 'Brady', 'QB', 44, '1977-08-03', 225, 6.4, 'Michigan', 'Active', 1);
INSERT INTO Player (Player_ID, Player_FName, Player_LName, Position, Player_Age, Player_dob, Player_Weight, Player_Height, Player_College, Retired_Status, Team_fk) VALUES (2, 'Josh', 'Allen', 'QB', 25, '1996-05-21', 237, 6.5, 'Wyoming', 'Active', 2);
INSERT INTO Player (Player_ID, Player_FName, Player_LName, Position, Player_Age, Player_dob, Player_Weight, Player_Height, Player_College, Retired_Status, Team_fk) VALUES (3, 'Jalen', 'Hurts', 'QB', 23, '1998-08-03', 223, 6.1, 'Oklahoma', 'Active', 2);
INSERT INTO Player (Player_ID, Player_FName, Player_LName, Position, Player_Age, Player_dob, Player_Weight, Player_Height, Player_College, Retired_Status, Team_fk) VALUES (4, 'Peyton', 'Manning', 'QB', 46, '1976-03-24', 230, 6.5, 'Tennessee', 'Retired', 3);
INSERT INTO Player (Player_ID, Player_FName, Player_LName, Position, Player_Age, Player_dob, Player_Weight, Player_Height, Player_College, Retired_Status, Team_fk) VALUES (5, 'Eli', 'Manning', 'QB', 41, '1981-01-03', 220, 6.5, 'Mississippi', 'Retired', 3);

INSERT INTO Stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks,Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (322, 12, 11, 12, 18, 24, 87, 3501, 50.0, 161, 1);
INSERT INTO Stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks,Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (10, 1, 2, 0, 2, 0, 18, 211, 50.0, 5, 3);
INSERT INTO Stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks,Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (109, 16, 14, 16, 18, 12, 72, 2201, 47.7, 52, 4);
INSERT INTO Stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks,Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (500, 16, 33, 16, 16, 28, 88, 4205, 52.0, 260,5);

INSERT INTO RetiredPlayer (Year_Retired, Age_Retired, Player_fk) VALUES ('2016', 40, 4);
INSERT INTO RetiredPlayer (Year_Retired, Age_Retired, Player_fk) VALUES ('2020', 41, 5);

INSERT INTO Leaders (Yearly, Season, Active, Career, Stat_fk) VALUES ('Tom Brady', 'Josh Allen', 'Jalen Hurts', 'Eli Manning', 4);
INSERT INTO Leaders (Yearly, Season, Active, Career, Stat_fk) VALUES ('Josh Allen', 'Jalen Hurts', 'Tom Brady', 'Peyton Manning', 2);
INSERT INTO Leaders (Yearly, Season, Active, Career, Stat_fk) VALUES ('Jalen Hurts', 'Tom Brady', 'Josh Allen', 'Eli Manning', 3);


