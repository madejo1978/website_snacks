<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <?php
        echo "test 123";
    ?>
<br>
<br>
    <p> Welcome Administator </p> 

    
    <?php
    include "db_connection.php";

    // echo for testing if data is received 
        echo $_POST["firstname"];   
        echo $_POST["lastname"];  
    
    // if data is "echo-ed", then put the data in variables 
        $firstname = $_POST["firstname"];
        $lastname  = $_POST["lastname"];
    
    // echo $firstname;

    try {
    $sql = "INSERT INTO gorillas (firstname, lastname)
            VALUES ('$firstname', '$lastname')";

        $conn->exec($sql);
        echo "New record created successfully";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
    
    ?>

</body>
</html>
