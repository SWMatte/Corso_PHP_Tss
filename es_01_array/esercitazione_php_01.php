<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercitazione 01</title>
</head>

<body>
    <?php

    $arrayCose = array("Tennis", "Cinema", "no sport");
    function array2ul($array)
    {
        $list= "<ul>";
            for ($i=0; $i <count($array); $i++) { 
           $list.= "<li>$array[$i]</li>";
            }
            $list.="</ul>";
         
         return $list;
     }
        echo array2ul($arrayCose);
    ?>


</body>

</html>