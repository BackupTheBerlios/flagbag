<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv"> 
<!-- 
  index.php 
  Copyright (C) Niklas Lindblad and Patrik Nilsson 2005
  Released under the GNU General Public License version 2
-->
<?php

  /* MAKE INCLUDES */

  /* foshnu-zer.php load all data from zer.php and fixes the css issue */
      if ( file_exists('foshnu-zer.php') ) 
         include 'foshnu-zer.php';

  /* The real HTML-code starts below, remember that <html> is already opened */
?>
    
<head>
  <title><?php /* Print title */ echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php /* Set CSS */ echo $style_sheet; ?>" title="layout" />
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
</head>
	
<body>
<div class="post-container">
<!-- Title and menu -->
<div id="header">
<div id="title">
<?php /* Echo title */
echo $title; ?>
</div>
<div id="date">
<?php /* Echo date */
echo $now; ?>
</div>
</div>
<!-- End -->
<!-- Text -->
<div id="text">
<?php
	 // Fetch the variables
	 $get_pwd = md5($_POST['oldpwd']);
	 $get_newpwd0 = md5($_POST['newpwd0']);
	 $get_newpwd1 = md5($_POST['newpwd1']);
	 $new_pwd=0;

	 // Read the md5sum (php biatch version)
	 if (file_exists("$passwd_file") ) {
		 $md5_file = file("$passwd_file");
		 $md5_sum = ereg_replace("\n", "", $md5_file[0]);
	 } else { // Creates the default passwd file
		 echo "$msg_pwd_create";
		 $filename = "$passwd_file";
		 $pwd_file = fopen($filename, "x");
		 $tmp = fputs($pwd_file, $get_pwd);
		 fclose($pwd_file);
		 chmod("$password_file",0666);
		 $new_pwd=1;
	 }
	 
	 // Check if the pwd was rigth
	 if ($get_newpwd0 == $get_newpwd1 and $new_pwd==0) {
		 if ($get_pwd == $md5_sum ) {
			 $filename = "$passwd_file";
			 $pwd_file = fopen($filename, "w");
			 $tmp = fputs($pwd_file, $get_newpwd1);
			 fclose($pwd_file);
			 // Reread for check up.
			 $md5_file = file("$passwd_file");
			 $md5_sum = ereg_replace("\n", "", $md5_file[0]);
			 if ($get_newpwd0 == $md5_sum) {
				 echo $msg_pwd_succ;
			 } else {
				 echo $msg_pwd_fail;
			 }
		 } else {
			 echo $msg_pwd_fail;
		 }
	 } elseif ($new_pwd==0) {
		echo $msg_pwd_fail;
	 }
?>
</div>
<br/>
<a href="<? echo $url ?>"><? echo $msg_goto_main; ?></a>
</div>
<!-- Footer -->
<div id="footer">
<?php echo $tag ?> using <?php echo $php_version ?> and Valid <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> and <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $url ?>">CSS</a>
</div>
</body>
</html>
