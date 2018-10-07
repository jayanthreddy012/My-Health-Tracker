
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>
<script>
$(document).ready(function () {
	$('#users').validate({ // initialize the plugin
        rules: {
            user_id: {
                required: true,
                email:true
            },
            user_password: {
                required: true,
            },

        },
      submitHandler: function (form) { // for demo
          //$( "#users  " ).submit();
		    $.ajax({
           url: form.action,
           type: 'POST',
           data: $(form).serialize(),
           success: function(response, status) {
              // $('#users')[0].reset();
			  var resposedata=JSON.parse(response);
			  //console.log(resposedata.status);
               if(resposedata.status=='success'){
				   window.location="http://localhost/mht/index.php/welcome/dashboard";
			   }else{
				alert("sorry");   
			   }
			   
			},error:function(data){
				console.log(data);
			}            
			})
		  
        }
    });


});
</script>
</head>

<body>
<form name="users" id="users" action="index.php/welcome/sendemail" method="POST">
<br><input type="email" name="user_id" placeholder="user id"id="user_id"><br>
<br><input type="password" name="user_password" id="user_password" placeholder="user password"><br>
<br><input type="submit" value="submit">
</body>



</html>
