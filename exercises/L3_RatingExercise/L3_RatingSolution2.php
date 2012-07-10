<?php

/**
 * A refactored version of the function solution 1 that generates a
 * random 5 star rating as a decimal number. 
 *
 * As well as the code being refactored, this solution outputs the 
 * result as <img> tags using the star images in the assets directory
 *
 */

function setRating()
{
    //generate a random whole or decimal number between 0 and 5
    //retain original value for display purposes
    $rating = rand(0,50) / 10;

    //initialise partialStar variable to false
    $partialStar = 0;

    //round rating down nearest whole number
    $fullStars = floor($rating);

    //determine whether a partial star is required
    if ($rating - $fullStars > 0) $partialStar = 1;

    //calculate number of empty stars required to display
    $emptyStars = 5 - $fullStars - $partialStar;

    //initialise variable to hold star rating output
    $ratingDisplay = '';

    //generate html for full stars, if required
    for($i = 0; $i < $fullStars; $i++) {
        $ratingDisplay .= '<img src="assets/star_full.png" alt="Star image"/>';
    }

    //generate html for partial star, if required
    if ($partialStar)
    {
        $ratingDisplay .= '<img src="assets/star_partial.png" alt="Star image"/>';
    }

    //generate html for empty stars, if required
    for($i = 0; $i < $emptyStars; $i++) {
        $ratingDisplay .= '<img src="assets/star_empty.png" alt="Star image"/>';
    }

    //print star rating as html, with actual rating value in parenthesis
    echo $ratingDisplay . '  (' . $rating . ")";
}

//execute the function
setRating();

//refresh the page multiple times to see the output change