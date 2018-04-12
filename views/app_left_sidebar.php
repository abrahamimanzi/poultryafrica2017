<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel" style="height: 58px;">
			<div class="pull-left image">
				<?php
				if($session_subscriber_data->photo){?>
					<img src="<?=DNADMIN._.$session_subscriber_data->photo;?>" class="img-circle" alt="User Image">
				<?php }else{?>
					<span style="display: block; padding: 8px 18px; border-radius: 100%; background: #333d41; color: #fff; font-size: 20px; font-weight: 600; border"><?php echo substr($session_subscriber_data->firstname,0,1);?></span>
				<?php }?>
			</div>
			<div class="pull-left info">
			  <p style="color: #fff"><?=$session_subscriber_data->firstname?></p>
			  <!-- Status -->
			  <a href="#"  style="color: #aaa"><i class="fa fa-circle" style="color: #4de64f"></i> Online</a>
			</div>
		</div>
		
		<!-- Sidebar Menu -->
		<ul class="sidebar-menu">
			<li class="header">Menu</li>
			<!-- Optionally, you can add icons to the links -->
            <li class=""><a href="<?=DN?>/net/"><i class="fa fa-laptop"></i> <span>Home</span></a></li>
            <li class="treeview <?php if($url_struc['tree'] == "app" && $url_struc['app-idname']=="EventApp"){ echo 'actived';}?>">
                <a href="#"><i class="fa fa-book blueapp-col"></i> <span>My Registration</span></a>
                <ul class="treeview-menu">
                    <li class="<?php if($url_struc['tree']=="app" && $url_struc['trunk']=="list"){ echo 'actived';}?>">
                        <a href="<?=DN?>/net/group/member"><i class="fa fa-circle-o icon"></i> <span>Members</span></a
                    </li>
                    <li class="<?php if($url_struc['tree']=="app" && $url_struc['trunk']=="list"){ echo 'actived';}?>">
                        <a href="<?=DN?>/net/group/member/category"><i class="fa fa-plus icon"></i> <span>New Member</span></a
                    </li>
				</ul>
            </li>
                    
            <li class=""><a href="<?=DN?>/net/logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
			
		</ul><!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->