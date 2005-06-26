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

  /* BEGIN INCLUDING SILENT MODULES */
      if ( file_exists('modules/silent_mod.php') )
	 include 'modules/silent_mod.php';
  /* END INCLUDING SILENT MODULES */
  
  /* ENABLE THE MIN/MAX-FUNCTION FOR ELEMENTS */

  /* READ SOME VARIABLES WHO COULD BE MODIFIED BY PLUGINS */
  	$get_max=$_GET['max'];
	$get_min=$_GET['min'];
  /* END READING VARIABLES */
  
  
  /* END INCLUDES */
?>

<!-- =============== -->
<!-- HEAD TAG BEGINS -->
<!-- =============== -->

<head> 
<title><?php /* Print title */ echo $title; ?></title>
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
<?php echo $title; ?>
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

<?php
  /* MENU PRINTING BEGINS */
  /* THE FOLLOWING CODE WILL LOAD THE MODULE THAT HANDLES THE MENUS, AGAIN, ONLY IF IT EXISTS */

  /* IF THE FILE ./modules/menu_mod.php EXISTS THEN INClUDE IT AND PRINT A FEW COMMENTS IN THE XHTML-CODE */ 
if ( file_exists('modules/menu_mod.php') ) {
        echo "<!-- ============ -->\n";
        echo "<!-- MENUS BEGINS -->\n";
        echo "<!-- ============ -->\n";
        echo "\n";
	echo "<div id=\"menu\">\n";
	include 'modules/menu_mod.php';
	echo "</div>\n";
	echo "\n";
	echo "<!-- ========== -->\n";
        echo "<!-- MENUS ENDS -->\n";
        echo "<!-- ========== -->\n";
        echo "\n";
        echo "\n";
 }

   /* END OF MENU PRINTING */ 
    
  
  /* BLOG-ARTICLES PRINTING BEGINS */

  /* EACH ARTIClE IS LOADED FROM A FILE NAMED LIKE: blog$NUMBER */
  
  /* IF ./contain/last.blog EXISTS THEN MAKE THE LAST BLOG-ARTICLE TO last.blog INSTEAD */
   if (file_exists("contain/last.blog") ) {
	   $lastnr = file("contain/last.blog");
	   $max = ereg_replace("\n", "", $lastnr[0]);
	   if ($max>16) {
		   $min=$max-16;
	   }
  /* ELSE DON'T SET $min TO 0 */
	   else {
		   $min=0;
	   }
   }
   else {
	   $max = 16;
	   $min = 0;
   }

   if (($get_max) && ($get_min)) {
	/* 
	   IF THE $get_max AND $get_min EXISTS THEN THESE VALUES WOULD OVERRUN THE DEFAULT $max AND $min
	   BUT ONLY IF $get_max IS LARGER OR THE SAME SIZE AS $get_min. 
	*/
	   if ($get_max >= $get_min) {
		   $max = $get_max;
		   $min = $get_min;
	   }
   }
   
   for ( $numb = $max ; $numb >= $min ; $numb-- ) {
	   if (file_exists("contain/blog$numb") ) {
                           echo "<!-- ARTICLE $numb -->\n";
                           echo "\n";
		   echo "<div class=\"post-container\">";
		   $lines5 = file("contain/blog$numb");
		    foreach ($lines5 as $line_num5 => $line5) {
			    echo $line5;
		    }
                    if ( file_exists('modules/element_mod.php') )
                    	   include 'modules/element_mod.php';
		    echo "</div>";
		    echo "\n";
                    echo "<!-- ARTICLES $numb ENDS -->\n";
                    echo "\n";
                    }
   }	       
?>
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
