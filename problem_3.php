<?php

/*
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
*/


// php problem_3.php

function IsPrime($n)
{
    for($x=2; $x<$n; $x++)
    {
        if($n %$x ==0)
        {
            return 0;
        }
    }
    return 1;
}
$input = 0;
$count = 0;
while($input != 1){
//    $var1 = 600851475143 - $count;
    $var1 = 600851475067  - $count;
    $var2 = IsPrime($var1);
    print $var1 . " " . $var2 . "\n";
    if($var2 == 1){
        print $var2 . " is a prime \n";
        $input = 1;
        return $input;
    }
    $count++;
}