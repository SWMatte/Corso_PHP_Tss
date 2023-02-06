<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basi_php</title>
</head>

<body>

    <?php
    /*Inizio variabili con $ poi nome, ; per chiudere */
    $nome = "Mario";
    $eta = 50;
    /* gli array non sono oggetti anche se in php ci sono
    
    */
    $passatempi = array("Tennis", "Cinema", "no sport");

    function saluta($nome)
    {
        return "Ciao io sono $nome, come va?";
    }
    /* posso scrivere dell'html all'interno delle stringhe per 
        farlo interpretare:*/
    echo saluta($nome);

    echo saluta("Gianni");

    echo "<p>" . saluta($nome) . "</p>";

    /*
            per stampare l'array non essendo una stringa devo contare quanti elementi tiene
         quindi uso la fz count 
         */
    echo "<ul>";
    for ($i = 0; $i < count($passatempi); $i++) {
        echo "<li>$passatempi[$i]</li>";
    }

    echo "</ul>"
    ?>

</body>

</html>