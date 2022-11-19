<?php 
$name = 'aciD';

$con = mysqli_connect("localhost", "root", "","leaderboards");
$sql = mysqli_query($con, "CREATE TABLE IF NOT EXISTS {$name} (
    id        INT AUTO_INCREMENT PRIMARY KEY,
    team      VARCHAR (255)        DEFAULT NULL,
    kills     INT                 DEFAULT NULL,
    points    INT                 DEFAULT NULL");

?>