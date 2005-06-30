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
	$msg_pwd   = "Lösenord";
	$msg_blogg = "Blogg";
	$msg_add   = "L&auml;gg till";
	$msg_apply = "Ändra";

	/* More string but this ones are for save.php */
	$msg_pwd_fail = "Hmmm tyvärr men det där är inte rätt\n";
	$msg_pwd_succ = "Lösenordet godtaget.\n";
	$msg_save_fail = "Fan du det där gick inte så bra du\n";
	$msg_save_succ = "Det är sparat.\n";
	$msg_goto_main = "Gå till huvud sidan.\n";
	$msg_goto_blog = "Gå till blog-elementet.\n";
	$msg_menu_pasw = "Byt lösenord";

	/* even more strings but for passwd.php */
	$msg_pwd_old = "Gammla lösenordet";
	$msg_pwd_new = "Nya lösenordet";
	$msg_pwd_new_re = "Upprepa lösenordet";
	$msg_pwd_create = "NO PASSWORD FILE FOUND CREATING NEW";
?>
