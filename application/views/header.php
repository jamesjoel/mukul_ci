<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css');?>">
</head>
<body>
<div id="header">
	<div id="inside-header">
		<div id="left-header">
			<?php
			if($this->session->userdata('user_logged_in'))
			{ ?>
				<ul>
					<li><a href="<?php echo site_url('user/logout'); ?>">Logout</a>|</li>
					<li><a href="<?php echo site_url('user'); ?>">Dash</a>|</li>
					<li><a href="<?php echo site_url('user/profile'); ?>">Profile</a>|</li>
					<li><a href="#">My Cart</a></li>
				</ul>

			<?php }
			else
			{ ?>

				<ul>
					<li><a href="<?php echo site_url('home/login'); ?>">Login</a>|</li>
					<li><a href="<?php echo site_url('home/signup'); ?>">Signup</a>|</li>
					<li><a href="#">My Cart</a></li>
				</ul>
			<?php 
			}
			?>
		</div>
	</div>
</div>
<div id="menu">
	<div id="inside-menu">
		<div id="logo">
			<h2><span>S</span>hopper <span>F</span>riend</h2>
		</div>
		<div id="main-menu">
			<ul>
				<li><a href="#">Help</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="<?php echo site_url('home'); ?>" class="active">Home</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="slider">
	<div id="inside-slider"></div>
</div>