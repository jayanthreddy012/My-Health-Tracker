<?php 
$controller = $this->router->fetch_class();

?>
<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					
					<ul class="nav nav-tabs nav-stacked main-menu">	
						<li><a href="<?php echo HOME_PATH; ?>users"><i class="icon-group"></i><span class="hidden-tablet"> Users</span></a></li>	
						<li>
							<a class="dropmenu" href="<?php echo HOME_PATH; ?>pricing"><i class="icon-tags"></i><span class="hidden-tablet">Pricing</span></a>							
						</li>
						<li>
							<a class="dropmenu" href="<?php echo HOME_PATH; ?>units"><i class="icon-folder-open"></i><span class="hidden-tablet">Units</span></a>							
						</li>						
						<li>
							<a class="dropmenu" href="<?php echo HOME_PATH; ?>transactions"><i class="icon-money"></i><span class="hidden-tablet">Transactions</span></a>							
						</li>
						
						<li><a href="<?php echo HOME_PATH; ?>login/logout"><i class="icon-off"></i><span class="hidden-tablet"> Logout</span></a></li>	
						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->