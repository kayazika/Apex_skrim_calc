        <?php 
        include('../lib/login_verify.php')
        ?>
        <h2>You Leaderboard</h2>
       <table class=""box-table>
            <tr>
                <td>Rank</td>
                <td>Team</td>
                <td>Kill</td>
                <td>Points</td>
            </tr>
            <?php 
            $con = mysqli_connect("localhost", "root", "","liderboard");

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
        
