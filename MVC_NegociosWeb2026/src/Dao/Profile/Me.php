<?php

namespace Dao\Profile;

class Me {
    private function __construct()
    {
        throw new \Exeception('Clase Estatica no se puede instanciar');
    }
     public static function getProfile(): array
     {
        return [
            "nombre" => "Eric",
            "apellido" => "Castro",
            "correo" => "ericfabriziocast2005@gmail.com",
            "telefono" => "0000-0000"
        ];
     }
}