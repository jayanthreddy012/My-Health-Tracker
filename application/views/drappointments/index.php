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
         $(function () {
             $('#datetimepicker3').datetimepicker({
                 format: 'LT'
             });
         
         $( ".datepicker" ).datepicker({
          dateFormat : 'yy/mm/dd',
               changeMonth: true,
         changeYear: true,
              yearRange: '-100y:c+nn',
              maxDate: '-1d'
         });
         });
         
         
         $(function() {
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
                        <h1>My Appointments</h1>
                        <hr>
                     </div>
                     <div class="clearfix"></div>
                     <div id="tabs" class="col-md-12 col-xs-12">
                        <ul>
                           <li>
                             <h3> <div class="col-md-6 col-xs-6"><i class="fa fa-male"></i>Add Appointments</div></h3>
                           </li>
                        </ul>
                        <div id="Practitioner">
                           <table class="table">
                              <thead class="thead-inverse">
                                 <tr>
                                    <th>
                                       <h4>User Name</h4>
                                    </th>
                                    <th>
                                       <h4>User Email</h4>
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
                                 <form role="form" action="<?php echo DR_APPOINTMENTS_INSERT ;?>" method="POST">
                                    <tr>
                                       <td>
                                          <input type="text" class="form-control" id="inputname" placeholder="name" name="inputname"required>
                                       </td>
                                       <td>
                                          <input type="email" class="form-control" id="inputemail" placeholder="email" name="inputemail"required>
                                       </td>
                                       <td>
                                          <input type="text" class="datepicker Date1" name="Date" placeholder="date" id="Date" required>
                                       </td>
                                       <td>
                                          <div class="container">
                                             <div class="row">
                                                <div class='input-group date' id='datetimepicker3'>
                                                   <input type='text' class="form-control"id="time" name="time"/>
                                                   <span class="input-group-addon">
                                                   <span class="glyphicon glyphicon-time"></span>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </td>
                                    </tr>
                              </tbody>
                           </table>
                           <div class="form-group" align="center">
                           <button type="submit" class="btn btn-primary"><i class="fa fa-add"></i>ADD</button>
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