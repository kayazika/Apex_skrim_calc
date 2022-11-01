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
                <li class="item-list"><a href="search.php">Search</a></li>
                <li class="item-list"><a href="popular.php">Popular</a></li>
                <li class="item-list"><a href="account.php">Account</a></li>

            </ul>
        </nav>
    </header>

    <main>
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

    </main>
    
</body>
</html>