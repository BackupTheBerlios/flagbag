<?php
	/* Becouse of some API limitations we have to use a separate zer.php
	   for this module (well it is a complitation only so dont worry */

	/* Include zer.php */
        if ( file_exists('../../php/zer.php') )
		include '../../php/zer.php';

	/* Open the css the right way */
	if ( file_exists('../../css/layout.css') )
	        $style_sheet = "../../css/layout.css";

	// Some settings
	$set_passwd = 1; // Allow the user to change password trou the
			 // web system
	$passwd_file = "../../contain/shaparbalaum.blog"; // Most be world writeable
	// IF you dont want it in engish change
	$title.=": Evil blogmaniac lab";

	/* maushjabum specific strings */
	$msg_title = "Title";
	$msg_time  = "Till-lagd";
	$msg_pwd   = "L�senord";
	$msg_blogg = "Blogg";
	$msg_add   = "L&auml;gg till";
	$msg_apply = "�ndra";

	/* More string but this ones are for save.php */
	$msg_pwd_fail = "Hmmm tyv�rr men det d�r �r inte r�tt\n";
	$msg_pwd_succ = "L�senordet godtaget.\n";
	$msg_save_fail = "Fan du det d�r gick inte s� bra du\n";
	$msg_save_succ = "Det �r sparat.\n";
	$msg_goto_main = "G� till huvud sidan.\n";
	$msg_goto_blog = "G� till blog-elementet.\n";
	$msg_menu_pasw = "Byt l�senord";

	/* even more strings but for passwd.php */
	$msg_pwd_old = "Gammla l�senordet";
	$msg_pwd_new = "Nya l�senordet";
	$msg_pwd_new_re = "Upprepa l�senordet";
	$msg_pwd_create = "NO PASSWORD FILE FOUND CREATING NEW";
?>
