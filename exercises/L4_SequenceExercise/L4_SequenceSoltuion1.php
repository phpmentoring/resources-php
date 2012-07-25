<?php
/**
 * User: michael.indyk
 * Date: 25.07.12
 * Time: 08:35
 */
function getXpForLevel($level) {
	$xp = 0;
	for ($i=1; $i <= $level; $i++) {
		$xp += $i * 100;
	}

	return $xp;
}

echo getXpForLevel(1)."\n";
echo getXpForLevel(2)."\n";
echo getXpForLevel(3)."\n";
echo getXpForLevel(4)."\n";