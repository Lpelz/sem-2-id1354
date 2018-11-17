<?php
  require('dbconnect.php');
  session_start();
  
    if (isset($_POST['delete_x'])) {
      $timestamp = $_POST['timestamp'];
             
      $sql = "DELETE FROM comments WHERE timestamp = '$timestamp'";
      mysqli_query($connection,$sql); 
      header("Location: ".$_SESSION['page']);
    }
?>
