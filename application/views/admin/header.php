
<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="ie6 ielt7 ielt8 ielt9"><![endif]--><!--[if IE 7 ]><html lang="en" class="ie7 ielt8 ielt9"><![endif]--><!--[if IE 8 ]><html lang="en" class="ie8 ielt9"><![endif]--><!--[if IE 9 ]><html lang="en" class="ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en"><!--<![endif]--> 
	<head>
		<meta charset="utf-8">
		<title>Dashboard - <?php echo $this->session->userdata('email') ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/site.css" rel="stylesheet">

		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#"><?php echo $this->session->userdata('email') ?></a>
						<div class="nav-collapse">
							<ul class="nav">
								<li class="active">
									<a href="index.htm">Dashboard</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/user/update_profile">Account Settings</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>">View Website</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>/index.php/user/logout">Logout</a>
								</li>
							</ul>
							<form class="navbar-search pull-left" action="">
								<input type="text" class="search-query span2" placeholder="Search" />
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span3">
					<div class="well" style="padding: 8px 0;">
						<ul class="nav nav-list">
							<li class="nav-header">
								Orders
							</li>
							<li class="active">
								<a href="<?php echo base_url(); ?>index.php/admin/home"><i class="icon-white icon-home"></i> Dashboard</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>index.php/admin/home/pending_order"><i class="icon-folder-open"></i> Pending Order</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>index.php/admin/home/sending_order"><i class="icon-check"></i> Sending Order</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>index.php/admin/home/success_order"><i class="icon-envelope"></i> Success Order</a>
							</li>
							<li class="nav-header">
								Product
							</li>
							<li>
								<a href="<?php echo base_url(); ?>index.php/admin/product/get_product"><i class="icon-user"></i> List Product</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>index.php/admin/product/add"><i class="icon-cog"></i> Add Product</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="help.htm"><i class="icon-info-sign"></i> Help</a>
							</li>
							<li class="nav-header">
								Bonus Templates
							</li>
							<li>
								<a href="gallery.htm"><i class="icon-picture"></i> Gallery</a>
							</li>
							<li>
								<a href="blank.htm"><i class="icon-stop"></i> Blank Slate</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="span9">