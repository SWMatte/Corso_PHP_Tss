<?php
/*1)come passiamo i dati: via get 
2) variabile da ottenere cioe la stringa "email" 
che vogliamo ottenere dal get
3) è una costante, che valida l'email.

*/
echo "dati utente: <br>";
$name= filter_input(INPUT_GET,"first_name");
$last_name= filter_input(INPUT_GET,"last_name");
$birthday= filter_input(INPUT_GET,"birthday");
$birth_place= filter_input(INPUT_GET,"birth_place");
$gender= filter_input(INPUT_GET,"gender");
$username= filter_input(INPUT_GET,"username");
$password= filter_input(INPUT_GET,"password");


echo"<pre>";
print_r($name."\n".$last_name."\n".$birthday."\n".$birth_place."\n".$gender."\n".$username."\n".$password."\n");
echo "</pre>";


    // foreach($_GET AS $i){
    //     echo $i;
    // }

 ?>