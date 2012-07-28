<?php
require_once("assets/sunhours.php");
function getSunHours($zip, $aSunHours) {
   if($aSunHours[0][0] > $zip)
      return -1;
   for($i = 1;$i < count($aSunHours);$i++) {
       if($aSunHours[$i][0] > $zip)
	      return $aSunHours[$i - 1][1];
   }
   
   return $aSunHours[count($aSunHours) - 1][1];
}

echo getSunHours(21076, $aSunHours);
?>