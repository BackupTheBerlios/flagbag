<?php
	/* Becouse of some API limitations we have to use a separate zer.php
	   for this module (well it is a complitation only so dont worry */

	/* Include zer.php */
        if ( file_exists('../../php/zer.php') )
		include '../../php/zer.php';

	/* Open the css the right way */
	if ( file_exists('../../css/layout.css') )
	        $style_sheet = "../../css/layout.css";

	// IF you dont want it in engish change
	$title.=": Evil blogmaniac lab";

	/* maushjabum specific strings */
	$msg_title = "Title";
	$msg_time  = "Till-lagd";
	$msg_pwd   = "L�senord";
	$msg_blogg = "Blogg";
	$msg_add   = "L&auml;gg till";

	/* More string but this ones are for add.php */
	$msg_pwd_fail = "Hmmm tyv�rr men det d�r �r inte r�tt\n";
	$msg_pwd_succ = "Grattis du jag sparar din blog nu: \n";
	$msg_save_fail = "Fan du det d�r gick inte s� bra du\n";
	$msg_save_succ = "Bloggen �r sparad.\n";
?>
