<?php

/**
 * questa e una semplice classe
 */
class credenziali{
    private  $email;
    private  $password;
    private  $utente_id;

    function __construct($email,$password,$utente){
        $this->email = $email;
        $this->password = $password;
        $this->utente_id = $utente;
    }


}