
        var xhr = new XMLHttpRequest();
        var url = "https://restcountries.eu/rest/v2/all";
        xhr.onreadystatechange = function(){
    console.log(xhr.readyState);
                if(xhr.readyState == 4 && xhr.status==200){ 
                        console.log(xhr.response);
                        var input_api = xhr.response; 
                        var country = JSON.parse(input_api);
                //     console.log(chuck_jokes) ;
                        document.getElementById("output").innerHTML = '<img src="' + country.flag + '"></img>'; 
                        //document.getElementById("output").innerHTML = country.flag; 
                }                 
        }

        xhr.open("GET",url);                                        
        xhr.send();
        console.log(xhr);
