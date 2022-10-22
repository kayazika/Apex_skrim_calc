<?php 
include('login_verify.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style_base.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Skrim Calculator</title>
</head>
<body>
    <header>
        <div class="box-logo">
            <img class="img-logo" src="img/logoApex.png" alt="">
        </div>
        <div class="box-title">
            <h1 class="text-title">Apex Skrim Calculator</h1>
        </div>

        <nav class="box-nav">
            <ul class="box-list">
                <li class="item-list"><a href="/Apex_skrim_calc/account.php">Search</a></li>
                <li class="item-list"><a href="/Apex_skrim_calc/account.php">Popular</a></li>
                <li class="item-list"><a href="/Apex_skrim_calc/account.php">Account</a></li>
                <li class="item-list"><a href="/Apex_skrim_calc/logout.php">Logout</a></li>

            </ul>
        </nav>
    </header>

    <main>
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
    </main>
    
</body>
</html>