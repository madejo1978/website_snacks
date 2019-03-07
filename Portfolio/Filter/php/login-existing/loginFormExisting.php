<?php
    include "db_connect.php";

// the second column is delivered from the HTML. The PHP receives it and puts them in variables (first column)
// you can only put them in variables if the method is corresponding with the HTML (POST or GET)
    $customers_email = $_POST['customers_email'];
    $customers_password = $_POST['customers_password'];

// first colomn is the SQL-table, second are the variable set in this PHP (above)
    $database_query = "SELECT customers_firstname
               FROM customers 
               WHERE customers_email = '$customers_email' 
               AND customers_password = '$customers_password'";

    $db_result = $db_connection->query($database_query);

// rowcount is used here to check if the e/mail already exists, if not it will show the customers firstname
    if ($db_result->rowCount() != 0){
        foreach($db_result as $row){
            $firstname = $row['customers_firstname'];
        }
        
        echo "Welcome " . $firstname;
    }
    else 
    {
        echo 'Your e-mail or password is not correct';
        // header("location:login.php?et=1;");
    
    // header verwijst naar hij moet inloggen
    // header("Location: index.html");
    }
/*
    function redirect($location){

        return header("Location: $location ");
        }
        if(mysqli_num_rows($query) == 0) {

            set_message("Your Password or Username are wrong");
            redirect("login.php");
            
            
            } else {
            
            $_SESSION['username'] = $username;
            redirect("admin");
            
                     }
*/
?>