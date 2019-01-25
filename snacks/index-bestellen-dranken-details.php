<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MySQL PHP</title>        
        <link rel="stylesheet" type="text/css" media="screen" href="css/styles-bestellen-details.css" />
        <meta charset="UTF-8">
    </head>

    <body>

    <div class="navbar-productpage debug">
        <img class="logo" src="img/logo.png" alt="De Leeuw Snacks logo">
        <ul class="navbar-productpage-styling">
            <li><a href="index-main-page.php">Home</a> </li>
            <li><a href="#">Snack van de Maand</a> </li>
            <li><a href="index-bestellen.php">Terug naar Bestellen</a> </li>
        </ul>
    </div>

<!-- FLEX -->    
        <div class="flex-wrapper">
              <!--
                <div class="titel-dranken">
                    <h1>DRANKEN</h1>
                </div> 
            -->

            <div class="dranken-details-left">
                <?php include "php/dranken-details-left.php"; ?>
            </div>

            <div class="titel-snacks">
                <h1>SNACKS</h1>
            </div>
            
            <div class="snacks">
                <?php include "php/dranken-details-right.php"; ?>
            </div>
            
        </div>
    </body>
</html>