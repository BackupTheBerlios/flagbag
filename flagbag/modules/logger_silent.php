<?php
   /*
   logger_silent.php
   Version 0.5.1
   Copyright (C) 2005
   Niklas Lindblad <niklas.lindblad@gmail.com>
   Patrik Nilsson  <putte@home.frozentux.net>
   Released under the GNU General Public License version 2
  */

  /* Include our master-file */
  include 'php/zer.php';


  /* VARIABLES FOR LOGGING */
  /* Visitors IP-address into String */
  $ip = $_SERVER["REMOTE_ADDR"];
  /* Remotely active port into String */
  $port = $_SERVER["REMOTE_PORT"];
  

  /* TEST WHAT BROWSER IS BEING USED  */

    if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Gecko') )
          {
       if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape') )
             {
              $browser = 'Netscape (Gecko/Netscape)';
             }
              else if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') )
                          {
                           $browser = 'Mozilla Firefox (Gecko/Firefox)';
                          }
              else
                  {
                   $browser = 'Mozilla (Gecko/Mozilla)';
                  }
                             }
                  else if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') )
                             {
                     if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') )
                            {
                             $browser = 'Opera (MSIE/Opera/Compatible)';
                            }
                       else
                           {
                            $browser = 'Internet Explorer (MSIE/Compatible)';
                           }
                                 }
                            else
                                {
                                 $browser = 'Others browser';
                                }

  /* END OF BROWSER IDENTIFIER CODE */


  /* VARIABLE FOR LOGGING OUTPUT */

  /* File to output log to is declared into String */
  $filename = 'logs/logger_silent.log';
  /* This formats the loggers output to fit into the table in log.php */
  $output = "<tr><td>$now</td><td><b>$ip:$port</b></td><td><i> - $browser</i></td></tr>\n";

  
  /* WRITING TO THE LOGFILE */

  /* Is file declared in $filename writeable? */
     if (is_writable($filename)) {

  /* Open file in append-mode */
   if (!$handle = fopen($filename, 'a')) {
  /* Print an error message if the file cannot be opened */  
       echo "Cannot open file ($filename)";
         exit;
          }
   
  /* Print the String $output to file $filename */ 
     if (fwrite($handle, $output) === FALSE) {
       exit;
        }

         fclose($handle);
                  
            } else {
  /* Once again, show an error message if file not writeable */               
                 echo "The file $filename is not writable";
                   }

?> 
