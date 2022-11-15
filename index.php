<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style_base.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/Apex_skrim_calc/">
    <title>APEX SCRIM ORG</title>
</head>
<body>
    <header>
        <div class="box-logo">
            <img class="img-logo" src="./img/logoApex.png" alt="">
        </div>
        <div class="box-title">
            <h1 class="text-title">Apex Scrim Calculator</h1>
        </div>
        <nav class="box-nav">
            <ul class="box-list">
                <li><a href="home">Index</a></li>
                <li><a href="search">search</a></li>
                <li><a href="popular">popular</a></li>
                <li><a href="account">account</a></li>   
            </ul>
        </nav>
    </header>

    <main>
        
        <?php 
            $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'home';
            $explode = array_filter(explode('/', $url));

            $pags = 'pags/';
            $ext = '.php';

            if(file_exists($pags.$explode['0'].$ext)){
                include($pags.$explode['0'].$ext);
            }else{
                echo "pagina não encontrada";
            }          
        ?>
   
    </main>
    
</body>
</html>