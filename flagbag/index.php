<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv"> 
<!-- 
  index.php 
  Copyright (C) Niklas Lindblad and Patrik Nilsson 2005
  Released under the GNU General Public License version 2
-->
<?php

  /* MAKE INCLUDES */

  /* zer.php holds all our variables and data */
  /* If it exists we'll include it */
      if ( file_exists('php/zer.php') ) 
         include 'php/zer.php';

  /* We also include the silent modules */
      if ( file_exists('modules/silent_mod.php') )
	 include 'modules/silent_mod.php';

  /* ENABLE THE MIN/MAX-FUNCTION */

  /* Read some variables who could be modified by for example plugins */
	$get_max=$_GET['max'];
	$get_min=$_GET['min'];

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
 
  /* BLOG-ARTICLES PRINTING */

  /* Articles are stored in files named blog<nr> they need to include their own formatting. */

  /* If 'containt/last.blog' exists then make the last blog-article to last.blog instead */
   if (file_exists("contain/last.blog") ) {
	   $lastnr = file("contain/last.blog");
	   $max = ereg_replace("\n", "", $lastnr[0]);
	   if ($max>16) {
		   $min=$max-16;
	   }
  /* Else, don't and set $min to 0 */
	   else {
		   $min=0;
	   }
   }
   else {
	   $max = 16;
	   $min = 0;
   }

   if (($get_max) && ($get_min)) {
	/* If the get_max and $get_min exists then these values would
	   Over run the "default" $max and $min, but only if $get_max IS larger
	   or the same size as $get_min. */
	   if ($get_max >= $get_min) {
		   $max = $get_max;
		   $min = $get_min;
	   }
   }

   for ( $numb = $max ; $numb >= $min ; $numb-- ) {
	   if (file_exists("contain/blog$numb") ) {
		   $lines5 = file("contain/blog$numb");
		    foreach ($lines5 as $line_num5 => $line5) {
			    echo $line5;
			     if ( file_exists('modules/element_mod.php') )
			              include 'modules/element_mod.php';
		    }
	   }
   }	       
?>
</div>
<!-- Footer -->
<div id="footer">
<?php echo $tag ?> using <?php echo $php_version ?> and Valid <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> and <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $url ?>">CSS</a>
</div>
<!-- End -->
</div>

</body>
</html>
