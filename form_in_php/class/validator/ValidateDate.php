<?php
class checkdate
{

    public function validateDate($date)
    {
        $formati = ["d-m-Y", "d.m.Y", "d/m/Y"];
        foreach ($formati as $formato) {
            $d = DateTime::createFromFormat($formato, $date);
            /*
            -primo controllo cioe $d verifica che le date dell'array abbiano un formato come nella mia lista non
             potrebbe accettare date scritte come d#m#Y ma accetterebbe ad esempio 30/02/1990

            - secondo controllo, utilizzando metodo di DateTime ->format($formato)==date si va a verificare che l'oggetto
             DateTime creato sia valido ad esempio verifica che 30/02/1990 sia valido per febbraio, in questo caso darebbe falso
              
            */   
            if( $d && $d->format($formato) == $date){
                return true;
            }
              
        }
        return false;   
    }
}
