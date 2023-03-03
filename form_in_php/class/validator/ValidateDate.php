<?php
class ValidateDate implements Validable
{
    /*
    public function isValid($date)
    {
        $formati = ["d-m-Y", "d.m.Y", "d/m/Y"];
        foreach ($formati as $formato) {
            $d = DateTime::createFromFormat($formato, $date);
            /*
            -primo controllo cioe $d verifica che le date dell'array abbiano un formato come nella mia lista non
             potrebbe accettare date scritte come d#m#Y ma accetterebbe ad esempio 30/02/1990

            - secondo controllo, utilizzando metodo di DateTime ->format($formato)==date si va a verificare che l'oggetto
             DateTime creato sia valido ad esempio verifica che 30/02/1990 sia valido per febbraio, in questo caso darebbe falso
              
               
            if( $d && $d->format($formato) == $date){
                return true;
            }
              
        }
        return false;   
    }



*/



    private $value;
    private $message;
    private $valid;
 
    public function __construct($default_value="", $message = 'è obbligatorio')
	{
        
		$this->value = $default_value;
		$this->valid = true;
		$this->message = $message;
	}




    public function isValid($value)
    {
        $formato = "d/m/Y";

        $d = DateTime::createFromFormat($formato, $value);

       

        if ($d && $d->format($formato) == $value ) {
            $this->value=$value;
            $this->valid = true;
            return true;
        } else {

            $this->valid = false;
            return false;
        }
    }

    public function getMessage()
	{
		return $this->message;
	}


	public function getValid()
	{
		return $this->valid;
	}

	public function getValue()
	{
		return $this->value;
	}

}
