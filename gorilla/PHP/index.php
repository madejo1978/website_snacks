<?php

include "db_connection.php";

/*     echo "Hello Gorillas, echo";
    echo "<br>";
    echo "<br>";

    print_r("Hello Gorillas, print_r()");
    print_r(" test123<br>");
    print_r("<br>");
     */
    // var_dump("Hello Gorillas, var_dump()");
    // var_dump("<br>");
    // var_dump("<br>");
    
// Variables 
/* 
    $codeGorilla = "Thomas";
    $bananaCounter = 14;

    echo $codeGorilla;
    echo "<br>";
    echo "I've got " . $bananaCounter . " banana's in my treehouse.";    
  */

//Operators
    // .    String Addition
    // +	Integer Addition 
    // -	Subtraction
    // *	Multiplication
    // /	Division
    // %	Modulus (Division Remainder)
    // ++	Increment
    // --  Decrement
/* 
    $bananaCounter --;
    $bananaCounter ++;

    $codeGorilla .= " Huster";

    echo $codeGorilla;
    echo "<br>";
    echo "I've got " . $bananaCounter . " banana's in my treehouse.";
    // echo "<br>";
 */

 //Arrays

/*     $gorillas = array("Harambe", "Bokito","BennyBanana", "GerryGorilla");
    var_dump ($gorillas);

    foreach($gorillas as $gorilla){
         echo $gorilla;
         echo "<br>";
    }
         echo "<br>";

    echo count($gorillas);
    echo "<br>";

    for($i = 0; $i < count($gorillas); $i++){
    echo $gorillas[$i];
    echo "<br>";
    }
 */

//Functions met parameters

  //  function callGorilla($name = "Harambe"){
  //       echo "Yooo " . $name . " want a banana?";
    //     echo "Yooo $name want a banana?";
  //  }
    
    // callGorilla("Thomas");
    // echo "<br>";
    // callGorilla("Bokito");
    // echo "<br>";
    // callGorilla();

//Functions die iets returnen

/*      function checkMostBananas($banana1, $banana2){
        if($banana1 > $banana2){
            return $banana1;
        }else{
            return $banana2;
        }
    } 
 */
    // echo checkMostBananas(4, 5);
    // echo "<br>";
    // echo checkMostBananas(12, 5);
    // echo "<br>";

//SCOPE

// GLOBALS
    /* //$
    //global
    //static

    $kiwi = 5;
    $blueberry = 2;

    function fruitBowl(){        
       
        $mango = 8;
        echo $mango; 
        global $blueberry;
         echo $blueberry;
    }

     fruitBowl();
echo $blueberry;
    // echo $mango;

    //Mango error.
    //Kiwi geen error.
    //Blueberry geen error.
 */
    //SQL
    
   // $user_name = $_GET['id'];
     
    
    //Informatie ophalen uit HTTP REQUEST: GET OF POST: $user_name = $_GET['user_name'];
    //Connectie maken met DB
    // include "db_connection.php";
    //QUERY Opstellen met informatie uit HTTP REQUEST: GET Of POST
    //QUERY Uitvoeren
    //Feedback terug geven aan gebruiker HTTP RESPONSE.
/* 
  $sql_querie = "SELECT ID, firstname, lastname 
                   FROM gorillas 
                   WHERE firstname = 'Thomas'";
    
/* //    $sql_querie = "INSERT INTO Gorillas (firstname, lastname)
                   VALUES ('Thomas', 'Huster')";
 */
//    $sql_querie = "UPDATE Gorillas
                   SET firstname = 'Eduard', lastname = 'Huster'
                   WHERE ID = 3";

//    $sql_querie = "DELETE FROM Gorillas 
                   WHERE firstname = 'Thomas'"; */
     
     $db_result = $conn->query($sql_querie);

    //OOP,  MVC.

    //MODEL
    //VIEW
    //CONTROLLER

    //Class
 
/*     class Gorilla {
        public $firstname;
        public $lastname;
        public $age;
        //private 
        //protected 

        function __construct($_firstname, $_lastname, $_age){
            $this -> firstname = $_firstname;
            $this -> lastname = $_lastname;
            $this -> age = $_age;
        }

        function echoInfo(){
            echo $this -> firstname;
            echo $this -> lastname;
            echo $this -> age;
        }
    }
    */ 
    // create an object
    // $youngGorilla = new Gorilla();
    // $youngGorilla -> firstname = "Thomas";
    // $youngGorilla -> lastname = "Huster";
    // $youngGorilla -> age = 31;

    // echo $youngGorilla -> firstname;
    // echo "<br>";
    // echo $youngGorilla -> lastname;
    // echo "<br>";
    // echo $youngGorilla -> age;
    // echo "<br>";

    // $oldGorillas = new Gorilla("Edward", "Huster", 71);

    // echo $oldGorillas -> firstname;
    // echo "<br>";
    // echo $oldGorillas -> lastname;
    // echo "<br>";
    // echo $oldGorillas -> age;
    // echo "<br>";

    // $oldGorillas -> echoInfo();

    //HTTP REQUESTS
    //echo $_POST[]; 
    //echo $_GET[];

    //SESSIONS
    //echo $_SESSION[];

    //HTTP RESPONSE
    //JSON
    //XML

    //https://www.w3schools.com/php/default.asp
    
?>