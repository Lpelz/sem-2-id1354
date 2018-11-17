<?php
require('dbconnect.php');
session_start();

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];            
   
    if(empty($username)|| empty($password)){
       $_SESSION['error']= 'invalid username or password';
       header('Location: loginpage.php'); 
       exit();
    }          

    $sql = "SELECT * FROM user WHERE password='$password' AND username='$username'";
    $result = mysqli_query($connection,$sql);
    $rows = mysqli_num_rows($result);
     
    if($rows==1)
    {     
       $_SESSION['username']= $username;
       header("Location: ".$_SESSION['page']);
       exit();
    }
    else
    {
        $_SESSION['error']= 'invalid username or password';
        header('Location: loginpage.php'); 
        exit();
    }
}
?>

