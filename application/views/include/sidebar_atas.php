<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">

	<div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
			</a>
		</span>
		
		<a class="navbar-brand" href="<?php echo base_url() ?>">PARAPROGRAMER</a>

	</div><!-- logo-area -->

	<ul class="nav navbar-nav toolbar pull-right">
        <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="ti ti-fullscreen"></i></span></i></a>
        </li>
		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
				 <img class="img-circle" src="<?php echo base_url() ?>bootstrap/assets/img/user.jpg"/>
			</a>
			<ul class="dropdown-menu userinfo arrow">
				<li><a href="#"><i class="ti ti-user"></i><span>Nama</span></a></li>
				<li><a href="#"><i class="ti ti-panel"></i><span><span class="badge badge-info">Username</span></span></a></li>
				<li><a href="#"><i class="ti ti-settings"></i><span>Settings</span></a></li>
				<li class="divider"></li>
				<li><a href="#"><i class="ti ti-shift-right"></i><span>Log Out</span></a></li>
			</ul>
		</li>

	</ul>

</header>
