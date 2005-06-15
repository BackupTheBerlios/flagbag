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
	<?php
		/* Recive the comment and store it */
		$get_text = $_GET['text'];
		$get_max = $_GET['max'];
		$text_when = $now;
		$filename_index = "contain/$get_max.blog";
		
		// Fetch/create the next ID
	        if (file_exists("$filename_index") ) {
			$last_tharb = file("$filename_index");
			$next_id = ereg_replace("\n", "", $last_tharb[0]);
			$next_id++;
		}
		else {
			$next_id = 0;
		}
		
		// Create the comment
		$filename_tharb = "contain/$next_id.$get_max.blog";
		if (!file_exists($filename_tharb) ) {
			$tharb_file = fopen($filename_tharb, "x");
			$string = "<br/><br/><p class=\"post-date\">$now</p>\n<p class=\"normal\">$get_text</p>";
			$tmp = fputs($tharb_file, $string);
			fclose($tharb_file);

			$tharb_file = fopen($filename_index, "w");
			$tmp = fputs($tharb_file, $next_id);
			fclose($tharb_file);
			echo $msg_add_succ."<br/>";
		}
		else {
			echo $msg_add_fail."<br/>";
		}			 
	?>

<a href="<? echo $url ?>?max=<? echo $get_max; ?>&amp;min=<? echo $get_max; ?>"><? echo $msg_return; ?></a>
</div>
<!-- Footer -->
<div id="footer">
<?php echo $tag ?> using <?php echo $php_version ?> and Valid <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> and <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $url ?>">CSS</a>
</div>
<!-- End -->
</div>

</body>
</html>
