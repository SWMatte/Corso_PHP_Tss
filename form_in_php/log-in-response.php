 <?php
/*1)come passiamo i dati: via get 
2) variabile da ottenere cioe la stringa "email" 
che vogliamo ottenere dal get
3) è una costante, che valida l'email.

*/
 

$test= filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);

if($test==false){
    echo "\n la mail non è valida\n";
} else{
    echo "la mail è valida: $test";
}




 ?>