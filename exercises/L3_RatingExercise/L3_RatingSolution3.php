<?php
function ratingExercise() {

    $fullStar = '<img src="fullStar.png" />';
    $partialStar = '<img src="partialStar.png" />';
    $emptyStar = '<img src="emptyStar.png" />';
    $ratingArr = array($emptyStar, $emptyStar, $emptyStar, $emptyStar, $emptyStar);
    $str = "";




    $rating = mt_rand(1,50) / 10;

    $int = floor($rating);//how many full stars
    $rest = 5 - $int;//how many empty stars
    $dec = $rating - $int;//do we have partial star

    if($int >= 1){

        for ($i = 0; $i < $int; $i++) {//replace the empty stars with full stars in array

            $ratingArr[$i] = $fullStar;
        }

        if ($dec > 0) {//if we have partial stars positon after the last full star in array
            $ratingArr[$int] = $partialStar;
        }

    }else if ((0 < $rating) && ($rating < 1)) {//if we have subunitar rating
        $ratingArr[0] = $partialStar;
    }

    foreach ($ratingArr as $key => $value) {//create the string
        $str .= " ".$value;
    }

    return $str." ($rating)";




}
echo ratingExercise();
