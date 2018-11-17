<?php
   require 'dbconnect.php';
           
    $page =  $_SESSION['page'];
    $sql = "SELECT * FROM comments where page='$page'";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        
    if(isset($_SESSION['username']) && $_SESSION['username']==$row['writer']){    
          echo '<li>' . htmlspecialchars($row['comment']) .
          '<form class="delete" action="deleteComment.php" method="post"><input name="delete"type="image"'
          . ' src="images/deletionicon.png"><input type="hidden" name="timestamp" value="'
          .$row['timestamp'].'"></form><hr><p>'. 
          ' Written by <b>' . htmlspecialchars($row['writer']) . '</b></p></li>';
    }
    else{
           echo '<li>' . htmlspecialchars($row['comment']) . '<hr><p>'. 
            ' Written by <b>' . htmlspecialchars($row['writer']) . '</b></p></li>';
        }

    }


