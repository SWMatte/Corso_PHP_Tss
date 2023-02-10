<?php

 
require "./es_02_form/class/validator/ValidateMail.php" ;

$emails = [
    'a','   ','a@',

];


$v = new ValidateMail();

/* separa i metodi dagli oggetti la -> 
 è come mettere v. qualcosa
*/

foreach($emails as$index => $email){
  if($v->isValid($email) ==false){
        echo "test superato";
  } else{
        echo " test numero $index non superato per [$email]";
  };
    
}