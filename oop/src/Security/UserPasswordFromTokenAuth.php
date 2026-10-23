<?php 

namespace Unicah\Oop\Security;

use Exception;

class UserPasswordFromTokenAuth extends UserPasswordAuth
{
    public function getUserAndPasswordFromToken(string $token) 
    {
        $arrTokenParts = explode("|", $token);
        if (count($arrTokenParts) != 2)
        {
            throw new Exception("El token no tiene el formato correcto user|password");
        }
    $this->setUser($arrTokenParts[0]);
    $this->setPassword($arrTokenParts[1]);
 }

}