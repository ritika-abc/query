<?php

//  $a = 10;
//  $b = 20;
//  $c = $a + $b;
//  echo $c;

// $a = "php ";
// $a .= "my sub : ";
// echo $a;


// $name = "deev";
// $sub = "php";

// echo "my name is " . $name . "and my sub is" . $sub;

// and {&&} // or {||}

// and {&&}

// T + T = T
// T + F = F
// F + T = F
// F + F = F

// $age = 1;
// $nes = "IND";

// if($age >= 18  && $nes == "IND" ){
// echo "you have voting right !";
// }else{
// echo "next time !!";
// }


// or {||}
// T + T = T
// T + F = T
// F + T = T
// F + F = F


$age = 18;
$nes = "US";
if ($age >= 18 || $nes == "IND") {
    echo "you have voting right !";
} else {
    echo "next time !!";
}
