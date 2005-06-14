<?php
	/* This module adds a link for every element thats transports you to
	   and form a singel blogg element. */
	
	$msg_only = "endast denna"; // Only this one
	$msg_main = "tillbaka"; // Return
	
	if ($max!=$min) {
		echo "<a href=\"$url/?max=$numb&amp;min=$numb\">$msg_only</a>";
	}
	else {
		echo "<a href=\"$url/\">$msg_main</a>";
	}
?>
