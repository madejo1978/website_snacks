<?php
    include "db_connection.php";        

    if(isset($_GET['product_id'])){
        $user_id = $_GET['product_id'];
    }else{
        $user_id = 1;
    }    
    
    $sql_querie = "SELECT product_id, product_type, product_price, product_name, product_pic, product_description FROM products WHERE product_id = '$user_id'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    
{                    
    echo '<div class="flex-wrapper">' .
    // Left column     
       
        // Picture
        '<div class="snacks-details-left">' .
            '<img src="' . $row['product_pic'] . '"alt="' . '" style="width:30%">' .

        '</div>'.

    // Right column          
        
        // Name
        '<div class="snacks-details-right">' .
            '<h1>' . $row['product_name'] . '<h1>' .
        // Price
            '<h3>' . '€' . $row['product_price'] . '<h3>' .
            '<p>' . $row['product_description'] . '<p>' .
        '</div>' . 
    
    '</div>' ; 
}       

    $conn = null;
?>