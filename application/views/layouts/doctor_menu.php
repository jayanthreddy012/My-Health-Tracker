<div class="col-md-3 left_col">
<div class="left_col scroll-view">

	<div class="navbar nav_title" style="border: 0;">
		<a href="" class="site_title"><i class="fa fa-plus-square"></i> <span>MY HEALTH TRACKER</span></a>
	</div>
	<div class="clearfix"></div>

	<!-- menu prile quick info -->
	<div class="profile">
		<div class="profile_pic">
			<img src="<?php echo AD_IMAGES_PATH; ?>img.jpg" alt="..." class="img-circle profile_img">
		</div>
		<div class="profile_info">
			<span>Welcome,</span>
			<h2><?php
  			print_r($this->session->userdata['logged_in']['docFirstname']);
			print_r($this->session->userdata['logged_in']['docLastname']);
			//exit;
			//echo $_SESSION['userFirstname'].$_SESSION['userLastname'];
			 
			?></h2>
		</div>
	</div>
	<!-- /menu prile quick info -->

	<br />

	<!-- sidebar menu -->
	<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

		<div class="menu_section">
			<h3>General</h3>
			<ul class="nav side-menu">
				<li><a href="<?php echo DOCTOR_DASHBOARD; ?>"><i class="fa fa-home"></i> Dashboard </a>
				</li>
				<li><a href="<?php echo CLIENDATA; ?>"><i class="fa fa-edit"></i> ClientData</a>
				</li>
				<li><a href="<?php echo DR_APPOINTMENTS; ?>"><i class="fa fa-calendar"></i> My Appointments</a>
		
				</li>
				
				<li><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu" style="display: none">
						<li><a href="chartjs.html">Tool settings</a>
						</li>
						<li><a href="chartjs2.html">Account profile</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>

	</div>
	<!-- /sidebar menu -->

	<!-- /menu footer buttons -->
	<!--<div class="sidebar-footer hidden-small">
		<a data-toggle="tooltip" data-placement="top" title="Settings">
			<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
		</a>
		<a data-toggle="tooltip" data-placement="top" title="FullScreen">
			<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
		</a>
		<a data-toggle="tooltip" data-placement="top" title="Lock">
			<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
		</a>
		<a data-toggle="tooltip" data-placement="top" title="Logout">
			<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
		</a>
	</div>-->
	<!-- /menu footer buttons -->
</div>
</div>

<!-- top navigation -->
<div class="top_nav">

<div class="nav_menu">
	<nav class="" role="navigation">
		<div class="nav toggle">
			<a id="menu_toggle"><i class="fa fa-bars"></i></a>
		</div>

		<ul class="nav navbar-nav navbar-right">
			<li class="">
				<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<img src="<?php echo AD_IMAGES_PATH; ?>img.jpg" alt=""><?php
  			print_r($this->session->userdata['logged_in']['docFirstname']);
			print_r($this->session->userdata['logged_in']['docLastname']);
			//exit;
			//echo $_SESSION['userFirstname'].$_SESSION['userLastname'];
			 
			?>
					<span class=" fa fa-angle-down"></span>
				</a>
				<ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
					<li><a href="javascript:;">  Profile</a>
					</li>
					
				
					<li><a href="<?php echo LOGOUT ;?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
					</li>
				</ul>
			</li>

			<!--<li role="presentation" class="dropdown">
				<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
					<i class="fa fa-envelope-o"></i>
					<span class="badge bg-green">6</span>
				</a>
				<ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
					<li>
						<a>
							<span class="image">
						<img src="<?php echo AD_IMAGES_PATH; ?>img.jpg" alt="Profile Image" />
					</span>
							<span>
						<span>John Smith</span>
							<span class="time">3 mins ago</span>
							</span>
							<span class="message">
						Film festivals used to be do-or-die moments for movie makers. They were where... 
					</span>
						</a>
					</li>
					<li>
						<a>
							<span class="image">
						<img src="<?php echo AD_IMAGES_PATH; ?>img.jpg" alt="Profile Image" />
					</span>
							<span>
						<span>John Smith</span>
							<span class="time">3 mins ago</span>
							</span>
							<span class="message">
						Film festivals used to be do-or-die moments for movie makers. They were where... 
					</span>
						</a>
					</li>
					<li>
						<a>
							<span class="image">
						<img src="<?php echo AD_IMAGES_PATH; ?>img.jpg" alt="Profile Image" />
					</span>
							<span>
						<span>John Smith</span>
							<span class="time">3 mins ago</span>
							</span>
							<span class="message">
						Film festivals used to be do-or-die moments for movie makers. They were where... 
					</span>
						</a>
					</li>
					<li>
						<a>
							<span class="image">
						<img src="<?php echo AD_IMAGES_PATH; ?>img.jpg" alt="Profile Image" />
					</span>
							<span>
						<span>John Smith</span>
							<span class="time">3 mins ago</span>
							</span>
							<span class="message">
						Film festivals used to be do-or-die moments for movie makers. They were where... 
					</span>
						</a>
					</li>
					<li>
						<div class="text-center">
							<a>
								<strong><a href="inbox.html">See All Alerts</strong>
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</li>
				</ul>-->
			</li>

		</ul>
	</nav>
</div>

</div>
<!-- /top navigation -->