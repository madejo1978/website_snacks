<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MySQL PHP</title>        
        <link rel="stylesheet" type="text/css" media="screen" href="css/styles-bestellen.css" />
        <meta charset="UTF-8">
    </head>

    <body>

    <div class="navbar-productpage">
        <img class="logo" src="img/logo.png" alt="De Leeuw Snacks logo">
        <ul class="navbar-productpage-styling">
            <li><a href="index-main-page.php">Home</a> </li>
            <li><a href="#">Snack van de Maand</a> </li>
            <li><a href="#">Nieuws</a> </li>
        </ul>
    </div>

<!-- FLEX -->    
        <div class="flex-wrapper">
                <div class="titel-dranken">
                    <p>DRANKEN</p>
                </div> 
            
            <div class="dranken">
                <?php include "php/dranken.php"; ?>
            </div>

            <div class="titel-snacks">
                <p>SNACKS</p>
            </div>
            
            <div class="snacks">
                <?php include "php/snacks.php"; ?>
            </div>
        </div>
    </body>
</html>