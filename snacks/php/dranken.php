<?php
    include "db_connection.php";        

    $sql_querie = "SELECT product_id, product_type, product_price, product_name, product_pic, product_description FROM products WHERE product_type = 'dranken'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {                    
        echo '<div class="dranken">' .
             '<a href="index-bestellen-snacks-details.php?product_id=' . $row['product_id'] . '">' .
             '<img src="' . $row['product_pic'] . '" alt="' . ' ' . '" style="width:100%">' .
             '</a>' .
             '<h1>' . ' ' . ' ' . ' ' . '</h1>' .
             '<p class="title">' . '</p>' .           
             '<p></p>' .
             '</div>';  
    }       

    $conn = null;
?>