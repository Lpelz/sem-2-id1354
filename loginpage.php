<?php
session_start();
if(isset($_SESSION['username'])){
    header("Location: ".$_SESSION['page']); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>Login page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id = "home">
        <div class ="navbar">
        <ul>      
        <li><a href="index.php"><img alt="Home" src="images/homeicon.png"><p>Home page</p></a></li>
        <li><a href="meatballs.php"><img  alt="Meatballs" src="images/meatballsicon.png"><p>Meatballs recipe</p></a></li>
        <li><a href="pancakes.php"><img  alt="Pancakes" src="images/pancakeicon.png"><p>Pancakes recipe</p></a></li>
        <li><a href="calendar.php"><img  alt="Calendar" src="images/calendaricon.png"><p>Calendar</p></a></li>
        <li><a class= "current" href="loginpage.php"><img  alt="Login" src="images/loginicon.png"><p>Login page</p></a></li>
        <?php
        if(isset($_SESSION['username']))
        {
          include('loggedin.php');
        }
        ?>
        </ul>
        </div>
        <br><br>
        <div class ="homepage">            
            <form class ="loginpage" action="login.php" method="post">
                <label>Enter Username:</label><br>
                <input name ="username" placeholder ="username" type = "text"><br>
                <label>Enter Password:</label><br>
                <input name = "password" placeholder="password" type = "text"> <br>
                <input name ="submit" type="submit" value="Log in">
                <br><b>
                 <?php if(isset($_SESSION['error'])){
                  echo $_SESSION['error'];
                  unset($_SESSION['error']);
                 }?> </b>
            </form>          
        </div>
    </body>
</html>

