     <div class="span3" id="sidebar">
	              <img id="admin_avatar" class="img-polaroid" src="<?php echo $row['custodian_pic']; ?>">
	                 <?php //include('count.php'); ?>
					 <?php //include('count_damage.php'); ?>
					  <?php //include('count_dump.php'); ?>
					 <?php //include('count_remain_new_device.php'); ?>
                  <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                           <li class="active"> 
						   <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> 
						   </li>
						 
						 <!------/.* manage device sidebar*------->						
						 <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i>
							<i class="icon-desktop icon-large"></i>&nbsp;Manage Device
						    <div class="muted pull-right"><i class="caret"></i></div></a>					
						    <ul id="bs" class="collapse">						
                            <li class="">
                            <a href="add_new_device.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Add New Device </a>
                            </li>					
						    <li>
                            <a href="damage.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Damage Device
							</a>
                            </li>
							<li>
                            <a href="good.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Good Condition Device
							</a>
                            </li>						   							
						    </ul>
						</li>
						
                         <!------/.* manage location sidebar*------->	
					    <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i>
							<i class="icon-sitemap"></i>&nbsp;Manage Location
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs1" class="collapse">						
                            <li class="">
                            <a href="device_location.php"><i class="icon-chevron-right"></i><i class="icon-map-marker"></i> Device Location</a>
                            </li>
						    </ul>
						</li>
					  <!-- ----/.* notification sidebar*------->
					    <li class="">
				           <a href="notification.php"><i class="icon-chevron-right"></i><i class="icon-globe"></i>&nbsp;Notification
				           <?php if($not_read == '0'){
				           }else{ ?>
					       <span class="badge badge-important"><?php echo $not_read; ?></span> 
				           <?php }?>
				           </a>
			            </li>
						
                         <li class="">
                           <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs4"><i class="icon-chevron-right"></i>
						   <i class="icon-search icon-large"></i>&nbsp;Advance Search 
						   <div class="muted pull-right"><i class="caret"></i></div></a>
                           </a>
                           <ul id="bs4" class="collapse">
                           <li>
                           <a href="#myModal" data-toggle="modal" tabindex="1"><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Device in the location</a>
                           </li>
                          
                           <li>
                           <a href="#myModal1" data-toggle="modal" tabindex="-1" ><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;All Device</a>
                           </li>
                           </ul>
                        </li>
                  </ul>					
				<?php include('search_form.php'); ?>
				<?php include('search_form1.php'); ?>										
    </div>