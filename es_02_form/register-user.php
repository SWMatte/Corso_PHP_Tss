<?php


$first_name = filter_input(INPUT_POST, 'first_name');


 
/* null se non passo dal form.

- se compilato restituisce una stringa, se compilato vuoto da stringa 0
- false solo con criterio non rispettato quindi mettendo un validate
qualcosa andrebbe a rispondere false 
*/
var_dump($first_name);
?>