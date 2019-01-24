<?php
$category = $_GET['category'];
%value = $_GET['value'];

    include "db_connection.php";        

    $sql_querie = "SELECT product_id, product_name, product_pic FROM products" WHERE $category='value'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="spareribs">' .
             '<a href="?user_ID=' . $row['product_id'] . '">' .
             '<img src="' . $row['product_pic'] . '" alt="' . ' ' . '" style="width:100%">' .
             '</a>' .
             '<h1>' . ' ' . ' ' . ' ' . '</h1>' .
             '<p class="title">' . '</p>' .           
             '<p></p>' .
             '</div>';  
    }       

    $conn = null;
?>