<!-- page content -->
<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type = "text/css" href="<?php echo AD_CSS_PATH?>login/login1114.css">
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/dash1102.js"></script>
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/dash1114.js"></script>
	  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/css/bootstrap-select.css">
	 
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/i18n/defaults-*.min.js"></script>

      <script>
	  $('.selectpicker').selectpicker({
  style: 'btn-info',
  size: 4
});

         $(function() {
			
			/*$('#get_user_journals').click(function(){
				var chooseClient = $("#chooseClient").val();
				var choosejournal = $("#choosejournal").val();
				var table_data_html='';
				if((chooseClient!='CHOOSE MEMBER')||(choosejournal!='CHOOSE JOURNAL')){
					
					$.ajax({
						 type: "POST",  
                         url: "<?php echo CLIENDATA_RETURN;?>",  
                         data: {chooseClient:chooseClient,choosejournal:choosejournal}, 
						 success: function(msg,data){  
							var response=$.parseJSON(msg);
							console.log(response);
							
							$(response.result).each(function(indx,val){
								console.log(val);
							table_data_html+='<tr><td>'+val.supp_time;
							})
							
							
							
							
							
							//$('#journals_html').html(response);
  
   
   
   }
						
					});
					
					
				}
				
			});*/
           $( "#tabs" ).tabs();
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
                     <h1>Client Data</h1>
                     <hr>
                  </div>
                  <div class="clearfix"></div>
			<div class="col-md-12 col-sm-12 col-xs-12" style="text-align:right">
			<form action="<?php echo CLIENDATA_RETURN;?>" method="POST">
				  <span align="right col-md-6 col-sm-6 col-xs-12">
				  <select class="selectpicker" name="chooseClient" id="chooseClient">
				  <option value="choose">CHOOSE MEMBER</option>
						<?php if(isset($test) && $test!=''){
						foreach($test as $client){?>
						<?php if(($client['user_approve'])=='Approved'){?>
							 <option value=<?php echo $client['user_id'];?>> 
							 <?php echo $client['user_name'];?></option>
							<?php } } }?>
						
	         
              </select>
                     </span>
				  <span align="right col-md-6 col-sm-6 col-xs-12">
				  
				  <select class="selectpicker" name="choosejournal" id="choosejournal">
				  <option value="choose">CHOOSE JOURNAL</option>
					<option value="food">Food Details</option>
					<option value="supplements">Supplements Details</option>
					<option value="bath">Bath Details</option>
					<option value="sleep1">Sleep Details</option>	
					<option value="bowel">BowelMovement Details</option>	
					<option value="therapy">Therapy Details</option>	
					<option value="fitness">Fitness Details</option>
                         <option value="health">HealthMarkers Details</option>					
	         
				</select>
                     </span>
					 <span><button class="btn btn-success" id="get_user_journals">Get User Journals</button></span>
                 </form>
			</div>
                  <div id="tabs" class="col-md-12 col-xs-12">
                     <ul>
                        <li>
                           <div class="col-md-6 col-xs-6"><h3><i class="fa fa-male"></i>Journals</h3></div>
                        </li>
                       
                     </ul>
                  
                     <div id="journals_html">
                     <table class="table">
                        <thead class="thead-inverse">
                           <tr>
						   <?php if(isset($th) && $th!='')
							{
								for($x=0;$x<count($th);$x++){
								?>
						   
						   
                              <th>
                                 <h4><?php echo $th[$x];?></h4>
                              </th>
                              
							  <?php		
								}
							}?>
							  
                           </tr>
                        </thead>
                        <tbody>
						<?php if(isset($td) && $td!='')
							{
								foreach($td as $client){
								?>
									<tr>
									<?php  for($x=0;$x<count($tr);$x++){
									  
									?>
									
									  <td>
										 <?php echo $client[$tr[$x]];?>
									  </td>
									 
									<?php		
								}?> 
                           </tr>
							<?php		
								}}?>
						</tbody>
                     </table>
					 
					 
                     </div>
                   
                  </div>
               </div>
            </div>
         </div>
         <br />
      </div>
      </div >
   </body>
</html>