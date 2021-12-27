<?php

require 'function.php';


class Task {
    public $description;

    protected $status;

    public function __construct($desc, $status) {
        $this->description = $desc;
        $this->status = $status;
    }

    public function complete() {
        $this->status = true;
    }

    public function isComplete() {
        return $this->status;
    }
}

$tasks = [
    new Task('shave', true),
    new Task('brush', false),
    new Task('take shower', false)
];

require 'index.view.php';

// dd($tasks);

// dd($tasks);



// require 'index.view.php';

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
//     $count = 1;
//     function counte()
//     {
//         global $count;
//         echo $count . 'qwe ';
//         $count++;
//     }
//     counte();
//     echo $count . ' ';
// }

// $count = 1;
// counter();


// $a = [1,2,3,4];
// $b = $a;
// $b[0]=0;
// $b="hello";
// // $a = 'hello';

// print_r($a);
// print_r($b);
// echo $a[1];
// echo $b;
