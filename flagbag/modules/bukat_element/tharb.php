<?php 
	/* This function read earlier comments */
	
	/* comments are stored in bukat_element/contain/
	   in this syntax:

	   $id.blog = contains the id for the last comment
	   for $id, where $id is the element id.

	   the real comment files are called:
	   $cid.$id.blog

	   where $id is as before and $cid is the comment id.
	*/

	if (file_exists("modules/bukat_element/contain/$max.blog") ) {
		 $tharb_file = file("modules/bukat_element/contain/$max.blog");
		 $tharb_max = ereg_replace("\n", "", $tharb_file[0]);
		 if ($tharb_max>16) {
			 $tharb_min=$tharb_max-16;
		 }
		 else {
			 $tharb_min=0;
		 }

		 // Print the comments

		 for ( $tharb_numb = $tharb_max ; $tharb_numb >= $tharb_min ; $tharb_numb-- ) {
			 if (file_exists("modules/bukat_element/contain/$tharb_numb.$max.blog") ) {
				 $tharb_lines = file("modules/bukat_element/contain/$tharb_numb.$max.blog");
				 foreach ($tharb_lines as $line_num7 => $tharb_lines) {
					 echo $tharb_lines;
				 }
			 }
		 }
	}
?>
