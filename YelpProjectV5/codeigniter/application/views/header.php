<!--

<ul>
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<?php if (!$user) { ?>
	<li><a href="<?php echo base_url('login'); ?>">Login</a></li>
	<li><a href="<?php echo base_url('register'); ?>">Register</a></li>
	<?php } else { ?>
	<li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
	<?php } ?>
</ul>
-->
<head>

	<title>LocalSpot - Proiect TW</title>
    <?php $user = $this->session->userdata('user');?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta name="author" content="Alexandru Rapanu, Danut Anton, Cosmin Ilioaia">
	<meta name="description" content="LocalSpot este un proiect la TW realizat de Alexandru Rapanu, Danut Anton, Cosmin Ilioaia"/>
	<meta name="copyright" content="Copyright 2014">
	
    <!-- bootstrap -->
 	<link href="<?php echo(CSS.'bootstrap.css')?>" rel="stylesheet" />
    <link href="<?php echo(CSS.'bootstrap-responsive.css')?>" rel="stylesheet" />
    <link href="<?php echo(CSS.'bootstrap-overrides.css')?>" type="text/css" rel="stylesheet" />

    <!-- libraries/fonts -->
    <link href="<?php echo(LIB.'jquery-ui-1.10.2.custom.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo(LIB.'font-awesome.css')?>" type="text/css" rel="stylesheet" />

    <!-- elements/layout/icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo(CSS.'layout.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo(CSS.'elements.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo(CSS.'icons.css')?>" />

    <!-- index styles -->
    <link rel="stylesheet" href="<?php echo(CSS.'index.css')?>" type="text/css" media="screen" />    
	<link rel="stylesheet" href="<?php echo(CSS.'user-profile.css')?>" type="text/css" media="screen" />
    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!-- lato font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

	
</head>

<body>
	
    <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="brand" href="index.html"><img src="<?php echo(IMG.'logo.png')?>" /></a>

            <ul class="nav pull-right">                
                <li class="hidden-phone">
                    <input class="search" type="text" />
                </li>
                <li class="dropdown">
                <?php if (!$user) { 
                	
                	?>
                    <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">Guest <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    
                        <li><a href="<?php echo base_url('index.php/login'); ?>">Sign In</a></li>
                        <li><a href="<?php echo base_url('index.php/register'); ?>">Sign Up</a></li>
                    <?php } else { ?>
                    <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown"><?php echo $user['email']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Account settings</a></li>
                        <li><a href="#">Favourites</a></li>
                        <li><a href="<?php echo base_url('index.php/logout'); ?>">Sign Out</a></li>
                    	<?php } ?>
                    </ul>
                </li>
                 <?php if (!$user) { ?>
                <li class="settings hidden-phone">
                    <a href="<?php echo base_url('/index.php/register'); ?>" role="button">SIGN UP</a>
                </li>
                <?php }?>
            </ul>            
        </div>
    </div>
    <!-- end navbar -->