<?php

$BikePrice = array(
    "yamaha" => "3666",
    "hunda" => "2040",
    "fizer" => "54540"
);
echo $BikePrice['yamaha']."<br>";
foreach($BikePrice as $bikeName => $bikeTaka){
    echo $bikeName. " => ". $bikeTaka. "<br>";

}

