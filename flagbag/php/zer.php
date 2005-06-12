<?php
   /*
   zer.php
   Version 0.5.1
   Copyright (C) 2005
   Niklas Lindblad <niklas.lindblad@gmail.com>
   Patrik Nilsson  <putte@home.frozentux.net>
   Released under the GNU General Public License version 2
  */

  /* LOCALES */
  /* Modify to fit current language/country/time-zone */
  setlocale(LC_ALL, 'sv_SE'); /* Sets the locate to (Swedish in Sweden) */


  /* ALTERNATIVE VARIABLES */
  /* These are variables related to the layout and displaying of the pages */
  
  /* Sets the path to the styles-sheet (CSS) if it exists */
  if ( file_exists('css/layout.css') )
        $style_sheet = "css/layout.css";

  /* The page title and also the first header-element is set here */
  $title = "flagbag 0.5.1";

  /* URL to the blog */
  $url = "http://linux.rwarforums.com/blog";

  /* CRITICAL VARIABLES */
  /* These variables are critical because they are used by more than one page */
  /* Don't modify if you don't know what you're doing */


  /* CURRENT VERSION OF THE ENGINE */
  $tag = "flagbag 0.5.1";

  /* A variable for time is declared */  
  $tmp_now = strftime("%Aen %d %B %Y %H:%M:%S");
  /* The usable variable is made out of the one above */
  $now = ucwords($tmp_now);

  /* Look-up what version of PHP that is being used */
  $php_version = 'PHP version ' . phpversion();

  /* Look-up what webbrowser the visitor is using */
  $client = $_SERVER['HTTP_USER_AGENT'];

?>
