<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/
DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv"> 
<!-- 
  index.php 
  Version 0.3.5 
  Copyright (C) Niklas Lindblad and Patrik Nilsson 2005
  Released under the GNU General Public License version 2
-->
<?php
/*Include zer.php, the file that contains variables and settings */
/* Although we only load it if it exists */
 if ( file_exists('php/zer.php') ) 
	 include 'php/zer.php'
 ?>
 <?php
 /* We also include the silent modules */
 if ( file_exists('modules/silent_mod.php') )
	 include 'modules/silent_mod.php'
?>

<?php
	/* Read some variables who could be modified by for exampel plugins */
	$get_max=$_GET['max'];
	$get_min=$_GET['min'];
?>
    
<head>
  <title><?php echo $title ?></title>
<link rel="stylesheet" type="text/css" href="<?php /* Load CSS */ echo $style_sheet ?>" title="layout" />
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
</head>
	<body>
	<p id="title"><b><?php
/* Set the page-title and the heading to the value of $title which is a legacy of zer.php */
 if ($use_logo!=1) {
	 echo "$title</b></p>";
 }
 else {
	 echo "<img src=\"./img/logo.png\" alt=\".".$title."\"></img></b></p>";
 }
 ?>
    <p id="date"><b> <?php echo $now ?> </b></p>
<hr />
<?php
	/* Menu modules these little guys do some nice menu thingies :) */
	if ( file_exists('modules/menu_mod.php') ) {
		include 'modules/menu_mod.php';
	}
?>
<?php
/* Articles are stored in files named blog<nr> they need to include their own formatting. */
   if (file_exists("contain/last.blog") ) {
	   $lastnr = file("contain/last.blog");
	   $max = ereg_replace("\n", "", $lastnr[0]);
	   if ($max>16) {
		   $min=$max-16;
	   }
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
		    }
	   }
   }	       
?>
<hr />
<p id="version"><?php echo $tag ?> using <?php echo $php_version ?></p>
<p id="valid"><i>Valid <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> and <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://linux.rwarforums.com/blog/utveckling/css/layout.css">CSS</a></i></p>
<p id="locale"><?php echo $client ?></p>
</body>
</html>
