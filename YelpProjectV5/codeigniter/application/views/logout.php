<?php require('header.php'); ?>

<br><center><?php 
	
	echo "You have been logged out!";
	
?></center><br>
<form method="POST" action="<?php echo base_url() ?>">
	<center><input class="btn-glow primary login" type="submit" value="Go Home"></center>
</form>