<?php
//Form method is POST
//Calculating area and cicumference of a circle
function area_circle($pi, $rad){
return $pi* $rad* $rad;
}

$pi="3.142";
$rad="7cm";

echo "The circumference of the circle is=" . (3.142* $rad*2). "<br> ";
echo "THe area of the circle is=" . (3.142*$rad*$rad). "<br> "; 

