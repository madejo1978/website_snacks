// Translator
var xhr = new XMLHttpRequest();
var url = "https://api.funtranslations.com/translate/yoda.json";
xhr.onreadystatechange = function(){
    console.log(xhr.readyState);
 
    }                                 

xhr.open("POST",url);                                        
xhr.send();
console.log(xhr);