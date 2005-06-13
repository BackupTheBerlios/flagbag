<?php
	$msg = "endast denna";
	$msg_main = "tillbaka";
	if ($max!=$min) {
		echo "<a href=\"$url/?max=$numb&amp;min=$numb\">$msg</a>";
	}
	else {
		echo "<a href=\"$url/\">$msg_main</a>";
	}
?>
