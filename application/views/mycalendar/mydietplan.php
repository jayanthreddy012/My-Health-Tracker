

<!-- page content -->
<html>
   <head>
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login1122.js"></script>
	  
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login1110.js"></script>
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login290.js"></script> 
<script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login41535.js"></script> 
 <link rel="stylesheet" type = "text/css" href="<?php echo AD_CSS_PATH?>login/login1114.css">
   <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/dash1114.js"></script>
    <link rel="stylesheet" type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.css">
	 
      <script type="text/javascript">
         $(document).ready(function()
         {
              $(function () {
                  $('.datetimepicker3').datetimepicker({
         
                      format: 'LT'
                  });
              });
               
         $( ".Date1" ).datepicker({
         dateFormat : 'yy/mm/dd',
                  changeMonth: true,
           changeYear: true,
                 yearRange: '-100y:c+nn',
                 maxDate: '-1d'
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
                                 <h3>My DietPlan</h3>
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row journal_entry_inputs">
                           <form data-toggle="validator" role="form" action="<?php echo MYCALANDAR_MYDIETPLAN_FTBA ;?>" method="POST">
                             
							 <div class="container">
                                 <div class="row">
                                     <div class="panel panel-default">
    <div class="panel-heading"><h3>Food To Be Added</h3></div>
                           
                        </div>
									
									
                                    </button>
                                 </div>
                                
                                    <div class="dashboard_graph">
                                       <div class="clearfix"></div>
                                       <div class="row journal_entry_inputs">
                                          <strong>
                                             <div class="col-xs-3">Date</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="text" class="datepicker Date1" name="Date[]" placeholder="date" id="Date[]" required>
                                             </div>
                                          </div>
                                          <strong>
                                             <div class="col-xs-3">Time</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <div class='input-group date datetimepicker3' >
                                                   <input type='text' class="form-control" placeholder="time" id="timeofday[]" name="timeofday[]" required>
                                                   <span class="input-group-addon">
                                                   <span class="glyphicon glyphicon-time"></span>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row journal_entry_inputs">
                                          <strong>
                                             <div class="col-xs-3">Food Ingredients</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Food Ingredients" id="FoodIngredients[]" name="FoodIngredients[]"required>
                                             </div>
                                          </div>
                                          <strong>
                                             <div class="col-xs-3">Comments</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="textarea" class="form-control" placeholder="Comments" name="Comments[]">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <button type="submit" class="btn btn-primary">Add Plan</button>
                                       </div>
                                    </div>
                                 
                              </div>
                           </form>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row journal_entry_inputs">
                           <form data-toggle="validator" role="form" action="<?php echo MYCALANDAR_MYDIETPLAN_FTBE ;?>" method="POST">
                              <div class="container">
							  <div class="row">
                                     <div class="panel panel-default">
    <div class="panel-heading"><h3>Food To Be Eliminated</h3></div>
                           
                        </div>
									
									
                                    
                                 </div>
                                
                                 
                                    <div class="dashboard_graph">
                                       <div class="clearfix"></div>
                                       <div class="row journal_entry_inputs">
                                          <strong>
                                             <div class="col-xs-3">Date</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="text" class="datepicker Date1" name="Date[]" placeholder="date" id="Date[]" required>
                                             </div>
                                          </div>
                                          <strong>
                                             <div class="col-xs-3">Time</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <div class='input-group date datetimepicker3' >
                                                   <input type='text' class="form-control" placeholder="time" id="timeofday[]" name="timeofday[]" required>
                                                   <span class="input-group-addon">
                                                   <span class="glyphicon glyphicon-time"></span>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row journal_entry_inputs">
                                          <strong>
                                             <div class="col-xs-3">Food Ingredients</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Food Ingredients" id="FoodIngredients[]" name="FoodIngredients[]"required>
                                             </div>
                                          </div>
                                          <strong>
                                             <div class="col-xs-3">Comments</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="textarea" class="form-control" placeholder="Comments" id="Comments[]" name="Comments[]"required>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <button type="submit" class="btn btn-primary">Add Plan</button>
                                       </div>
                                    </div>
                                 
                              </div>
                           </form>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row journal_entry_inputs">
                           <form data-toggle="validator" role="form" action="<?php echo MYCALANDAR_MYDIETPLAN_STBA ;?>" method="POST">
                              <div class="container">
							    <div class="row">
                                     <div class="panel panel-default">
    <div class="panel-heading"><h3>Supplement To Be Added</h3></div>
                           
                        </div>
									
									
                                    
                                 </div>
                             
                         
                                 
                                    <div class="dashboard_graph">
                                       <div class="clearfix"></div>
                                       <div class="row journal_entry_inputs">
                                          <strong>
                                             <div class="col-xs-3">Date</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="text" class="datepicker Date1" name="Date[]" placeholder="date" id="Date[]" required>
                                             </div>
                                          </div>
                                          <strong>
                                             <div class="col-xs-3">Time</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <div class='input-group date datetimepicker3' >
                                                   <input type='text' class="form-control" placeholder="time" id="timeofday[]" name="timeofday[]" required>
                                                   <span class="input-group-addon">
                                                   <span class="glyphicon glyphicon-time"></span>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row journal_entry_inputs">
                                          <strong>
                                             <div class="col-xs-3">Supplement Item</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="text" class="form-control" placeholder="SupplementItem" id=="SupplementItem" name="SupplementItem[]"required>
                                             </div>
                                          </div>
                                          <strong>
                                             <div class="col-xs-3">Dosage</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Dosage" id="Dosage" name="Dosage[]"required>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row journal_entry_inputs">
                                          <strong>
                                             <div class="col-xs-3">Comments</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="textarea" class="form-control" placeholder="Comments" name="Comments[]"required>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <button type="submit" class="btn btn-primary">Add Plan</button>
                                       </div>
                                    </div>
                                
                              </div>
                           </form>
                        </div>
                        <div class="clearfix"></div>
                       <div class="row journal_entry_inputs">
                           <form data-toggle="validator" role="form" action="<?php echo MYCALANDAR_MYDIETPLAN_STBE ;?>" method="POST">
                              <div class="container">
							    <div class="row">
                                     <div class="panel panel-default">
    <div class="panel-heading"><h3>Supplements to be eliminated</h3></div>
                           
                        </div>
									
									
                                    
                                 </div>
                              
                                 
                                    <div class="dashboard_graph">
                                       <div class="clearfix"></div>
                                       <div class="row journal_entry_inputs">
                                          <strong>
                                             <div class="col-xs-3">Date</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="text" class="datepicker Date1" name="Date[]" placeholder="date" id="Date[]" required>
                                             </div>
                                          </div>
                                          <strong>
                                             <div class="col-xs-3">Time</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <div class='input-group date datetimepicker3' >
                                                   <input type='text' class="form-control" placeholder="time" id="timeofday[]" name="timeofday[]" required>
                                                   <span class="input-group-addon">
                                                   <span class="glyphicon glyphicon-time"></span>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row journal_entry_inputs">
                                          <strong>
                                             <div class="col-xs-3">Supplement Item</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="text" class="form-control" placeholder="SupplementItem" name="SupplementItem[]"required>
                                             </div>
                                          </div>
                                          <strong>
                                             <div class="col-xs-3">Dosage</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Dosage" name="Dosage[]"required>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row journal_entry_inputs">
                                          <strong>
                                             <div class="col-xs-3">Comments</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="textarea" class="form-control" placeholder="Comments" name="Comments[]"required>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <button type="submit" class="btn btn-primary">Add Plan</button>
                                       </div>
                                    </div>
                                
                              </div>
                           </form>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row journal_entry_inputs">
                           <form data-toggle="validator" role="form" action="<?php echo MYCALANDAR_MYDIETPLAN_SDC ;?>" method="POST">
                              <div class="container">
							    <div class="row">
                                     <div class="panel panel-default">
    <div class="panel-heading"><h3>Supplement Dosage Change</h3></div>
                           
                        </div>
									
									
                                    
                                 </div>
                              
                                 
                                    <div class="dashboard_graph">
                                       <div class="clearfix"></div>
                                       <div class="row journal_entry_inputs">
                                          <strong>
                                             <div class="col-xs-3">Date</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="text" class="datepicker Date1" name="Date[]" placeholder="date" id="Date[]" required>
                                             </div>
                                          </div>
                                          <strong>
                                             <div class="col-xs-3">Time</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <div class='input-group date datetimepicker3' >
                                                   <input type='text' class="form-control" placeholder="time" id="timeofday[]" name="timeofday[]" required>
                                                   <span class="input-group-addon">
                                                   <span class="glyphicon glyphicon-time"></span>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row journal_entry_inputs">
                                          <strong>
                                             <div class="col-xs-3">Supplement Item</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="text" class="form-control" placeholder="SupplementItem" name="SupplementItem[]"required>
                                             </div>
                                          </div>
                                          <strong>
                                             <div class="col-xs-3">Dosage</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Dosage" name="Dosage[]"required>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row journal_entry_inputs">
                                          <strong>
                                             <div class="col-xs-3">Comments</div>
                                          </strong>
                                          <div class="col-xs-3">
                                             <div class="form-group">
                                                <input type="textarea" class="form-control" placeholder="Comments" name="Comments[]"required>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <button type="submit" class="btn btn-primary">Add Plan</button>
                                       </div>
                                    </div>
                                
                              </div>
                           </form>
                        </div>
                     </div>
                 
                  <br />
               </div>
            </div>
         </div>
      </div>
   </body>
</html>

