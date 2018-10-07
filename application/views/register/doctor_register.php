

<!-- page content -->
<html>
   <head>
     <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login1122.js"></script> 
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login1110.js"></script> 
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login290.js"></script> 
<script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login41535.js"></script>  
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/loginv1110.js"></script>
	   <link rel="stylesheet" type = "text/css" href="<?php echo AD_CSS_PATH?>login/login1114.css">
     
     <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/dash191.js"></script>
	  <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/dash1114.js"></script>
	  <script>
        $(document).ready(function()
{	
$("#inputEmail").blur(function() 
{
$('span#status').html('');	
var inputEmail = $("#inputEmail").val();
var msgbox = $("#status");

if(inputEmail.length > 4)
{
$("#status").html('Checking availability...');

$.ajax({  
    type: "POST",  
    url: "<?php echo REGVALIDATE;?>",  
    data: "inputEmail="+ inputEmail,  
    success: function(msg,data){  
	var response=$.parseJSON(msg);
	if(response.status=='sorry'){
		//alert("sdfsdfsdfsdfsd");
		$('span#status').text(response.message);
		$('.enableOnInput').prop('disabled', true);
		//$('#btn').hide();
		
	}else{
		$('span#status').html('');
		$('.enableOnInput').prop('disabled', false);
		//$('#btn').show();
	}
   /*$("#status").ajaxComplete(function(event, request){ 
    if(msg == 'OK')
    { 
    
        $("#inputEmail").removeClass("red");
        $("#inputEmail").addClass("green");
        
    }  
    else  
    {  
         $("#inputEmail").removeClass("green");
         $("#inputEmail").addClass("red");
        msgbox.html(msg);
    }  
   
   });*/
   
   
   }, error:function(data){
	   
	   
   } 
   
  }); 
  


}
else
{
$("#inputEmail").addClass("red");
$("#status").html('<font color="#cc0000">Please nter atleast 5 letters</font>');
}
return false;
});
/*
$('#btn').click(){
  $.ajax({  
    type: "POST",  
    url: "<?php echo ADD_USER;?>",  
    data: {"inputEmail="+ inputEmail,  
           "inputFirstname="+inputFirstname,
		   "inputLastname="+inputLastname,
		   "inputPassword="+inputPassword,
		   "inputdateofbirth="+inputdateofbirth,
		   "quantity="+quantity,
		   "inputAddress="+inputAddress,
		   "inputCountry="+inputCountry,
		   "inputState="+inputState,
		   "inputCity="+inputCity,
		   
		   }
	success: function(msg,data){  
	var response=$.parseJSON(msg);
	if(response.status=='sorry'){
		//alert("sdfsdfsdfsdfsd");
		$('span#suc').text(response.message);
		
		//$('#btn').hide();
		
	}else{
		$('span#suc').html('');
		
		
	}
   
   
   
   }, error:function(data){
	   
	   
   } 
   
  }); 
 
} */
 
 $( "#inputdateofbirth" ).datepicker({
    dateFormat : 'yy/mm/dd',
             changeMonth: true,
      changeYear: true,
            yearRange: '-100y:c+nn',
            maxDate: '-1d'
    });
}); 
		 
		 
		 

            $(document).ready(function () {
           //called when key is pressed in textbox
           $("#quantity").keypress(function (e) {
              //if the letter is not digit then display error and don't type anything
              if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                 //display error message
                 $("#errmsg").html("Digits Only").show().fadeOut("slow");
                        return false;
             }
            });
         }); 
            
      </script>
	  
   </head>
   <body>
      <form data-toggle="validator" role="form" action="<?php echo ADD_DOCTOR;?>" method="POST">
         <div class="right_col" role="main">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph">
                     <h1 align="left" class="col-md-6"><a href="<?php echo DOCTOR;?>">login</a></h1>
                     <h1 align="center" class="col-md-6">register</h1>
                     <div class="clearfix"></div>
      <form data-toggle="validator" role="form" action="">
      <div class="form-group">
      <div class="col-sm-6">
	  <span id="suc">
	  
	  </span>
      <label for="inputFirstname" class="control-label" >Firstname</label>
      <input type="text" class="form-control" name="inputFirstname" id="inputFirstname" placeholder="Firstname"  required>
      </div>
      <div class="col-sm-6">
      <label for="inputLastname" class="control-label" class="col-sm-6">Lastname</label>
      <input type="text" class="form-control" name="inputLastname" id="inputLastname" placeholder="Lastname"required>
      </div>
      </div>
      <div class="clearfix"></div>
      <div class="form-group">
      <label for="inputEmail" class="control-label">Email</label>
      <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
      <div class="help-block with-errors"></div>
	  <span id="status"></span>
      </div>
      <div class="clearfix"></div>
      <div class="form-group">
      <label for="inputPassword" class="control-label">Password</label>
      <div class="form-group">
      <div class="col-sm-6">
      <input type="password" data-minlength="6" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password" required>
      <div class="help-block">Minimum of 6 characters</div>
      </div>	
      <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
      <div class="help-block with-errors"></div>
      </div>
      </div>
      </div>
      <div class="clearfix"></div>
  
      <div class="clearfix"></div>
      <div class="form-group">
      <label for="inputAddress" class="control-label " >Address:</label>
      <input type="textarea" class="form-control" name="inputAddress" id="inputAddress" placeholder="Address"required>
      </div>
      <div class="clearfix"></div>
      <div class="form-group">
      <label for="inputCountry" class="control-label " >country:</label>
      <input type="textarea" class="form-control" name="inputCountry" id="inputCountry" placeholder="country"required>
      </div>
      <div class="clearfix"></div>
      <div class="form-group">
      <label for="inputState" class="control-label " >State:</label>
      <input type="textarea" class="form-control" name="inputState" id="inputState" placeholder="State"required>
      </div>
      <div class="clearfix"></div>
      <div class="form-group">
      <label for="inputCity" class="control-label " >City:</label>
      <input type="textarea" class="form-control" name="inputCity" id="inputCity" placeholder="City"required>
      </div>
	  <div class="clearfix"></div>
      <div class="form-group">
      <label for="inputCity" class="control-label " >Type of designation:</label>
      <input type="textarea" class="form-control" name="designation" id="designation" placeholder="designation"required>
      </div>
	  <div class="clearfix"></div>
      <div class="form-group">
      <label for="inputCity" class="control-label " >Practice Name:</label>
      <input type="textarea" class="form-control" name="PracticeName" id="PracticeName" placeholder="PracticeName"required>
      </div>
      <div class="clearfix"></div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary enableOnInput" id="btn">SAVE</button>
      </div>
      </form>
      </div>
      </div>
      </div>
      <br />
      </div>
      </form>
   </body>
</html>

