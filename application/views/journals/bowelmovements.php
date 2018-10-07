<!-- page content -->
<html>
   <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type = 'text/javascript' src="<?php echo AD_JS_PATH?>login/login336.js"></script>
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
      <form data-toggle="validator" role="form" action="<?php echo JOURNALS_ADD_BOWELMOVEMENTS_PATH ;?>" method="POST">
         <div class="right_col" role="main">
            <div class="row container">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-12">
						<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h3>BowelMovements</h3></div>
                           
                        </div>
                     </div>
                           
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row journal_entry_inputs">
                        <strong>
                           <div class="col-xs-2">Time</div>
                           <div class="col-xs-2">BM Type</div>
                           <div class="col-xs-2">Enema/Laxative</div>
						   <div class="col-xs-1">Mucus</div>
						   <div class="col-xs-1">Undigested</div>
						   <div class="col-xs-2">Stool Color</div>
                           <div class="col-xs-2">Comments</div>
                        </strong>
                     </div>
                     <div class="row journal_entry_inputs">
                        <div class="col-xs-2">
                           <div class="form-group">
                              <div class='input-group date datetimepicker3' >
                                 <input type='text' class="form-control" name="time[]" required>
                                 <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-time"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
						    <div class="col-xs-2">
							

                        <div class="form-group">
  
  <select class="form-control" id="bmtype[]" name="bmtype[]">
  <option>select</option>
  <option>Type1-Hard Lumpy Stones</option>
    <option>Type2-sausage shaped but lumpy</option>
    <option>Type3-like sausage but with cracks</option>
	<option>Type4-like sausage,smooth and soft</option>
	<option>Type5-soft blobs with clear cut edges</option>
	<option>Type6-fluffy pieces with ragged edges</option>
    <option>Type7-watery,no solid pieces</option>
  </select>
</div>

                        </div>
							<div class="col-xs-2">
<div class="form-group">
  
  <select class="form-control" id="Enema/Laxative[]" name="Enema/Laxative[]">
  <option>none</option>
    <option>Enema</option>
    <option>Laxative</option>

  </select>
</div>
                        </div>
                        <div class="col-xs-1">
                           <div class="form-group">
                              <input type="radio" class="form-control" name="mucus[]"required>
                           </div>
                        </div>
                        <div class="col-xs-1">
                           <div class="form-group">
                              <input type="radio" class="form-control" name="undigested[]"required>
                           </div>
                        </div>
						<div class="col-xs-2">
                                                     <div class="form-group">
  
  <select class="form-control" id="stoolcolor[]" name="stoolcolor[]">
   <option>none</option>
  <option>Brown</option>
    <option>Red</option>
    <option>Green</option>
	<option>Yellow</option>
	<option>White</option>
	<option>Black</option>
    <option>Light Clay</option>
  </select>
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