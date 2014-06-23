
<!DOCTYPE html>
<html class="login-bg">
<head>
	<title>LocalSpot - Sign up</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta name="author" content="Alexandru Rapanu, Danut Anton, Cosmin Ilioaia">
	<meta name="description" content="LocalSpot este un proiect la TW realizat de Alexandru Rapanu, Danut Anton, Cosmin Ilioaia"/>
	<meta name="copyright" content="Copyright 2014">
	
      <!-- bootstrap -->
    <link href="<?php echo(CSS.'bootstrap.css')?>" rel="stylesheet" />
    <link href="<?php echo(CSS.'bootstrap-responsive.css')?>" rel="stylesheet" />
    <link href="<?php echo(CSS.'bootstrap-overrides.css')?>" type="text/css" rel="stylesheet" />

    <!-- elements/layout/icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo(CSS.'layout.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo(CSS.'elements.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo(CSS.'icons.css')?>" />

    <!-- libraries/fonts -->
    <link rel="stylesheet" type="text/css" href="<?php echo(CSS.'font-awesome.css')?>" />
    <!-- signup style -->
    <link rel="stylesheet" href="<?php echo(CSS.'signup.css')?>" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
    <div class="header">
        <a href="index.html">
             <img src="<?php echo(IMG.'logo.png')?>" class="logo" />
        </a>
    </div>
    <div class="row-fluid login-wrapper">
        <div class="box">
            <div class="content-wrap">
                <h6>Sign Up</h6>
                <form method="POST" action="<?php echo base_url('index.php/register') ?>">

					<?php echo form_error('email'); ?>
					<!--<label>Email</label><br>  -->
					<?php echo $error[0]; ?>
					<input class="span12" type="text" name='email' placeholder="E-mail address" value="<?php echo set_value('email') ?>"/>
				
					<?php echo form_error('password'); ?>
					<!--<label>Password</label><br> -->
					<input class="span12" type="password" name='password' placeholder="Password"/>
				  
				   <div class="action">
					<input class="btn-glow primary signup" type="submit" value = "Sign Up"/>
 				   </div>   
				</form>
            <!--<input class="span12" type="text" placeholder="E-mail address" />
                <input class="span12" type="password" placeholder="Password" />
                <input class="span12" type="password" placeholder="Confirm Password" />
                
                <div class="action">
                    <a class="btn-glow primary signup" href="index.html">Sign up</a>
                </div>  
                -->              
            </div>
        </div>

        <div class="span4 already">
            <p>Already have an account?</p>
            <a href="<?php echo base_url('index.php/login')?>">Sign in</a>
        </div>
    </div>

	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo(JS.'bootstrap.min.js')?>"></script>
    <script src="<?php echo(JS.'theme.js')?>"></script>
	
</body>
</html>