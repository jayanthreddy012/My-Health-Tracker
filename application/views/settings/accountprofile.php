<!-- page content -->
<html>
   <head>
      
      <meta charset="utf-8">
 <link rel="stylesheet" type = "text/css" href="<?php echo AD_CSS_PATH?>login/login1114.css">
 <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/dash1102.js"></script>
  <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/dash1114.js"></script>
  <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login1110.js"></script>

  <script>

        $(document).ready(function()
{	
$("#inputEmail").blur(function() 
{
$('span#status').html('');	
var inputEmail = $("#inputEmail").val();
var msgbox = $("#status");

$("#status").html('Checking availability...');

$.ajax({  
    type: "POST",  
    url: "<?php echo REGVALIDATE1;?>",  
    data: "inputEmail="+ inputEmail,  
    success: function(msg,data){  
	var response=$.parseJSON(msg);
	if(response.status=='sorry'){
		//alert("sdfsdfsdfsdfsd");
		$('span#status').text(response.message);
	$('.enableOnInput').prop('disabled', true);
	
	}else{
		
		
		$('span#status').html('');
		
		$('.enableOnInput').prop('disabled', false);
		
	}
   
   
   }, error:function(data){
	   
	   
   } 
   
  }); 
  




return false;
});
  $(function() {
    $( "#tabs" ).tabs();
  });
});
  
  </script>
   </head>
   <body>
      
         <div class="right_col" role="main">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-6">
                           <h1>Account Profile</h1><hr>
                        </div>
						<div class="clearfix"></div>
						<div id="tabs" class="col-md-12 col-xs-12">
  <ul>
  <li><div class="col-md-6 col-xs-6"><a href="#Practitioner"><i class="fa fa-male"></i>My Practitioner</a></div></li>
    
   
    
  </ul>
 

  <div id="Practitioner">
   <form role="form" action="<?php echo USER_APPOINTMENTS_REQ;?>" method="POST">
  <div class="form-group">
      <label for="inputEmail" class="control-label">Email</label>
      <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
      <div class="help-block with-errors"></div>
	  <span id="status"></span>
      </div>
   
   <div class="form-group" align="center">
               <button type="submit" id="button" class="btn btn-primary enableOnInput"><i class="fa fa-add"></i>ADD</button>
            </div>
  </form>
  </div>
 
 
</div>
 
						
						
						
						
						
                     </div>
                     
                     
                    
                     
                    
                  </div>
               
			  
					 </div>
            </div>
           
            <br />
         </div>
         <div >
      
   </body>
</html>