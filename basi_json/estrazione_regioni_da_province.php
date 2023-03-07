<?php
include("./config.php");
/*dobbiamo convertirla in qualcosa di non stringa */
$province_string = file_get_contents('province.json');
$province_object = json_decode($province_string);
/*trasforma un array in un altro array in pasto bisogna dargli l'array che vuoi trasformare
cioe nella funzione mettiamo un indice che vogliamo estrarre  */
$regioni_array = array_map(function ($provincia) {

    return $provincia->regione;
}, $province_object);

/* leva l'array unique i valori duplicati all'interno di un array*/
$regioni_unique = array_unique($regioni_array);
/*ordina dal numero piu piccolo ma essendo per riferimento non posso assegnarlo ad una variabile */
sort($regioni_unique);

/* il dns è composto dalla tecnologia che si vuole usare quindi mysql/oracle
    host è il nome del DB
    e poi c'è il nome del db cove deve fare le query
*/
$dsn="mysql:host=".DB_HOST.";dbname=".DB_NAME;

/* nel connettor pdo() vuole il dsn , e la stringa di user e password che noi abbiamo fatto come costanti*/
try {
    $conn = new PDO($dsn,DB_USER,DB_PASSWORD);
    $conn->query('TRUNCATE TABLE regioni');
    
    foreach ($regioni_unique as $regione) {
        $regione=addslashes($regione);  // questa notazione aggiunge l'escape ai caratteri che sono valle d'aosta
        $sql = "INSERT INTO regioni (nome) VALUES('$regione');";
        $conn->query($sql);
    }

} catch (\Throwable $th) {
    throw $th;
}







// print_r($regioni_unique);
