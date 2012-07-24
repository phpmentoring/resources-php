<?php

/**
 * A refactored version of solution 1 that generates a random 5 star
 * rating as a decimal number.
 *
 * As well as the code being refactored, this solution outputs the
 * result as <img> tags using the star images in the assets directory
 *
 */

function getRating()
{
    $rating = rand(0,50) / 10;

    $partialStar = 0;

    $fullStars = floor($rating);

    if ($rating - $fullStars > 0) $partialStar = 1;

    $emptyStars = 5 - $fullStars - $partialStar;

    $ratingDisplay = '';

    for($i = 0; $i < $fullStars; $i++) {
        $ratingDisplay .= '<img src="assets/star_full.png" alt="Star image"/>';
    }

    if ($partialStar)
    {
        $ratingDisplay .= '<img src="assets/star_partial.png" alt="Star image"/>';
    }

    for($i = 0; $i < $emptyStars; $i++) {
        $ratingDisplay .= '<img src="assets/star_empty.png" alt="Star image"/>';
    }

    echo $ratingDisplay . '  (' . $rating . ")";
}

//execute the function
getRating();

//refresh the page multiple times to see the output change