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
<div id="container">
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
<form method="get" action="save.php">
	<table>
	<tr><td><kbd><? echo $msg_title; ?>: </kbd></td><td><input type="text" name="title" size="40" maxlength="200"/></td></tr>
	<tr><td><kbd><? echo $msg_time; ?>: </kbd></td><td><input type="text" name="time" size="40" maxlength="200" value="<? echo $now; ?>"/></td></tr>
	<tr><td><kbd><? echo $msg_pwd; ?> </kbd></td><td><input type="password" name="pwd" size="40" maxlength="200"/></td></tr>
	<tr><td><kbd><? echo $msg_blogg;?>: </kbd></td><td>
	<textarea name="text" rows="20" cols="40"></textarea></td></tr>
	<tr><td colspan="2"><input type="submit" value="<? echo $msg_add; ?>"/></th></tr>
	</table>
</form>
	
</div>
<!-- Footer -->
<div id="footer">
<?php echo $tag ?> using <?php echo $php_version ?> and Valid <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> and <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $url ?>">CSS</a>
</div>
<!-- End -->
</div>

</body>
</html>
