<?php
    include "db_connection.php";        

    //$user_id = $_GET['product_id'];

    $sql_querie = "SELECT product_id, product_type, product_price, product_name, product_pic, product_description FROM products WHERE product_type = 'snacks'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="snacks">' .
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