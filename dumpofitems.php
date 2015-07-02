<?php
$shoppinglist=$items;
//items and values be echoed plus total
$items=$items("charger"=>"550",
    "shoes"=>"2500",
    "decorder"=>"4000",
    "socks"=>"1000",
    "bulb"=>"350");

$items=$items[$shoppinglist];
echo "Shoppinglist $shoppinglist will be $items";



