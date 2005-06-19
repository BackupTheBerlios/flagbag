<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv"> 
<?php
/* Include the logger itself */
/* This page only displays the output from php/logger.php */
/* Include the php/logger.php in sites that needs logging */
include 'php/zer.php';
/* Include to get the right style-sheet :) */
?>
<head>
<title> Log for <?php echo $title ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="<?php /* Load CSS */ echo $style_sheet ?>" title="layout" />
</head>
<body>
<div id="container">
<!-- Title and menu -->

<div id="title">
<?php /* Echo title */
echo 'Log for '; echo $title; ?>
</div>
<div id="date">
<?php /* Echo date */
echo $now; ?>
</div>
</div>
<div class="post-container">
<table>
<?php
/* Log-file created by php/logger.php
/* If the log-file exists then format it line-by-line and then print it here*/
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
<hr />
<div id="footer">
<?php echo $tag ?> using <?php echo $php_version ?>
<i>Valid <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a>and <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://linux.rwarforums.com/blog/utveckling/css/layout.css">CSS</a></i>
<?php echo $client ?>
</div>
</body>
</html>
