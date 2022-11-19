<?php
include('lib/login_verify.php');
include('lib/logout.php');

if(isset($_POST['logout'])){
    logout();
}

?>
        <h3>Welcome <?php echo $_SESSION['user'];?></h3>
        
        
        
        <form method="post">
            <input type="Submit" name="logout" value="Logout">
        </form><br>
        
        <h2>You Leaderboard</h2>
       <table class=""box-table>
            <tr>
                <td>Rank</td>
                <td>Team</td>
                <td>Kill</td>
                <td>Points</td>
            </tr>
            
            <?php
            $con = mysqli_connect("localhost", "root", "","leaderboards");
            $result = mysqli_query($con, "SELECT * FROM `pbo_beta` ORDER BY points DESC, kills DESC");
            $ranking = 1;
            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<td>{$ranking}</td>
                    <td>{$row['team']}</td>
                    <td>{$row['kills']}</td>
                    <td>{$row['points']}</td><tr>";
                    $ranking++;
                }
            }
            ?>
        </table>
        
