<!-- page content -->
<html>
   <head>
      <meta charset="utf-8">
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login1122.js"></script>
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login1110.js"></script>
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login290.js"></script> 
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login41535.js"></script> 
      <link rel="stylesheet" type = "text/css" href="<?php echo AD_CSS_PATH?>login/login1114.css">
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/dash1102.js"></script>
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/dash1114.js"></script>
      <script>
         $(document).ready(function()
         {	
         
        /* $('span#usrname').html('');
         $('span#usremail').html('');	
         $('span#action').html('');		
         
         var msgbox = $("#status");
         
         
         $.ajax({  
          type: "POST",  
          url: "<?php echo CLIENTLIST;?>",  
          data: "inputEmail="+"<?php echo $this->session->userdata['logged_in']['docEmail']?> ",  
          success: function(msg,data){  
         var response=$.parseJSON(msg);
         if(response.status=='sorry'){
         //alert("sdfsdfsdfsdfsd");
         $('span#usrname').text(response.message);
         $('span#usremail').text(response.message);
		 $('span#action').text(response.message);
         }else{
         $('span#usrname').html('');
         $('span#usremail').html('');
         $('span#action').html('');
         }
         
         
         }, error:function(data){
          
          
         } 
         
         }); 
         
         
         */
         
         
    
         
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
                     <div class="col-md-12">
                        <div class="container">
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h3>Dashboard</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <!-- <div class="col-md-12">
                     <ul>
                     <li><h3><div class="col-md-12">Name:<?php
                        //print_r($this->session->userdata['logged_in']['docFirstname']);
                        //print_r($this->session->userdata['logged_in']['docLastname']);?></div></h3>
                     </li>
                     
                     <li><h3>Email:<?php
                        //print_r($this->session->userdata['logged_in']['docemail']);
                        ?></h3></li>
                     <li><h3>Qualification:<?php
                        //print_r($this->session->userdata['logged_in']['docdesignation']);
                        ?></h3></li>
                     </ul>
                     </div>-->
                  <div class="row journal_entry_inputs">
				  
                     <div id="tabs" class="col-md-12 col-xs-12">
                        <ul>
                           <li>
                              <div class="col-md-6 col-xs-6">
                                 <h3><i class="fa fa-calendar"></i>Upcoming Appointments</h3>
                           </li>
                        </ul>
                        <div id="Appointments">
                         <table class="table">
                        <thead class="thead-inverse">
                           <tr>
                              <th>
                                 <h4>User Name</h4>
                              </th>
                              <th>
                                 <h4>User Email</h4>
                              </th>
							  <th>
                                 <h4>Date</h4>
                              </th>
                              <th>
                                 <h4>Time</h4>
                              </th>
                           </tr>
                        </thead>
                        <tbody>
						<?php if(isset($test1) && $test1!='')
							{
								foreach($test1 as $client){
									?>
									<tr>
									  <td>
										 <?php echo $client['drap_usr_name']?>
									  </td>
									  <td>
										 <?php echo $client['drap_usr_email']?>
									  </td>
									  <td>
										 <?php echo $client['drap_date']?>
									  </td>
									 
									  <td>
									 <?php echo $client['drap_time']?>
									  </td>
									   <td>
										 <form action="<?php echo DASHBOARD_DOCTOR_DELETE ;?>" method="POST">
										 <input type="hidden" id="ID" name="ID" value="<?php echo $client['drap_id']?>">
										 <button type="deny" class="btn btn-danger">delete</button>
									
										 </form>
									  </td>
                           </tr>
							<?php		
								}
							}?>
						</tbody>
                     </table>
						
						
						
                        <form role="form" action="<?php echo DR_APPOINTMENTS ;?>" method="POST">
                        <div class="form-group" align="center">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>edit</button>
                        </div>
                        </form>
                        </div>
                        </div>
                     </div>
                     <br><br><br><br><br>
                     <div class="clearfix"></div>
                     <div class="row x_title">
                        <div class="col-md-12">
                           <div class="container">
                              <div class="panel panel-default">
                                 <div class="panel-heading">
                                    <h3>Client List</h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <table class="table">
                        <thead class="thead-inverse">
                           <tr>
                              <th>
                                 <h4>User Name</h4>
                              </th>
                              <th>
                                 <h4>User Email</h4>
                              </th>
							  <th>
                                 <h4>Client Status</h4>
                              </th>
                              <th>
                                 <h4>Action</h4>
                              </th>
                           </tr>
                        </thead>
                        <tbody>
						<?php if(isset($test) && $test!='')
							{
								foreach($test as $client){
									?>
									<tr>
									  <td>
										 <?php echo $client['user_name']?>
									  </td>
									  <td>
										 <?php echo $client['usr_email']?>
									  </td>
									  <td>
										 <?php echo $client['user_approve']?>
									  </td>
									  <?php if($client['user_approve']=='Pending'){?>
									  <td>
									 <form action="<?php echo DASHBOARD_DOCTOR_APPROVE ;?>" method="POST">
										  <input type="hidden" id="ID" name="ID" value="<?php echo $client['user_id']?>">
										 <button type="approve" class="btn btn-primary">Approve</button>
										
										 </form>
										 <form action="<?php echo DASHBOARD_DOCTOR_DENY ;?>" method="POST">
										  <input type="hidden" id="ID" name="ID" value="<?php echo $client['user_id']?>">
										 <button type="deny" class="btn btn-danger">Deny</button>
									
										 </form>
									  </td>
									  <?php }?>
                           </tr>
							<?php		
								}
							}?>
						</tbody>
                     </table>
                  </div>
               </div>
            </div>
            <br />
         </div>
      </div >
   </body>
</html>