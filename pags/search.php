<?php 
//require('lib/searchScrim.php');
?>
<h2>SEARCH PAGE</h2><br>
    
   
            
<?php

$con = mysqli_connect('localhost', 'root', '', 'leaderboards');
if(!$con){
    die('Could not connect:' .mysqli_error());
}

$showtables = mysqli_query($con, "SHOW TABLES FROM leaderboards");
while($table = mysqli_fetch_array($showtables)){
    echo($table[0] . "<br>");
}

?>
        
            
            
        