 <!-- -->
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
      <form data-toggle="validator" role="form" action="<?php echo JOURNALS_ADD_BATHDETAILS_PATH ;?>" method="POST">
         <div class="right_col" role="main">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-12">
						<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h3>BathDetails</h3></div>
                           
                        </div>
                     </div>
                         
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-3">Time of day</div>
                           <div class="col-xs-3">Type of bath</div>
                           <div class="col-xs-3">Detox with</div>
                           <div class="col-xs-3">Comments</div>
                        </strong>
                     </div>
                     <div class="row journal_entry_inputs">
                        <div class="col-xs-3">
                           <div class="form-group">
                              <div class='input-group date datetimepicker3' >
                                 <input type='text' class="form-control" id="timeofday[]" name="timeofday[]" required>
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-time"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-3">
                          <div class="form-group">
  
  <select class="form-control" name="typeofbath[]" id="typeofbath[]">
  <option>none</option>
    <option>Regular</option>
    <option>Detox</option>

  </select>
</div>
                        </div>
                        <div class="col-xs-3">
                           <div class="form-group">
  
  <select class="form-control" name="detoxwith[]" id="detoxwith[]">
  <option>none</option>
    <option>Epsomsalt</option>

  </select>
</div>
                        </div>
                        <div class="col-xs-3">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="comments" id="comments[]" name="comments[]">
                           </div>
                        </div>
                     </div>
					                      <div class="clearfix"></div>
  
           
			
         </div> 
		 <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
         </div>
		 
		 </div>
 </div>
         <br />
         </div>
       
      </form>
   </body>
</html>