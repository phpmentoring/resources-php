<?php

/**
 * A function that generates a random 5 star rating as a decimal
 * number and outputs the result as a string (in place of star 
 * images)
 *
 */

function setRating()
{
    //generate a random whole or decimal number between 0 and 5
    //retain original value for display purposes
    $actualRating = rand(0,50) / 10;

    $star_full = $actualRating;

    //check if the number is a decimal number
    if (is_float($star_full))
    {
        //if it is, a partial star is needed
        $star_partial = 1;

        //cast the float to an int (removing the decimal portion
        //of the number) and save remaining whole number as the 
        //number of full stars required
        $star_full = (int)$star_full;

    } else if (is_int($star_full)){

        //if it isn't, a partial star is not needed
        $star_partial = 0;
    }

    //calculate the number of empty stars required to complete the
    //output
    $star_empty = 5 - $star_full - $star_partial;

    //initialise variable to hold star rating output as a string
    $ratingDisplay = '';

    //generate output for full stars, if required
    for($i = 0; $i < $star_full; $i++) {
        $ratingDisplay .= 'Full Star  ';
    }

    //generate output for partial star, if required
    if ($star_partial)
    {
        $ratingDisplay .= 'Partial Star  ';
    }

    //generate output for empty stars, if required
    for($i = 0; $i < $star_empty; $i++) {
        $ratingDisplay .= 'Empty Star  ';
    }

    //print star rating as string, with actual rating value in parenthesis
    echo $ratingDisplay . '  (' . $actualRating . ")";
}


//execute the function
setRating();

//refresh the page multiple times to see the output change