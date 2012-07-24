<?php

function getRating($useImages = true) {
	//array that maps 0 to partial, 1 to empty, 2 - 4 to full
	$str = array('star_partial', 'star_empty', 'star_full', 'star_full', 'star_full');

	if($useImages) {
		foreach($str as &$img) {
			$img = sprintf('<img src="assets/%s.png"/>', $img);
		}
	}
	
	//create an array of five slots (0 to 6 in each slot)
	$rating = array(1,1,1,1,0);
	for($i = 0; $i < 5; $i++) { 
		$rating[$i] = rand($rating[$i],4);
	}
        rsort($rating);
	//replace the numbers with their string representation
	foreach($rating as &$r) {
		$r = $str[$r];
	}
	
	return implode("\n", $rating);
}

echo getRating();