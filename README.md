# soccer-laravel

## Intro to Project:

I created this Project since I am passionate about soccer and also the Champions League is in process. The idea of this Project is to provide information about **Leagues**, **Teams** and soccer **Players**, so any user without registering will be able to see information about each of these. However, there is an **authentication** feature that will limit no registered user from editing and deleting records. Additionally, this project has **CRUD**, **3 tables** and the use of **JOIN**.

## Features and database:

This Project has 3 Tables (**Leagues**, **Teams** and **Players**) which are connected to each other:

*   **Leagues and Teams (1-M Relationship)**. The **Leagues** table presents the following columns: 'league_name', 'country', 'season', 'start_date', 'end_date', 'leagueURL'. While the **Team** table presents 'team_name', 'foundation_date', 'country', 'stadium_name', 'teamLogo', 'league_id'. The **league_id** column will be the one that refers to which **League** each Team belongs to.
    
*   **Teams and Players (1-M Relationship)**. The **Teams** table will have a 1 to Many relationship with the **Players** Table which has these columns: 'fname', 'lname', 'age', 'shirt_number', 'imageURL', 'country', 'team_id'. The **team_id** will be the one that indicates which **Team** each **Player** belongs to.
    
*   Users will be able to have access to the list (**Read**) of Leagues, Teams and Players, in addition to being able to (**Read**) see the details of each League. However, this Project has **authentication** in which the user must register to be able to **Create**, **Update** or **Delete** a League. If the user is not registered, the page will redirect you to the **login Page**.
    
*   I made **1 JOIN** to be able to print the **League to which the Team belongs**, this can be seen on the Teams page, also on the Players page I made **2 Joins** to be able to illustrate **which League and which Team each soccer Player belongs to**. To do this I used **foreignId** in the Teams and Player migration to be able to generate the 1-M relationships.
    
*   I populate the information through the *seeder*, once I implemented the League table and its CRUD module I *installed breeze and added authentication*. After verifying that the authentication was correct, I proceeded to implement Teams and its foreignId as well as Players and its foreignId
    

## Difficulties:

It was a little complicated to start the Project but with the help of the documentation given by the professor it was easier to make it work. The most complicated thing was to carry out the **JOIN** since I wanted to implement it. For this I used the **DB Class**, here one example: 

```
    $teams = DB::select( 
    'SELECT teams.*, leagues.league_name FROM teams JOIN leagues ON teams.league_id = leagues.id'); 
    return view('teams.index', ['teams' => $teams]); 
```

## Thoughts on Laravel:

I actually liked Laravel a lot and I really liked the course. Laravel can have several folders and we have to be moved from one file to another but I really liked Laravel. With the help of the documentation, my notes taken in class and after doing the labs in class it was easier since I already had more knowledge and understanding of how to complete the task.

## User Flow:
