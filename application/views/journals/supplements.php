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
      <form data-toggle="validator" role="form" action="<?php echo JOURNALS_ADD_SUPPLEMENTS_PATH ;?>" method="POST">
         <div class="right_col" role="main">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-12">
						<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h3>Supplement Entry</h3></div>
                           
                        </div>
                     </div>
                           
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-4 col-md-4">TIME</div>
                           <div class="col-xs-8 col-md-8">SUPPLEMENTS WITH DOSAGE</div>
                        </strong>
                     </div>
                     <div class="row journal_entry_inputs">                     
                        <div class="col-xs-4">
                           <div class="form-group">
                              <div class='input-group date datetimepicker3' >
                                 <input type='text' class="form-control" name="supplement_time[]" required>
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-time"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-8">
                           <div class="form-group">
                              <input type="text" class="form-control" name="supplement_dosage[]"required>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                    <div class="row journal_entry_inputs">                     
                        <div class="col-xs-4">
                           <div class="form-group">
                              <div class='input-group date datetimepicker3' >
                                 <input type='text' class="form-control" name="supplement_time[]" required>
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-time"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-8">
                           <div class="form-group">
                              <input type="text" class="form-control" name="supplement_dosage[]"required>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
  
					 </div>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <br />
         </div>
         </div >
      </form>
   </body>
</html>