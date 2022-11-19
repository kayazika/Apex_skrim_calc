<?php

    $con = mysqli_connect("localhost", "root", "";
    mysql_select_db("leaderboards");

    $tables = mysql_list_tables("leaderboards");
    print "";
    print "=== Scrim List ===";
    while (list($nome) = mysql_fetch_array($tables)){
        print $nome;

    }

mysql_close($con);

?>