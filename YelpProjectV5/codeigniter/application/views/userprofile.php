<!DOCTYPE html>
<html>

<?php require('header.php')?>

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li class="active">
                
                <a href="<?php echo base_url('index.php')?>">
                    <i class="icon-home"></i>
                    <span>Home</span>
                </a>
            </li>            
            
			<li>
                <a href="<?php echo base_url('index.php/logout')?>">
                    <i class="icon-signal"></i>
                    <span>SIGN OUT</span>
                </a>
            </li>
            <li>
                <a href="<?php echo (DOC.'index.html')?>">
                    <i class="icon-cog"></i>
                    <span>About/Developers</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">

        <div class="container-fluid">
            <div id="pad-wrapper" class="user-profile">
                <!-- header -->
                <div class="row-fluid header">
                    <div class="span8">
                        <h3 class="name"><?php echo $user['email']?></h3>
                    </div><!--
                    <a class="btn-flat icon pull-right delete-user" data-toggle="tooltip" title="Delete user" data-placement="top">
                        <i class="icon-trash"></i>
                    </a>
                     <a class="btn-flat icon large pull-right edit">
                        Edit user
                    </a>-->
                </div>

                <div class="row-fluid profile">
                    <!-- bio-->
                    <div class="span12 bio">
                        <div class="profile-box">
                            <!-- about -->
                            <div class="span12 section">
                                <h6>About...</h6>
                                <p>lot's of blablabla </p>
                            </div>
                        </div>
                    </div>
                </div>
				
            </div>
			
        </div>
    </div>
    <!-- end main container -->


	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo(JS.'bootstrap.min.js')?>"></script>
    <script src="<?php echo(JS.'theme.js')?>"></script>
	
</body>
</html>