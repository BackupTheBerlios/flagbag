<?php
	/* A simpel commentator function */
	/* Neads some other function to get singel weiv */
	if ($max==$min) {
		/* read settings */
		include 'modules/bukat_element/foshnu-zer.php';
		/* read earlier comments */
		include 'modules/bukat_element/tharb.php';
		?>
		<table>
			<form name="add" method="get" action="modules/bukat_element/bukat.php">
			<tr><td><kbd><? echo $msg_comment;?>: </kbd></td><td>
			<textarea name="text" ROWS=5 cols="40"></textarea><input type="hidden" name="max" value="<? echo $max; ?>"></td></tr>
			<tr><th colspan=2><input type="submit" value="<? echo $msg_add; ?>"></th></tr>
			</table>
		<?
	}
?>
