<?php

// $files = scandir("./form_in_php/class/validator");

/*

require "/xampp/htdocs/Corso_PHP_Tss/form_in_php/class/validator/ValidateRequired.php";

/*primi due valori sono vuoti 3-4 dovrebbe risp non superato  
$datas = ['', "", '    ', '<h1></h1>', '<p> </p>', 'ciao', 'numero', ''];
 

$v = new ValidateRequired();

 $v->isValid($datas);
    
*/

// require "./xampp/htdocs/Corso_PHP_Tss/form_in_php/class/validator/ValidateRequired.php";
require "./form_in_php/class/validator/ValidateRequired.php";
 $testCases = [
    [
        'input' => '           ',
        'expected' => false
    ],
    [
        'input' => 'ciao    ',
        'expected' => 'ciao'
    ],
    [
        'input' => '  ciao    ',
        'expected' => 'ciao'
    ],
    [
        'input' => 'ciao ',
        'expected' => 'ciao'
    ],
    [
        'input' => '',
        'expected' => false
    ],
    [
        'input' => '<h1>ciao</h1>',
        'expected' => 'ciao'
    ],
    [
        'input' => '<b>ciao</b>',
        'expected' => 'ciao'
    ],
    [
        'input' => '<b></b>',
        'expected' => false
    ],
    [
        'input' => '<h1></h1>',
        'expected' => false
    ],
    [
        'input' => '<b>   </b>',
        'expected' => false
    ]


];

foreach ($testCases as $key => $test) {
    $input = $test['input'];
    $expeted= $test['expected'];

$v =new ValidateRequired();
if($v-> isValid($input)!=$expeted){
    echo"test n:$key NON superato mi aspettavo:";
    var_dump($expeted);
    echo"ma ho trovato:";
    var_dump($v->isValid($input));

};
}