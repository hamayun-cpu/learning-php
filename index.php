<?php

// $animals = ['dog', 'cat', 'mouse'];

// require 'index.view.php';


function calculate_count() {
	global $count;
	// will print 0 and increment global variable
    echo $count . ' ';
	$count++; 
    echo $count . ' ';
}

$count = 10;
calculate_count();
echo $count;
