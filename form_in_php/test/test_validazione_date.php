<?php

// $files = scandir("./form_in_php/class/validator");


require "/xampp/htdocs/corso_php_mysql_2223/form_in_php/class/validator/ValidateDate.php";
/*primi due valori sono vuoti 3-4 dovrebbe risp non superato */
$date = ['20#01#1990', "1/02/1190", "", "31-01-1990", "20.01.1990", "20-1-19999"];


$v = new checkDate();

foreach ($date as $i => $data) {
    if ($v->validateDate($data)) {
        echo "[$i] vero";
    } else {
        echo "[$i] falso";
    }
}
