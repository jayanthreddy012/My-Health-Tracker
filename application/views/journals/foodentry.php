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
      <form data-toggle="validator" role="form" action="<?php echo JOURNALS_ADD_FOODENTRY_PATH ;?>" method="POST">
         <div class="right_col" role="main">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-12">
						<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h3>Food Entry</h3></div>
                           
                        </div>
                     </div>
                           
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-2">COURSE</div>
                           <div class="col-xs-2">TIME</div>
                           <div class="col-xs-4">FOOD DESCRIPTION</div>
                           <div class="col-xs-4">COMMENTS</div>
                        </strong>
                     </div>
                     <div class="row journal_entry_inputs">
                        <div class="col-xs-2"><input type='hidden' value="Breakfast" name="course[]" id="course[]" required><label>Breakfast</label></div>
                        <div class="col-xs-2">
                           <div class="form-group">
                              <div class='input-group date datetimepicker3' >
                                 <input type='text' class="form-control" id="food_time[]" name="food_time[]" required>
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-time"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-4">
                           <div class="form-group">
                              <input type="text" class="form-control" id="fooddesc[]" name="fooddesc[]"required>
                           </div>
                        </div>
                        <div class="col-xs-4">
                           <div class="form-group">
                              <input type="text" class="form-control" id="comments[]" name="comments[]">
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <div class="col-xs-2"><input type='hidden' value="lunch" id="course[]" name="course[]" required><label>lunch</label></div>
                        <div class="col-xs-2">
                           <div class="form-group">
                              <div class='input-group date datetimepicker3'>
                                 <input type='text' class="form-control" id="food_time[]" name="food_time[]" required>
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-time"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-4">
                           <div class="form-group">
                              <input type="text" class="form-control" id="fooddesc[]" name="fooddesc[]"required>
                           </div>
                        </div>
                        <div class="col-xs-4">
                           <div class="form-group">
                              <input type="text" class="form-control" id="comments[]" name="comments[]">
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <div class="col-xs-2"><input type='hidden' value="dinner" id="course[]" name="course[]" required><label>dinner</label></div>
                        <div class="col-xs-2">
                           <div class="form-group">
                              <div class='input-group date datetimepicker3' >
                                 <input type='text' class="form-control" id="food_time[]" name="food_time[]" required>
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-time"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-4">
                           <div class="form-group">
                              <input type="text" class="form-control" id="fooddesc[]" name="fooddesc[]"required>
                           </div>
                        </div>
                        <div class="col-xs-4">
                           <div class="form-group">
                              <input type="text" class="form-control" id="comments[]" name="comments[]">
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <div class="col-xs-2">
						<div class="form-group">
  
  <select class="form-control" name="course[]" value="4" id="course[]">
  <option>select course</option>
    <option>Brunch</option>
    <option>Supper</option>
<option>Snack</option>
  </select>
</div>
						
						</div>
                        <div class="col-xs-2">
                           <div class="form-group">
                              <div class='input-group date datetimepicker3'>
                                 <input type='text' class="form-control" id="food_time[]" name="food_time[]" >
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-time"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-4">
                           <div class="form-group">
                              <input type="text" class="form-control" id="fooddesc[]" name="fooddesc[]" >
                           </div>
                        </div>
                        <div class="col-xs-4">
                           <div class="form-group">
                              <input type="text" class="form-control" id="comments[]" name="comments[]">
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               
			   <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-2 col-md-2 watertaken">watertaken:</div>
                           <div class="col-xs-2"><input type="text" class="form-control" id="watertaken[]" name="watertaken[]" required></div>
                        </strong>
                     </div>
					 </div>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <br />
         </div>
         <div >
      </form>
   </body>
</html>