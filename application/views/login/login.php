<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<!-- Basics -->	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	<title>Login</title>
	<!-- CSS -->	
	<link rel="stylesheet" href="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>styles/elegant_styles/reset.css">
	<link rel="stylesheet" href="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>styles/elegant_styles/animate.css">
	<link rel="stylesheet" href="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>styles/elegant_styles/styles.css">	
</head>	
<body>	
	<!-- Begin Page Content -->
    <div class="header"><label>SISTEM INFORMASI</label></div>
	<div id="container">        
        <center><img class="comp-logo" src="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>images/logo2_transparent.png" /></center>        
		<form action="<?php echo site_url('login/loginProcess');?>" method="post">
		<label for="username">Nama Pengguna:</label>		
		<input id="username" name="username" type="name">		
		<label for="pass">Kata Kunci:</label>		
		<input id="pass" name="pass" type="password">
		<div id="lower">
		<input type="submit" value="Login" name="login">		
		</div>
        <div style="color:red;font-size:10pt;">
        <?php echo validation_errors();?>
        <?php if(isset($message)){ echo $message;}?>
        </div>
		</form>        
	</div>
	<!-- End Page Content -->	
</body>
</html>
	
	
	
	
	
		
	