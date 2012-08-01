#!/usr/bin/env php
<?php

$stars = 5;
$rating = $count = mt_rand(0, $stars * 10) / 10;
$output = "";

while ($count >= 1) {
	$stars--;
	$count--;
	$output .= "Full Star ";
}

if ($count > 0) {
	$stars--;
	$output .= "Partial Star ";
}

while ($stars > 0) {
	$stars--;
	$output .= "Empty Star ";
}

echo $output . "($rating)\n";
