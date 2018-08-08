var usernameSelected = $('#username');
        var password = $('#password');
        var loginSubmit = $('#loginSubmit');

var http = new XMLHttpRequest();
var url = "../../weplant/entities/adminLogin/get.php";


$(loginSubmit).on('click',function(e){
	e.preventDefault();
	
http.open("POST", url+"?username="+usernameSelected.val()+"&password="+password.val(), true);


http.onreadystatechange = function() {
     if (http.readyState == 4 && http.status == 200) {
     	 console.log(http.responseText);
       var myResponse = JSON.parse(http.responseText);
       if(myResponse["success"] == true) location.href ="./index.html"
       else console.log("error")
    }
}
http.send();
})

