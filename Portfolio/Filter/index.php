<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles-index.css" />        

    <!--- <script src="js/main.js"></script> ---->
</head>
<body> 
    
<div class="navigation-container">
        <div class="navigation-menu"></div>
        <div class="navigation-center"> 
        <div class="filter-container">
        <div class="filter-right">
        </div>
    </div>
</div>

        <div class="navigation-icons" >
            <div class="filter-dropdown">
            <button id="button-signin" class="button-dropdown">Sign in</button>  
                <div id="signin-dropdown" class="dropdown-content">
                    <div class="login-container">          
                        <div class="login-existing">
                            <form action="php/login-existing/loginFormExisting.php" method="POST">
                                <h1></h1>
                                <h1>Sign In<br>&nbsp<br><br></h1>
                                <label for="mail"></label>
                                <input type="email" id="mail" name="customers_email" autofocus placeholder="Your e-mail">
                                <label for="password"></label>
                                <input type="password" id="password" name="customers_password" placeholder="Your password">
                                <br>
                                <br>
                                <button type="submit">Sign In</button>
                                <input type="button" onclick="location.href='index-login.php';" value="Create Account"/>   
                            </form>    
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <div class="main-page">          
        <div class="main-page-text">
        <h1>Something is MISSING!<br></h1></div>
        <div class="main-page-button">    
        <button>SHOW me the BAGS</button></div>
    </div>

<button id="show-all">Show All Bags</button>

<button id="show-back">Show Back Bags</button>



<!---
    <form>
         <button type="submit" formaction="php/product-row2.php">Click me</button>
    </form>
---->

    <div class="filter-container">
        <div class="filter-left">MEN'S BAGS | </div>
        <div class="filter-center"></div>
        <div class="filter-right">
            <div class="filter-dropdown">
            <button id="button-category">category</button>  
                <div id="category-dropdown" class="dropdown-content">
                    <a input onclick="php/product/row2.php">Back Bags</a>
                    <a href="#">Belt Bags</a>
                    <a href="#">Duffle Bags</a>
                    <a href="#">Messenger Bags</a>
                    <a href="#">Totes</a>
                </div>  
            </div>
        </div>
    </div>

    

    <div class="product-container">
        <div id="product-row-1">
            </div>

<!----        <div class="product-row2">
            <?php include "php/product-row2.php"; ?>
        </div>
        <div class="product-row3">
            <?php include "php/product-row3.php"; ?>
        </div>
        <div class="product-row4">
            <?php include "php/product-row4.php"; ?>
        </div>
        <div class="product-row5">
            <?php include "php/product-row5.php"; ?>
        </div>
    --->
    </div>

    
<script>
///////////////////
// Dropdown login
/////////////////// 
button_signin = document.getElementById("button-signin").
onclick = function() {myFunction1()};

function myFunction1() {
document.getElementById("signin-dropdown").classList.toggle("show");
}

////////////////////////
// Dropdown filter bags
////////////////////////
button_category = document.getElementById("button-category").
onclick = function() {myFunction2()};

function myFunction2() {
document.getElementById("category-dropdown").classList.toggle("show");
}

////////////////////////
// AJAX
////////////////////////

// Activate buttons with EventListener
document.getElementById("show-all").addEventListener ("click", showAll);
// document.getElementById('show-back').addEventListener("click", showBack);

function showAll(url, outputData){
 console.log(sort-all);  

    // Create XHR object
    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", URL, true); 
    console.log("READYSTATE: ", xhr.readyState);  
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:  
        }
    }

    xhr.send();  
};

    function showData(data){
    var div = document.getElementsById("product-row-1")
    div[0].innerHTML = data.responseText;
    console.log(data.responseText);     
}
showAll("product-all.php", showData)// is om alles op het begin weer te geven

function sortApple(){
showAll("product-row4.php", showData)// hier gebruik je de showAll en vul je een andere link in. 
//
}
 // function sortSamsung(){
 //    showAll("product-row5.php", showData)
  //}
   



</script>

</body>
</html>