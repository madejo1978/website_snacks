<?php
    include "db_connection.php";        

    $sql_querie = "SELECT product_id, product_type, product_price, product_name, product_pic, product_description FROM products";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="card">' .
             '<a href="?user_ID=' . $row['product_id'] . '">' .
             '<img src="' . $row['product_pic'] . '" alt="' . $row['product_name'] . '" style="width:30%">' .
             '</a>' .
             '<h1>' . $row['product_name']  . ' ' . $row['product_price'] . '</h1>' .
             '<p class="title">' . $row['product_description'] . '</p>' .           
             '<p>BESTMILKSHAKE THERE IS</p>' .
             '</div>';  
    }       

    $conn = null;
?>