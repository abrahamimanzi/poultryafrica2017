<!-- Logo -->
<a href="#" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>TA</b>S</span>
  <!-- logo for regular state and mobile devices -->
  <!--<span class="logo-lg"><b>Timbaktu-Software</b></span>-->
  <span class="logo-lg"><b>Network-2017</b></span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
	<span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
	<ul class="nav navbar-nav">

	  <!-- User Account Menu -->
	  <li class="dropdown user user-menu">
		<!-- Menu Toggle Button -->
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding: 7px 10px 7px 5px">
		  <!-- The user image in the navbar-->
            <span style="display: block; padding: 7px 5px; text-align: center; border-radius: 100%;background: orange; color: #fff; font-size: 20px; font-weight: 600; width: 35px; height: 35px"><?php echo substr($session_subscriber_data->firstname,0,1);?></span>
		</a>
		<ul class="dropdown-menu">
		  <!-- The user image in the menu -->
		  <li class="user-header"> <?php
			if($session_subscriber_data->photo){?>
				<img src="<?=DNADMIN._.$session_subscriber_data->photo;?>" class="img-circle" alt="User Image">
			<?php }else{?>
				<span style="display: block; margin: auto; width: 80px; height: 80px; padding: 5px 10px; border-radius: 100%;background: orange; color: #fff; font-size: 20px; font-weight: 600; border"><?php echo substr($session_subscriber_data->firstname,0,1);?></span>
			<?php }?>
			<p>
			  <?=$session_subscriber_data->firstname?>
			  <?php if($sessionParticipantTable->count()){?>
			     <small><?=$session_participant_data->jobtitle?></small>
              <?php }?>
			</p>
		  </li>
		  <li class="user-footer">
			<div class="pull-left">
			  <a href="<?=DN?>/net/account/profile/edit-password" class="btn btn-default btn-flat">Change Password</a>
			</div>
			<div class="pull-right">
			  <a href="<?=DN?>/net/logout" class="btn btn-default btn-flat">Sign out</a>
			</div>
		  </li>
		</ul>
	  </li>
	</ul>
  </div>
</nav>