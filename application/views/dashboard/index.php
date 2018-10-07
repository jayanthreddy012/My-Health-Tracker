<!-- page content -->
<html>
   <head>
      
      <meta charset="utf-8">
  
  <link rel="stylesheet" type = "text/css" href="<?php echo AD_CSS_PATH?>login/login1114.css">
  <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/dash1102.js"></script>
  <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/dash1114.js"></script>
 
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
    $(function() {
    $( "#tabs1" ).tabs();
  });
  </script>
  <style>

  </style>
   </head>
   <body>
      
         <div class="right_col" role="main">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-6">
                           <h1>Dashboard</h1><hr>
                        </div>
						<div class="clearfix"></div>
						<div id="tabs" class="col-md-12 col-xs-12">
  <ul>
    <li><div class="col-md-4 col-xs-4"><a href="#Diet"><i class="fa fa-clock-o"></i>Diet Plan</a></h3></li>
    <li><div class="col-md-4 col-xs-4"><a href="#Appointments"><i class="fa fa-calendar"></i>Appointments</a> </h3></li>
    <li><div class="col-md-4 col-xs-4"><a href="#Practitioner"><i class="fa fa-male"></i>My Practitioner</a></div></li>
  </ul>
  <div id="Diet">
    <table class="table">
                        <thead class="thead-inverse">
                           <tr>
                              <th>
                                 <h4>Foods To Be Added</h4>
                              </th>
                              
                           </tr>
                        </thead>
                        <tbody>
						<?php if(isset($test2) && $test2!='')
							{
								foreach($test2 as $client){
									?>
									<tr>
									  <td>
										 DATE:<?php echo $client['ftba_date']?>
									  </td>
									  <td>
										 TIME:<?php echo $client['ftba_time']?>
									  </td>
									  <td>
										 FOOD:<?php echo $client['ftba_foodingredients']?>
									  </td>
									 <?php if(isset($client['ftba_comments'])){?>
									  <td>
									 COMMENTS:<?php echo $client['ftba_comments']?>
									  </td>
									  <?php		
								}
							?>
									   <td>
										 <form action="<?php echo DASHBOARD_FTBA_DELETE ;?>" method="POST">
										 <input type="hidden" id="ID" name="ID" value="<?php echo $client['ftba_id'];?>">
										 <button type="deny" class="btn btn-danger">delete</button>
									
										 </form>
									  </td>
                           </tr>
							<?php		
								}
							}?>
						</tbody>
                     </table>
					 <table class="table">
                        <thead class="thead-inverse">
                           <tr>
                              <th>
                                 <h4>Foods To Be Eliminated</h4>
                              </th>
                              
                           </tr>
                        </thead>
                       <tbody>
						<?php if(isset($test3) && $test3!='')
							{
								foreach($test3 as $client){
									?>
									<tr>
									  <td>
										 DATE:<?php echo $client['ftbe_date']?>
									  </td>
									  <td>
										 TIME:<?php echo $client['ftbe_time']?>
									  </td>
									  <td>
										 FOOD:<?php echo $client['ftbe_foodingredients']?>
									  </td>
									 <?php if(isset($client['ftbe_comments'])){?>
									  <td>
									 COMMENTS:<?php echo $client['ftbe_comments']?>
									  </td>
									  <?php		
								}
							?>
									   <td>
										 <form action="<?php echo DASHBOARD_FTBE_DELETE ;?>" method="POST">
										 <input type="hidden" id="ID" name="ID" value="<?php echo $client['ftbe_id'];?>">
										 <button type="deny" class="btn btn-danger">delete</button>
									
										 </form>
									  </td>
                           </tr>
							<?php		
								}
							}?>
						</tbody>
                     </table>
					 <table class="table">
                        <thead class="thead-inverse">
                           <tr>
                              <th>
                                 <h4>Supplements To Be Added</h4>
                              </th>
                              
                           </tr>
                        </thead>
                         <tbody>
						<?php if(isset($test4) && $test4!='')
							{
								foreach($test4 as $client){
									?>
									<tr>
									  <td>
										 DATE:<?php echo $client['stba_date']?>
									  </td>
									  <td>
										 TIME:<?php echo $client['stba_time']?>
									  </td>
									  <td>
										 FOOD:<?php echo $client['stba_supplementation']?>
									  </td>
									  <td>
										 DOSAGE:<?php echo $client['stba_dosage']?>
									  </td>
									 <?php if(isset($client['stba_comments'])){?>
									  <td>
									 COMMENTS:<?php echo $client['stba_comments']?>
									  </td>
									  <?php		
								}
							?>
									   <td>
										 <form action="<?php echo DASHBOARD_STBA_DELETE ;?>" method="POST">
										 <input type="hidden" id="ID" name="ID" value="<?php echo $client['stba_id'];?>">
										 <button type="deny" class="btn btn-danger">delete</button>
									
										 </form>
									  </td>
                           </tr>
							<?php		
								}
							}?>
						</tbody>
                     </table>
					 <table class="table">
                        <thead class="thead-inverse">
                           <tr>
                              <th>
                                 <h4>Supplements To Be Eliminated</h4>
                              </th>
                              
                           </tr>
                        </thead>
                       <tbody>
						<?php if(isset($test5) && $test5!='')
							{
								foreach($test5 as $client){
									?>
									<tr>
									  <td>
										 DATE:<?php echo $client['stbe_date']?>
									  </td>
									  <td>
										 TIME:<?php echo $client['stbe_time']?>
									  </td>
									  <td>
										 FOOD:<?php echo $client['stbe_supplementitem']?>
									  </td>
									  <td>
										 DOSAGE:<?php echo $client['stbe_dosage']?>
									  </td>
									 <?php if(isset($client['stbe_comments'])){?>
									  <td>
									 COMMENTS:<?php echo $client['stbe_comments']?>
									  </td>
									  <?php		
								}
							?>
									   <td>
										 <form action="<?php echo DASHBOARD_STBE_DELETE ;?>" method="POST">
										 <input type="hidden" id="ID" name="ID" value="<?php echo $client['stbe_id'];?>">
										 <button type="deny" class="btn btn-danger">delete</button>
									
										 </form>
									  </td>
                           </tr>
							<?php		
								}
							}?>
						</tbody>
                     </table>
					  <table class="table">
                        <thead class="thead-inverse">
                           <tr>
                              <th>
                                 <h4>Supplement Dosage Change</h4>
                              </th>
                              
                           </tr>
                        </thead>
                       <tbody>
						<?php if(isset($test6) && $test6!='')
							{
								foreach($test6 as $client){
									?>
									<tr>
									  <td>
										 DATE:<?php echo $client['sdc_date']?>
									  </td>
									  <td>
										 TIME:<?php echo $client['sdc_time']?>
									  </td>
									  <td>
										 FOOD:<?php echo $client['sdc_supplementitem']?>
									  </td>
									  <td>
										 DOSAGE:<?php echo $client['sdc_dosage']?>
									  </td>
									 <?php if(isset($client['sdc_comments'])){?>
									  <td>
									 COMMENTS:<?php echo $client['sdc_comments']?>
									  </td>
									  <?php		
								}
							?>
									   <td>
										 <form action="<?php echo DASHBOARD_SDC_DELETE ;?>" method="POST">
										 <input type="hidden" id="ID" name="ID" value="<?php echo $client['sdc_id'];?>">
										 <button type="deny" class="btn btn-danger">delete</button>
									
										 </form>
									  </td>
                           </tr>
							<?php		
								}
							}?>
						</tbody>
                     </table>
   
   
  
  </div>
   <div id="Appointments">
                         <table class="table">
                        <thead class="thead-inverse">
                           <tr>
                              <th>
                                 <h4>Doctor Name</h4>
                              </th>
                              <th>
                                 <h4>Doctor Email</h4>
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
						<?php if(isset($test) && $test!='')
							{
								foreach($test as $client){
									?>
									<tr>
									  <td>
										 <?php echo $client['usrap_dr_name']?>
									  </td>
									  <td>
										 <?php echo $client['usrap_dr_email']?>
									  </td>
									  <td>
										 <?php echo $client['usrap_date']?>
									  </td>
									 
									  <td>
									 <?php echo $client['usrap_time']?>
									  </td>
									   <td>
										 <form action="<?php echo DASHBOARD_USER_DELETE ;?>" method="POST">
										 <input type="hidden" id="ID" name="ID" value="<?php echo $client['usrap_id'];?>">
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
  <div id="Practitioner">
    <table class="table">
                        <thead class="thead-inverse">
                           <tr>
                              <th>
                                 <h4>Doctor Name</h4>
                              </th>
                              <th>
                                 <h4>Doctor Email</h4>
                              </th>
							  <th>
                                 <h4>Doctor Address</h4>
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
										 <?php echo $client['doc_name']?>
									  </td>
									  <td>
										 <?php echo $client['doctor_email']?>
									  </td>
									  <td>
										 <?php echo $client['doc_address']?>
									  </td>
									
									   <td>
										 <form action="<?php echo DASHBOARD_USERREQUEST_DELETE ;?>" method="POST">
										 <input type="hidden" id="ID" name="ID" value="<?php echo $client['doctor_id'];?>">
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
                     
                     
                    
                     
                    
                  </div>
               
			  
					 </div>
            </div>
           
            <br />
         </div>
         <div >
      
   </body>
</html>