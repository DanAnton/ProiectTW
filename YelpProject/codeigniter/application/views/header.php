<?php 
$user = $this->session->userdata('user');
?>

<ul>
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<?php if (!$user) { ?>
	<li><a href="<?php echo base_url('login'); ?>">Login</a></li>
	<li><a href="<?php echo base_url('register'); ?>">Register</a></li>
	<?php } else { ?>
	<li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
	<?php } ?>
</ul>