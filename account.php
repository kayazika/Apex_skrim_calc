
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
                <li class="item-list"><a href="#">Search</a></li>
                <li class="item-list"><a href="#">Popular</a></li>
                <li class="item-list"><a href="#">Account</a></li>

            </ul>
        </nav>
    </header>

    <main>
        <section class="box-section">
            <form method="POST" action="login.php"  class="box-form">
                <h1 class="box-item-form" >Login</h1>
                <label class="box-item-form" for="username">Username</label><br>
                <input class="box-item-form" name="user" type="text"><br>
                <label class="box-item-form" for="password">Password</label><br>
                <input class="box-item-form" name="pass" type="password"><br>
                <button type="input">GO</button>
            </form>
        </section>

    </main>
    
</body>
</html>