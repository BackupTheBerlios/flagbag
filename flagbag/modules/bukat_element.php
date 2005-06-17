<?php
	/* A simpel commentator function */
	/* Neads some other function to get singel weiv */
	if ($max==$min) {
		/* read settings */
		include 'modules/bukat_element/foshnu-zer.php';
		/* read earlier comments */
		include 'modules/bukat_element/tharb.php';
		?>

		<form method="post" action="modules/bukat_element/bukat.php">
			<table>
			<tr><td><kbd><? echo $msg_comment;?>: </kbd></td></tr>
			<tr><td>
			<textarea name="text" rows="5" cols="40"></textarea><input type="hidden" name="max" value="<? echo $max; ?>"/></td></tr>
			<tr><th colspan="2"><input type="submit" value="<? echo $msg_add; ?>"/></th></tr>
			</table>
			</form>		
		<?
	}
?>
