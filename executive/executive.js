

var http = new XMLHttpRequest();
var url = "../../entities/executive/get.php";

$( document ).ready(function() {
    console.log( "ready!" );
    http.open("GET", url, true);

http.onreadystatechange = function() {
     if (http.readyState == 4 && http.status == 200) {
     	 console.log(http.responseText);
       var myResponse = JSON.parse(http.responseText);
    }
}
http.send();
});

$(loginSubmit).on('click',function(e){
	e.preventDefault();
	
http.open("GET", url, true);


http.onreadystatechange = function() {
     if (http.readyState == 4 && http.status == 200) {
     	 console.log(http.responseText);
       var myResponse = JSON.parse(http.responseText);
    }
}
http.send();
})

