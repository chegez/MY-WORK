<?php
$months=["JAnuary", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
foreach($months as $month) {
       $firstDateInMonth="1st " . " {$month} " . date("Y");
       echo $firstDateInMonth;
}
