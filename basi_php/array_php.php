<?php

// echo "ciao";


#index array

// $colori = array() 
$colori = ['red', "green", "blue"];

// echo "\n" . $colori[2];

#associative array
$persona = [
    "nome" => "mario",
    "cognome" => "Rossi",
    "email" => " a@b.it"
];

/* analizza il contenuto di una variabile il suo cugino è var_dump*/
// print_r($persona);
// var_dump($persona);


// echo $persona["cognome"];

$classe = array( 
    [
        "nome" => "mario",
        "cognome" => "Rossi",
        "email" => " a@b.it"  
    ],

    [
        "nome" => "luca",
        "cognome" => "tini",
        "email" => " a@b.it"
    ]
);

// print_r($classe[0]["nome"]);
#imperativo

for ($i=0; $i < count($classe) ; $i++) { 
    $allievo = $classe[$i];

    // echo $allievo["nome"]."\n";
}

// primo valore è l'array, poi la chiave è il nostro indice che puo essere 
// numero o una parola , il value in questo caso è un allievo
foreach ($classe as $i=> $allievo) {
 echo ($i+1).")". $allievo["nome"];
 echo "\n";
}

#approccio dichiarativo

 echo "map di array \n";

function stampaNome($allievo){

    echo $allievo['nome']."\n";
}

array_map("stampaNome",$classe);