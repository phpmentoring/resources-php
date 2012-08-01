<?php

/**
 * A function that generates a random 5 star rating as a decimal
 * number and outputs the result as a string (in place of star
 * images)
 *
 */

function getRating()
{
    $actualRating = rand(0,50) / 10;

    $starFull = $actualRating;
  
    $starPartial = 0;

    if (is_float($starFull))
    {

        $starPartial = 1;

        $starFull = (int)$starFull;

    }

    $star_empty = 5 - $starFull - $starPartial;

    $ratingDisplay = '';

    for($i = 0; $i < $starFull; $i++) {
        $ratingDisplay .= 'Full Star  ';
    }

    if ($starPartial)
    {
        $ratingDisplay .= 'Partial Star  ';
    }

    for($i = 0; $i < $star_empty; $i++) {
        $ratingDisplay .= 'Empty Star  ';
    }

    echo $ratingDisplay . '  (' . $actualRating . ")";
}


//execute the function
getRating();

//refresh the page multiple times to see the output change
