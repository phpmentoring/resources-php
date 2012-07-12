<?php

/**
 * A function that generates a random 5 star rating as a decimal
 * number and outputs the result as a string (in place of star
 * images)
 *
 */

function setRating()
{
    $actualRating = rand(0,50) / 10;

    $star_full = $actualRating;


    if (is_float($star_full))
    {

        $star_partial = 1;

        $star_full = (int)$star_full;

    } else if (is_int($star_full)){

        $star_partial = 0;
    }

    $star_empty = 5 - $star_full - $star_partial;

    $ratingDisplay = '';

    for($i = 0; $i < $star_full; $i++) {
        $ratingDisplay .= 'Full Star  ';
    }

    if ($star_partial)
    {
        $ratingDisplay .= 'Partial Star  ';
    }

    for($i = 0; $i < $star_empty; $i++) {
        $ratingDisplay .= 'Empty Star  ';
    }

    echo $ratingDisplay . '  (' . $actualRating . ")";
}


//execute the function
setRating();

//refresh the page multiple times to see the output change