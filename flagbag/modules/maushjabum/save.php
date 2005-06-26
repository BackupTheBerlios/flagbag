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
 	 $get_title = $_POST['title'];
         $get_time = $_POST['time'];
	 $get_pwd = md5($_POST['pwd']);
	 $get_text = $_POST['text'];

	 
	 // Fetch the next ID
	 if (file_exists("../../contain/last.blog") ) {
		 $lastnr = file("../../contain/last.blog");
		 $next_id = ereg_replace("\n", "", $lastnr[0]);
		 $next_id++;
	 }
	 // Read the md5sum (php biatch version)
	 if (file_exists("shaparbalaum.blog") ) {
		 $md5_file = file("shaparbalaum.blog");
		 $md5_sum = md5(ereg_replace("\n", "", $md5_file[0])); // FIXME
	 }

	 // Check if the pwd was rigth
	 if ($get_pwd == $md5_sum ) {
		 echo $msg_pwd_succ;
		 $md5_ok = true;
	 }
	 else {
		echo $msg_pwd_fail;
		$md5_ok = false; 
	 }
	
 	 // Save the data if it was ok. 
	 if ($md5_ok == true) {
		 $get_text = ereg_replace("\n", "<br />\n",$get_text);
		 $filename = "../../contain/blog".$next_id;
		 $blog_file = fopen($filename, "x");
		 $string = "<p class=\"heading\"><b>".$get_title."</b></p>\n<p class=\"post-date\">".$get_time."</p>\n<p class=\"normal\">".$get_text."</p>\n";
		 $tmp = fputs($blog_file, $string);
		 fclose($blog_file);
		 
		 // If it went ok, update the max_id
		 if (file_exists($filename) ) {
			 $max_file = fopen("../../contain/last.blog", "w");
			 $string = $next_id;
			 $tmp = fputs($max_file, $string);
			 fclose($max_file);
			 echo $msg_save_succ;
		}
		else {
			echo $msg_save_fail;
		}
	 }
?>
<br/>
<a href="<? echo $url ?>?max=<? echo $next_id; ?>&amp;min=<? echo $next_id; ?>"><? echo $msg_goto_blog; ?></a> - <a href="<? echo $url ?>"><? echo $msg_goto_main; ?></a>
</div>
<!-- Footer -->
<div id="footer">
<?php echo $tag ?> using <?php echo $php_version ?> and Valid <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> and <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $url ?>">CSS</a>
</div>
<!-- End -->
</div>

</body>
</html>
