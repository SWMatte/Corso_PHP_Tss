<?php

/*
class ValidateRequired
{

    public function isValid($data)
    {
        /*empty da 0 (true) se è vuota, 1 (false) se non è vuota  
        foreach ($data as $i => $elementi) {
            if (empty($elementi)) {
                echo "Test NON superato per :[$i] perchè vuoto <br> ";
            } else {
                echo " Test superato per :[$i] perche' pieno <br> ";
            }
        }
    }
}
*/

class ValidateRequired
{
  public function isValid( $value)
  {
    $allowed_tags='';
    $ValueWithoutpace=trim(strip_tags($value, $allowed_tags));
   
    if($ValueWithoutpace==''){
        return false;
    }
   
    return $ValueWithoutpace;
  }  


}