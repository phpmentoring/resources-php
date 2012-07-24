<?php
/**
 * User: mindyk
 * Date: 24.07.12
 * Time: 15:03
 */

include '../assets/sunhours.php';

function getSunHours($zipcode, $aSunHours) {

	if($zipcode < $aSunHours[0][0])
	{
		return -1;
	}

	foreach($aSunHours as $a)
	{
		if($a[0] == $zipcode)
		{
			return $a[1];
		}
	}

	return getSunHours($zipcode-1, $aSunHours);
}