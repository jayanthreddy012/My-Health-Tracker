<!-- page content -->
<html>
   <head>
        <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login1122.js"></script>
	  
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login1110.js"></script>
      <script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login290.js"></script> 
<script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login41535.js"></script> 
      <script type="text/javascript">
	 /* $(document).ready(
	  
	  function(){
		 $('#save').click(
		 
		 function(){
			 
			 
			 
			 
			 
		 }); 
		  
		  
	  });
	  */
	  
	  
	  
         $(function () {
             $('.datetimepicker3').datetimepicker({
				  
                 format: 'LT'
             });
         });
      </script>
   </head>
   <body>
      <form data-toggle="validator" role="form" action="<?php echo JOURNALS_ADD_HEALTHMARKERS_PATH ;?>" method="POST">
         <div class="right_col" role="main">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-12">
						<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h3>Physical Profile Entry</h3></div>
                           
                        </div>
                     </div>
                           
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-3">Height</div>
						   </strong>
						   <div class="col-xs-3">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="height" id="height" name="height[]">
                           </div>
                        </div>
						<strong>
                           <div class="col-xs-3">Weight</div>
						   </strong>
						   <div class="col-xs-3">
						   <div class="form-group">
                              <input type="text" class="form-control" placeholder="weight" id="weight" name="weight[]">
                           </div>

                        </div>
                     </div>
					 </div>
                     <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-12">
						<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h3>Cholestrol Markers</h3></div>
                           
                        </div>
                     </div>
                           
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-3">HDL</div>
						   </strong>
						   <div class="col-xs-3">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="HDL" id="HDL" name="HDL[]">
                           </div>
                        </div>
						<strong>
                           <div class="col-xs-3">LDL</div>
						   </strong>
						   <div class="col-xs-3">
						   <div class="form-group">
                              <input type="text" class="form-control" placeholder="LDL" id="LDL" name="LDL[]">
                           </div>

                        </div>
                     </div>
					  <div class="row journal_entry_inputs">
					  <strong>
                           <div class="col-xs-3">Total cholestrol</div>
						   </strong>
						   <div class="col-xs-3">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Totalcholestrol" id="Totalcholestrol" name="Totalcholestrol[]">
                           </div>
                        </div>
						<strong>
                           <div class="col-xs-3">Triglycerides</div>
						   </strong>
						   <div class="col-xs-3">
						   <div class="form-group">
                              <input type="text" class="form-control" placeholder="Triglycerides" id="Triglycerides" name="Triglycerides[]">
                           </div>

                        </div>
					  
					  
					  
					  </div>
					 </div>
					 <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-12">
						<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h3>Thyroid Markers</h3></div>
                           
                        </div>
                     </div>
                          
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-3">RT3</div>
						   </strong>
						   <div class="col-xs-3">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="RT3" id="RT3" name="RT3[]">
                           </div>
                        </div>
						<strong>
                           <div class="col-xs-3">T3</div>
						   </strong>
						   <div class="col-xs-3">
						   <div class="form-group">
                              <input type="text" class="form-control" placeholder="T3" id="T3" name="T3[]">
                           </div>

                        </div>
                     </div>
					  <div class="row journal_entry_inputs">
					  <strong>
                           <div class="col-xs-3">Total T4</div>
						   </strong>
						   <div class="col-xs-3">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Total T4" id="TotalT4" name="TotalT4[]">
                           </div>
                        </div>
						<strong>
                           <div class="col-xs-3">TPO Ab</div>
						   </strong>
						   <div class="col-xs-3">
						   <div class="form-group">
                              <input type="text" class="form-control" placeholder="TPO Ab" id="TPOAb" name="TPOAb[]">
                           </div>

                        </div>
					  
					  
					  
					  </div>
					   <div class="row journal_entry_inputs">
					  <strong>
                           <div class="col-xs-3">TSH</div>
						   </strong>
						   <div class="col-xs-3">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="TSH" id="TSH" name="TSH[]">
                           </div>
                        </div>
						</div>
					 </div>
					 <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-12">
						<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h3>Blood Sugar Markers</h3></div>
                           
                        </div>
                     </div>
                          
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-3">Fasting Blood Glucose</div>
						   </strong>
						   <div class="col-xs-3">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Fasting Blood Glucose" id="FastingBloodGlucose" name="FastingBloodGlucose[]">
                           </div>
                        </div>
						<strong>
                           <div class="col-xs-3">Hemoglobin A1C</div>
						   </strong>
						   <div class="col-xs-3">
						   <div class="form-group">
                              <input type="text" class="form-control" placeholder="Hemoglobin A1C" id="Hemoglobina1c" name="Hemoglobina1c[]">
                           </div>

                        </div>
                     </div>
					 </div>
					 <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-12">
						<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h3>Heart Rate Markers</h3></div>
                           
                        </div>
                     </div>
                           
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-3">Blood Pressure</div>
						   </strong>
						   <div class="col-xs-3">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Blood Pressure" id="bp" name="bp[]">
                           </div>
                        </div>
						<strong>
                           <div class="col-xs-3">Pulse</div>
						   </strong>
						   <div class="col-xs-3">
						   <div class="form-group">
                              <input type="text" class="form-control" placeholder="Pulse" id="Pulse" name="Pulse[]">
                           </div>

                        </div>
                     </div>
					 </div>
					 <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-12">
						<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h3>Iron Markers</h3></div>
                           
                        </div>
                     </div>
                         
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-3">Ferritin</div>
						   </strong>
						   <div class="col-xs-3">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Ferritin" id="Ferritin" name="Ferritin[]">
                           </div>
                        </div>
						<strong>
                           <div class="col-xs-3">Hemoglobin</div>
						   </strong>
						   <div class="col-xs-3">
						   <div class="form-group">
                              <input type="text" class="form-control" placeholder="Hemoglobin" id="Hemoglobin" name="Hemoglobin[]">
                           </div>

                        </div>
                     </div>
					 </div>
					 <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-12">
						<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h3>Other Markers</h3></div>
                           
                        </div>
                     </div>
                          
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-3">C-Reactive protein</div>
						   </strong>
						   <div class="col-xs-3">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="C-Reactive protein" id="protein" name="protein[]">
                           </div>
                        </div>
						<strong>
                           <div class="col-xs-3">Urine PH</div>
						   </strong>
						   <div class="col-xs-3">
						   <div class="form-group">
                              <input type="text" class="form-control" placeholder="Urine PH" id="Urine" name="Urine[]">
                           </div>

                        </div>
                     </div>
					  <div class="row journal_entry_inputs">
					  <strong>
                           <div class="col-xs-3">Vitamin-D</div>
						   </strong>
						   <div class="col-xs-3">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Vitamin-D" id="Vitamind" name="Vitamind[]"requied>
                           </div>
                        </div>
						
					  
					  
					  
					  </div>
					 </div>
           
			
        
		 <div class="form-group">
            <button type="submit" id="save" class="btn btn-primary">Save</button>
         </div></div>
 </div>
         <br />
         </div>
       
      </form>
   </body>
</html>