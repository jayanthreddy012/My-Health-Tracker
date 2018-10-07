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
      <form data-toggle="validator" role="form" action="<?php echo JOURNALS_ADD_SLEEPDETAILS_PATH ;?>" method="POST">
         <div class="right_col" role="main">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-12">
						<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h3>SleepDetails</h3></div>
                           
                        </div>
                     </div>
                           
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-2">Bedtime Prep</div>
                           <div class="col-xs-2">Time In Bed</div>
                           <div class="col-xs-2">Wake Up Time</div>
						   <div class="col-xs-1">Times Woke Up</div>
						   <div class="col-xs-2">Sleep Pattern</div>
						   <div class="col-xs-2">Bed Wetting</div>
                           <div class="col-xs-1">Comments</div>
                        </strong>
                     </div>
                     <div class="row journal_entry_inputs">
                        <div class="col-xs-2">
                           <div class="form-group">
                              <div class='input-group date datetimepicker3' >
                                 <input type='text' class="form-control" name="bedtimeprep[]" required>
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-time"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
						                        <div class="col-xs-2">
                           <div class="form-group">
                              <div class='input-group date datetimepicker3' >
                                 <input type='text' class="form-control" name="timeinbed[]" required>
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-time"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
												                        <div class="col-xs-2">
                           <div class="form-group">
                              <div class='input-group date datetimepicker3' >
                                 <input type='text' class="form-control" name="wakeuptime[]" required>
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-time"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-1">
                           <div class="form-group">
                              <input type="text" class="form-control" value="00"name="timeswokeup[]"required>
                           </div>
                        </div>
                        <div class="col-xs-2">
                           <div class="form-group">
  
  <select class="form-control" id="sleeppattern[]">
  <option>none</option>
    <option>Restful</option>
    <option>Disturbed</option>
	 <option>Deep</option>
	  <option>Semi Disturbed</option>

  </select>
</div>
                        </div>
						<div class="col-xs-2">
                           <div class="form-group">
  
  <select class="form-control" id="bedwetting[]">
  <option>none</option>
    <option>Yes</option>
    <option>No</option>


  </select>
</div>
                        </div>
                        <div class="col-xs-1">
                           <div class="form-group">
                              <input type="textarea" class="form-control" name="comments[]">
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