<?php

session_start();

function CleanupSession() {
    $_SESSION = [];
    session_destroy();
  
}

const SESSION_KEY = "nw_session_demo";


function addtoSession($strKey, $value) {
    if (!isset($_SESSION[SESSION_KEY])) 
    {
        $_SESSION[SESSION_KEY][$strKey] = $value;
        else
        {
            $SESSION[SESSION_KEY][$strKey] = [];
            $_SESSION[SESSION_KEY][$strKey] = $value;
        }
    }
function getFromSession($strKey) 
{
    if (isset($_SESSION[SESSION_KEY][$strKey])
        && isset($_SESSION[SESSION_KEY][$strKey])) 
    {
        return $_SESSION[SESSION_KEY][$strKey];
    }
    return null;
}

const CONTACTS_KEY = "contactos";
function addContact($nombre , $apellido, $telefono) 
{
    $contact = 
    [
        "nombre" => $nombre,
        "apellido" => $apellido,
        "telefono" => $telefono
    ];
    $contactos = getFromSession(CONTACTS_KEY);
    if ($contactos === null) 
    {
        $contactos = [];
    }else
    {
        $contactos[] = $contact;
    }
   
    addtoSession(CONTACTS_KEY, $contactos);
}

function getContacts() 
{
    $contactos = getFromSession(CONTACTS_KEY) ?? [];
    return $contactos;
}
