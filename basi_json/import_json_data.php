<?php
/* prende nome file come primo argomento, ma è possibile mettere anche l'url che contiene il file*/



// $province = file_get_contents('https://gist.githubusercontent.com/stockmind/8bcbbf9ac41bc196401b96084ec8c5d3/raw/2edda5cd32eb2b99d3d9b45413bc8b1135564260/province-italia.json');
    /* devi passare un nome di un file, e poi il contenuto che vuoi scrivere*/
    // file_put_contents('province.json',$province);


$province=file_get_contents('province.json');

// echo $province;



$province_object = json_decode($province);

// print_r($province_object[4]->nome);

// foreach ($province_object as $provincia_object  ) {
//     echo $provincia_object->nome."(".$provincia_object->sigla.")\n";
// }


/* cambiano le informazioni come vengono decodificate */
$province_associative_array = json_decode($province,true);

print_r($province_associative_array[4]);


print_r($province_associative_array[4]);

/* in questo caso essendo un array, se voglio solo i nomi dichiarero' l'indice*/
foreach ($province_associative_array as $provincia_associative_array  ) {
     echo "{$provincia_associative_array['nome']} ({$provincia_associative_array['sigla']})" ;
}



?>