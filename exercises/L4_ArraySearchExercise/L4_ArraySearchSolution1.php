<?php
/**
 * User: mindyk
 * Date: 24.07.12
 * Time: 15:03
 */
function getSunHours($zipcode)
{
	global $aSunHours;

	if($plz < $Sonnenstunden[0][0])
	{
		return -1;
	}

	foreach($Sonnenstunden as $a)
	{
		if($a[0] == $plz)
		{
			return $a[1];
		}
	}

	return holeSonnenstunden($plz-1);
}