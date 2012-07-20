<?php
    $rating = rand(0, 50) / 10;
    $str = "";
    $a = $rating + 1;
    do  {
        $a--;
        if (floor($a) >= 1)
           $str .= " <img src = 'stars/star_full.png'> ";
        else if ($a > 0) {
               $str .= " <img src = 'stars/star_partial.png'> ";
           }
    } while (floor($a) > 0);
    
    for ($i = 0; $i < 5 - ceil($rating); $i++)
        $str .= " <img src = 'stars/star_empty.png'> ";
        
    echo $str . " " . $rating;
?>
