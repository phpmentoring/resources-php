<?php

function getRating($useImages = true) {
	//array that maps 0 to empty, 1 to partial, 2 - 6 to full
	$str = array('star_empty', 'star_partial', 'star_full', 'star_full', 'star_full', 'star_full', 'star_full');

	if($useImages) {
		foreach($str as &$img) {
			$img = sprintf('<img src="assets/%s.png"/>', $img);
		}
	}
	
	//create an array of five slots (0 to 6 in each slot)
	$rating = array();
	for($i = 0; $i < 5; $i++) { 
		$rating[] = rand(0,6);
	}

	//reverse sort the slots to 6 (full) comes first and empty (0) comes last
	rsort($rating);

	//replace the numbers with their string representation
	foreach($rating as &$r) {
		$r = $str[$r];
	}
	
	return implode("\n", $rating);
}

echo getRating();