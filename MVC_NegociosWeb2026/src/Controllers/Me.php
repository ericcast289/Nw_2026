<?php 

namespace Controllers;

use Views\Renderer;

class Me extends PublicController
{
      public function run() :void {
        $tmpViewData = [
            "nombre" => "Eric",
            "apellido" => "Castro",
            "correo" => "ericfabriziocast2005@gmail.com",
            "telefono" => "0000-0000"
        ];

        Renderer::render("me", $tmpViewData);
      }
}