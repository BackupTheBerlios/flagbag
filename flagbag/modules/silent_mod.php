<?php
	/* This is the silent modules control file
	Example of use: include 'modules/youraddon_silent.php';
	please add the _silent in the end so other admins easly
	could see that this is a silent module.

	if your module should have pages please have a subfolder
	called the module name in the modules folder containing
	all neaded data/php/img.
	
	if your module store some kind of logs please do this in
	the logs dir. there you should use the modulename.log as
	the file name for the log. */
 
	/* DECLARED MODULES TO BE USED */
	include 'modules/logger_silent.php'; /* A simple visitor-logging module */
?>
