<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
	<meta name="author" content="Wink Hosting (www.winkhosting.com)">
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<link rel="stylesheet" href="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>styles/aqua/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>styles/forms.css" type="text/css">
	<title>{page_title}</title>
</head>
<body>
    <div id="leftside">&nbsp;</div>
	<div id="page">
		<div id="header">
			<div id="companyname" align="left"><img src="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>images/aqua/logo_bps.png" height="105" width="115"></div>
			<div class="links_menu" id="menu" align="right"><a href="#">Home</a> | <a href="<?php echo site_url('rata_tangkapan/juknisratatangkapan') ?>">Petunjuk Pengisian Daftar Rata-rata Hasil Tangkapan</a> | <a href="<?php echo site_url('home');?>">Dashboard</a> | <a href="<?php echo site_url('login/logout'); ?>">Logout</a></div>
		</div>
		<br>
		<div id="content">
            <?php echo $content;?>
            <br/>
			<div class="footer"><br/>
				Designed by DON Design.
                Copyright&copy;2017.
			</div>
		</div>
	</div>
    <div id="rightside">&nbsp;</div>
</body></html>