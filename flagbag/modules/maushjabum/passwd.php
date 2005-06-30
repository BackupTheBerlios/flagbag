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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<div id="container">
<!-- Title and menu -->

<div id="title">
<?php /* Echo title */
echo $title; ?>
</div>
<div id="date">
<?php /* Echo date */
echo $now; ?>
	
</div>
</div>
<div id="menu">
[ <a href="<? echo $url; ?>"><? echo $msg_goto_main; ?></a> ]
[ <? echo "$msg_menu_pasw"; ?> ]

</div>
<!-- End -->
<!-- Text -->
<div class="post-container">
<form method="post" action="svpwd.php">
	<table>
	<tr><td><kbd><? echo $msg_pwd_old; ?>: </kbd></td><td><input type="password" name="oldpwd" size="40" maxlength="200"/></td></tr>
	<tr><td><kbd><? echo $msg_pwd_new; ?>: </kbd></td><td><input type="password" name="newpwd0" size="40" maxlength="200"/></td></tr>
	<tr><td><kbd><? echo $msg_pwd_new_re; ?> </kbd></td><td><input type="password" name="newpwd1" size="40" maxlength="200"/></td></tr>
	<tr><th colspan="2"><input type="submit" value="<? echo $msg_apply; ?>"/></th></tr>
	</table>
</form>
</div>	
<!-- Footer -->
<div id="footer">
<?php echo $tag ?> using <?php echo $php_version ?> and Valid <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> and <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $url ?>">CSS</a>
</div>
</body>
</html>
