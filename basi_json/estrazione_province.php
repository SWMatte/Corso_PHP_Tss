<?php 
include("./config.php");

 

$province_string = file_get_contents('province.json');
$province_array = json_decode($province_string);

$dsn="mysql:host=".DB_HOST.";dbname=".DB_NAME;
try {
    $conn = new PDO($dsn,DB_USER,DB_PASSWORD);
    $conn->query('TRUNCATE TABLE province');

foreach ($province_array as $key => $provincia) {
   
    $nome=addslashes($provincia->nome);
    $sigla=$provincia->sigla;
    $sqlID = "SELECT regione_id from regioni where nome=\"$provincia->regione\"";


     /* il metodo fetch rende in un unica colonna il risultato 
     il metodo prendere in considerazione il nome della regione e l'id corrispondente a quella
      regione e con fetchcolumn mi restituisce come unico valore l'id corretto  */
    $idRegione=$conn->query($sqlID)->fetchColumn();




    $sqlInsert= "INSERT INTO province (nome, sigla, regione_id) VALUES( '$nome','$sigla','$idRegione');";
    $conn->query($sqlInsert);
} 
}
catch (\Throwable $th) {
    throw $th;
}
   

 

?>