<?php

// $files = scandir("./form_in_php/class/validator");

require "/xampp/htdocs/Corso_PHP_Tss/form_in_php/class/validator/Validable.php";
require "/xampp/htdocs/Corso_PHP_Tss/form_in_php/class/validator/ValidateDate.php";



/*primi due valori sono vuoti 3-4 dovrebbe risp non superato  */
$date = ['20#01#1990', "1/02/1190", "", "31/01/1990", "20.01.1990", "20-1-19999"];






$testDates = [
    [
        'input' => '           ',
        'expected' => false
    ],
    [
        'input' => '1/02/9901 ',
        'expected' => false
    ],
    [
        'input' => '1/02/1990',
        'expected' =>false
    ],
    [
        'input' => '1/02/9901 ',
        'expected' => false
    ],
    [
        'input' => '01/02/19901 ',
        'expected' => false
    ],
    [
        'input' => '01-02-1901 ',
        'expected' => false
    ],
    [
        'input' => '01.02.1901 ',
        'expected' => false
    ],
    [
        'input' => ' 01.02.1901 ',
        'expected' => false
    ],
    [
        'input' => '01.012.1901 ',
        'expected' => false
    ],
     [
        'input' => '011.02.1901 ',
        'expected' => false
    ]


];

foreach ($testDates as $key => $test) {
    $input = $test['input'];
    $expeted= $test['expected'];


$v = new ValidateDate();

if($v-> isValid($input)!=$expeted){
    echo"test n:$key NON superato mi aspettavo:";
    var_dump($expeted);
    echo"ma ho trovato:";
    var_dump($v->isValid($input));

};


 
// foreach ($date as $i => $data) {
//     if ($v->isValid($data)) {
//         echo "[$i] vero";
//     } else {
//         echo "[$i] falso";
//     }
 }