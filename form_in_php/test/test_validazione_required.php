<?php

// $files = scandir("./form_in_php/class/validator");


require "/xampp/htdocs/corso_php_mysql_2223/form_in_php/class/validator/ValidateRequired.php";
/*primi due valori sono vuoti 3-4 dovrebbe risp non superato */
$datas = ['', "", '    ', '<h1></h1>', '<p> </p>', 'ciao', 'numero', ''];
 

$v = new ValidateRequired();

 $v->isEmpty($datas);
    
     
    
    
     
   
    
