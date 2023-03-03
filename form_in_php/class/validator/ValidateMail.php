<?php

class ValidateMail implements Validable
{
	private $value;
	private $message;
	private $valid;

	public function __construct($default_value = '', $message = 'è obbligatorio')
	{

		$this->value = $default_value;
		$this->valid = true;
		$this->message = $message;
	}



	public function isValid(mixed $email)
	{ 	 

			$valueWithoutSpace = trim($email);
			if (preg_match('/^[a-zA-Z0-9\.\-_]+@[a-zA-Z0-9\.\-_]+\.[a-zA-Z0-9]{2,}$/', $valueWithoutSpace)) {
				echo " email  valida";
				$this->valid = true;
			} else {
				echo " email non valida";
				$this->valid = false;
				return false;
			}
		 
		// if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		// 	echo " è passato l'if ";
		// 	$this->valid = false;
		// 	return false;
		// }
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
