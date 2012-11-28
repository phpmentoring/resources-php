<?php
function getXP($level) {
   $xp = 0;
   for($i = 1;$i <= $level;$i++)
       $xp += $i * 100;
   return $xp;
}
?>