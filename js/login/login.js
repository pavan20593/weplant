$(document).ready(function () {
        var usernameSelected = $('#username');
        var password = $('#password');
        var loginSubmit = $('#loginSubmit')


        loginSubmit.click(function() {
          console.log("LOGIN CLICK");
          // var url = "http://localhost/weplant/entities/adminLogin/get.php";
          var url = "../../weplant/entities/adminLogin/get.php";
          var formData = {
            'username' : usernameSelected.val(),
            'password':password.val(),
          };
          $.ajax({
            type : 'POST',
            url : url,
            data : formData,
            dataType : 'JSON',
            encode : true,
            success: function (response, status, xhr) {
              debugger;
              if (response.result) {
                console.log('success');
              }else{
                console.log('success else');
              }
            },
            error: function (xhr, status, error) {
              console.log('failure');
            }
          });
        });
     });
