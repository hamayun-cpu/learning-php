<?php

// $animals = ['dog', 'cat', 'mouse'];

// require 'index.view.php';


// function calculate_count() {
// 	global $count;
// 	// will print 0 and increment global variable
//     echo $count . ' ';
// 	$count++; 
//     echo $count . ' ';
// }

// function counter()
// {
//     global $count;
//     $count++;
//     function counte()
//     {
//         global $count;
//         echo $count . ' ';
//         $count++;
//     }
//     counte();
//     echo $count;
// }
// $count = 1;
// counter();


$a = [1,2,3,4];
$b = $a;
$b[0]=0;
$b="hello";
// $a = 'hello';

print_r($a);
print_r($b);
// echo $a[1];
// echo $b;

