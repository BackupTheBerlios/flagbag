<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv">
<?php
  /* THIS WON'T BE DISPLAYED ALONG WITH THE XHTML-CODE, ALL */
  /* TEXT INSIDE THE '<?php'-TAGS ARE FOR YOUR EYES ONLY. */
     
  /* THE FOLLOWING CODE IS LICENSED UNDER THE GNU GENERAL PUBLIC LICENSE VERSION 2. */
  /* YOU MAY MODIFY AND DISTRIBUTE IT UNDER THE TERMS OF THE LICENSE. FULL LICENSE */
  /* CAN BE FOUND HERE: http://www.gnu.org/licenses/gpl.txt */
     
  /* THIS FILE IS A PART OF THE FLAGBAG BLOG-ENGINE PROJECT: http://developer.berlios.de/projects/flagbag */
     
  /* COPYRIGHT (C) 2005 THE DEVELOPERS OF FLAGBAG */
     
  /* BEGIN INCLUDES */


  /* IF FOUND WE'LL INCLUDE ./php/zer.php */
      if ( file_exists('php/zer.php') ) 
         include 'php/zer.php';


  /* END INCLUDES */
?>

<!-- =============== -->
<!-- HEAD TAG BEGINS -->
<!-- =============== -->

<head> 
<title>Log for <?php /* Print title */ echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php /* Set CSS */ echo $style_sheet; ?>" title="layout" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
	
<!-- ============= -->
<!-- HEAD TAG ENDS -->
<!-- ============= -->
	

<!-- =========== -->
<!-- BODY BEGINS -->
<!-- =========== -->

<body>

<!-- ================ -->
<!-- CONTAINER BEGINS -->
<!-- ================ -->

<div id="container">

<!-- PRINTING PAGE TITLE -->
<div id="title">
Log for <?php echo $title; ?>
</div>
<!-- DONE PRINTING PAGE TITLE -->

<!-- PRINTING CURRENT DATE -->
<div id="date">
<?php echo $now; ?>
</div>
<!-- DONE PRINTING CURRENT DATE -->

</div>

<!-- ============== -->
<!-- CONTAINER ENDS -->
<!-- ============== -->


<!-- ===================== -->
<!-- POST-CONTAINER BEGINS -->
<!-- ===================== -->
<div class="post-container">

<!-- LOG DATA OUTPUT BEGINS -->
<table>
<?php

  /* THE FOLLOWING FUNCTION PARSES AND PRINT THE LOGFILE LINE BY LINE */
  /* FIRST OFF IT CHECKS IF THE LOG-FILE EXISTS. */

  if (file_exists('logs/logger_silent.log') ) {
	  $logdata = file('logs/logger_silent.log');
	  $lines=count($logdata);
	  for ($numb = $lines ; $numb >= 0; $numb-- ) {
		  echo $logdata[$numb];
	  }
  }

?>
</table>
</div>
<!-- END OF LOG DATA OUTPUT -->
<!-- =================== -->
<!-- POST-CONTAINER ENDS -->
<!-- =================== -->


<!-- ================== -->
<!-- SITE FOOTER BEGINS -->
<!-- ================== -->

<div id="footer">
<?php echo $tag ?> using <?php echo $php_version ?> and Valid <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> and <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $url ?>">CSS</a>
</div>

<!-- ================ -->
<!-- SITE FOOTER ENDS -->
<!-- ================ -->


</body>

<!-- ========= -->
<!-- BODY ENDS -->
<!-- ========= -->

</html>
