<?php 
            $dbname = 'liderboard';
            $con = mysqli_connect('localhost', 'root', '');

            if (!$con) {
                echo 'Could not connect to mysql';
                exit;
            }
            
            $result = mysqli_query($con, "SHOW TABLES FROM $dbname");
            
            if (!$result) {
                echo "DB Error, could not list tables\n";
                echo 'MySQL Error';
                exit;
            }
            
            while ($row = mysqli_fetch_row($result)) {
                echo "<td>{$row[0]}</td><br>";
            }
            
            mysqli_free_result($result);
        
?>