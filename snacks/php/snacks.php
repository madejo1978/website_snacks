<?php
    include "db_connection.php";        

    //$user_id = $_GET['product_type'];

    $sql_querie = "SELECT product_id, product_pic FROM products WHERE product_type = 'snacks'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="snacks">' .
             '<a href="snacks.php?product_id=' . $row['product_id'] . '">' .
             '<img src="' . $row['product_pic'] . '" alt="' . ' ' . '" style="width:100%">' .
             '</a>' .
             '<h1>' . ' ' . ' ' . ' ' . '</h1>' .
             '<p class="title">' . '</p>' .           
             '<p></p>' .
             '</div>';  
    }       

    $conn = null;
?>