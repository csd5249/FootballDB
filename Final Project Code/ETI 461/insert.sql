/* Team 1 */
INSERT INTO player (Player_FName, Player_LName, Position, Player_Age, Player_DOB, Player_Weight, Player_Height, Player_College, Team_fk) VALUES ("Brian","Hoyer", "QB", 34, "03-07-1989", 189, 6, "Kentucky", 1);
INSERT INTO player (Player_FName, Player_LName, Position, Player_Age, Player_DOB, Player_Weight, Player_Height, Player_College, Team_fk) VALUES ("Kurt", "Warner", "QB", 44, "01-07-1975", 201, 6, "Arizona",1);
/* Team 2 */
INSERT INTO player (Player_FName, Player_LName, Position, Player_Age, Player_DOB, Player_Weight, Player_Height, Player_College, Team_fk) VALUES ("Burt","Star","QB", 28, "06-07-1991", 215, 6, "Oregon", 2);
/* Team 3 */
INSERT INTO player (Player_FName, Player_LName, Position, Player_Age, Player_DOB, Player_Weight, Player_Height, Player_College, Team_fk) VALUES ("Anderson","Cooper","QB",32,"07-08-1989",174,5,"Michigan", 3);
/* Team 4 */
INSERT INTO player (Player_FName, Player_LName, Position, Player_Age, Player_DOB, Player_Weight, Player_Height, Player_College, Team_fk) VALUES ("Gordon","Ramsey","QB",21,"09-30-2001",180,6, "Hofstra", 4);
INSERT INTO player (Player_FName, Player_LName, Position, Player_Age, Player_DOB, Player_Weight, Player_Height, Player_College, Team_fk) VALUES ("Brent","Pry","QB",24, "03-23-1997",145,6, "Penn State", 4);
INSERT INTO player (Player_FName, Player_LName, Position, Player_Age, Player_DOB, Player_Weight, Player_Height, Player_College, Team_fk) VALUES ("Jim", "Jefferson", "QB", 31, "02-11-1991",190,6, "Florida",4);
/* Team 5 */
INSERT INTO player (Player_FName, Player_LName, Position, Player_Age, Player_DOB, Player_Weight, Player_Height, Player_College, Team_fk) VALUES ("Charles","Stanley","QB",25,"03-12-1996",178,6,"N/A",5);
INSERT INTO player (Player_FName, Player_LName, Position, Player_Age, Player_DOB, Player_Weight, Player_Height, Player_College, Team_fk) VALUES ("Tonny","Gunk","QB",19,"02-01-2002",198,6,"Colgate",5);
INSERT INTO player (Player_FName, Player_LName, Position, Player_Age, Player_DOB, Player_Weight, Player_Height, Player_College, Team_fk) VALUES ("William","Smith","QB",25,"04-18-1997",205,6,"Bowling Green",5);

INSERT INTO standings (Wins,Losses, Points_Against, Points_For, Ties) VALUES (7,10,267,488,0);
INSERT INTO standings (Wins,Losses, Points_Against, Points_For, Ties) VALUES (16,1,512,298,0);
INSERT INTO team (Playoff_Appearences, SuperBowls, Team_Coach, Team_Name, Standings_fk) VALUES (12,3,"Chris Mann","Giants",4);
INSERT INTO team (Playoff_Appearences, SuperBowls, Team_Coach, Team_Name, Standings_fk) VALUES (3,1, "David Gettleman","Cardinals",5);

/* Team 1 */
INSERT INTO stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks, Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (360, 16, 15, 15, 15, 30, 80, 500, 72, 260,6 );
INSERT INTO stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks, Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (480, 15, 23, 12, 20, 40, 73, 475, 42, 200, 7);
/* Team 2 */
INSERT INTO stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks, Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (260, 17, 16, 15, 30, 25, 55, 900, 38, 100, 8);
/* Team 3 */
INSERT INTO stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks, Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (300, 14, 19, 5, 40, 20, 60, 1080, 87, 260, 9);
/* Team 4 */
INSERT INTO stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks, Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (400, 15, 25, 11, 50, 45, 66, 1050, 68, 270,11 );
INSERT INTO stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks, Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (450, 13, 30, 5, 15, 50, 45, 1180, 78, 350, 12);
INSERT INTO stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks, Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (280, 16, 4, 16, 25, 2, 85, 905, 36, 100, 13);
/* Team 5 */
INSERT INTO stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks, Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (315, 16, 5, 16, 33, 10, 84, 2901, 35, 110,15 );
INSERT INTO stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks, Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (260, 16, 9, 16, 35, 15, 74, 2801, 50, 130, 16);
INSERT INTO stats (Pass_Attempts, Games_Appeared, Interceptions, Games_Started, Sacks, Touchdowns, Longest_Pass, Passing_Yards, Pass_Percentage, Pass_Completions, Player_fk) VALUES (270, 12, 10, 4, 40, 18, 70, 700, 70, 190, 17);