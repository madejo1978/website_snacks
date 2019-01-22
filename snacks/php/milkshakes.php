<!DOCTYPE html>
<html>
    <head>
        <title>MySQL PHP</title>        
        <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    </head>

    <body>
    <?php
    include "db_connection.php";   
    
    $s_id=$_GET ['product_id']; 

    $sql_querie = "SELECT product_id, product_type, product_price, product_name, product_pic, product_description FROM products WHERE product_id = '$s_id'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="card">' .
             '<a href="?product_id=' . $row['product_id'] . '">' .
             '<img src="../' . $row['product_pic'] . '" alt="' . $row['product_name'] . '" style="width:30%">' .
             '</a>' .
             '<h1>' . $row['product_name']  . ' ' . $row['product_price'] . '</h1>' .
             '<p class="title">' . $row['product_description'] . '</p>' .           
             '<p>BESTMILKSHAKE THERE IS</p>' .
             '</div>';  
    }       

    $conn = null;
?>
            

        </div>
    </body>
</html>