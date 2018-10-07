<!-- page content -->
<html>
   <head>
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
   -->
   </head>
   <body>
      <div class="right_col" role="main">
         <div class="row">
		 <div class="col-md-3 col-sm-3 col-xs-3">
			&nbsp;
			</div>
            <div class="col-md-6 col-sm-12 col-xs-6">
               <div class="dashboard_graph">
                  <div align="center">
                     <h3><u>LOGIN AS</h3>
                  </div>
                  <div class="container">
                     <ul class="nav nav-pills">
                        <li class="active"><a href="#">USER</a></li>
                        <li><a href="<?php echo DOCTOR;?>">DOCTOR</a></li>
                     </ul>
                     <hr>
                  </div>
                  <form data-toggle="validator" role="form" action="<?php echo VALIDATE;?>" method="POST">
                     <h1 align="left" class="col-md-3">login</h1>
                     <h1 align="center" class="col-md-3"><a href="<?php echo REGISTER;?>">register</a></h1>
                     <div class="clearfix"></div>
                     <div class="clearfix"></div>
                     <div class="form-group">
                        <div class="col-xs-6 journal_entry_inputs">
                           <label for="inputEmail" class="control-label">Email</label>
                           <input type="email" class="form-control " name="inputEmail" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="form-group">
                        <div class="col-xs-6 journal_entry_inputs">
                           <label for="inputPassword" class="control-label">Password</label>
                           <input type="password"  class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="form-group journal_entry_inputs span12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                     <div class="clearfix"></div>
                     <div class="form-group journal_entry_inputs">
                        <label><u><a href="">forgotpassword?</a></label>
                     </div>
               </div>
            </div>
			<div class="col-md-3 col-sm-3 col-xs-3">
			&nbsp;
			</div>
         </div>
      </div>
      <br />
      </form>
   </body>
</html>