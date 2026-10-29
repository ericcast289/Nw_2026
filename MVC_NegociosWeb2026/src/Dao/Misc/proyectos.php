<?php

namespace Dao\Misc;

use Dao\Table;

//OWASP
//
//string sqlstm = "update usuario where user = '" + userEmail 
const PROYECTOS_INSERT = "INSERT INTO proyectos (name, status, owner, client, create_time) values (:name, :status, :owner, :client, now())";

class Proyectos extends Table{
    private function __construct() {
        throw new \Exception ('Not Implemented');
    }
    public static function crear(
        string $name,
        string $status,
        string $owner,
        string $client 
        ) : int {


            return self::executeNonQuery(
                PROYECTOS_INSERT,[
                    "name" => $name,
                    "status" => $status,
                    "owner" => $owner,
                    "client" => $client

                ]
            );
        }


}