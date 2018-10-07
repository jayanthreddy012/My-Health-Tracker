<!-- page content -->
<html>
   <head>
        <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login1122.js"></script>
	  
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login1110.js"></script>
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login290.js"></script> 
<script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login41535.js"></script> 
      <script type="text/javascript">
         $(function () {
             $('.datetimepicker3').datetimepicker({
				  
                 format: 'LT'
             });
         });
      </script>
   </head>
   <body>
      <form data-toggle="validator" role="form" action="<?php echo JOURNALS_ADD_FITNESS_PATH ;?>" method="POST">
         <div class="right_col" role="main">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-12">
						<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h3>Fitness</h3></div>
                           
                        </div>
                     </div>
                          
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-4">Type Of Fitness</div>
                           <div class="col-xs-2">Start Time</div>
                           <div class="col-xs-2">End Time</div>
						   <div class="col-xs-2">Calories</div>
                           <div class="col-xs-2">Comments</div>
                        </strong>
                     </div>
                     <div class="row journal_entry_inputs">
                        <div class="col-xs-4">
                           <div class="form-group">
                              <input type="text" class="form-control" name="TypeOfFitness[]"required>
                           </div>
                        </div>
                        <div class="col-xs-2">
                           <div class="form-group">
                              <div class='input-group date datetimepicker3' >
                                 <input type='text' class="form-control" name="start_time[]" required>
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-time"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-2">
                           <div class="form-group">
                              <div class='input-group date datetimepicker3' >
                                 <input type='text' class="form-control" name="end_time[]" required>
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-time"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
						<div class="col-xs-2">
                           <div class="form-group">
                              <input type="text" class="form-control" name="calories[]"required>
                           </div>
                        </div>
                        <div class="col-xs-2">
                           <div class="form-group">
                              <input type="text" class="form-control" name="comments[]">
                           </div>
                        </div>
                     </div>
					                      <div class="clearfix"></div>
                     
           
			
         </div> 
		 <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
         </div></div>
 </div>
         <br />
         </div>
       
      </form>
   </body>
</html>