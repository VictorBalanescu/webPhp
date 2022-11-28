<?php
/**
* questa e una semplice classe
*/
class utente{
    private  $id;
    private  $nome;
    private  $cognome;
    private  $email;
    function __construct($nome,$cognome,$email){
        $this->id=0;
        $this->nome=$nome;
        $this->cognome=$cognome;
        $this->email=$email;
    }
    function getId(){
        return $this->id;
    }
    function getNome(){
        return $this->nome;
    }
    function  getCognome(){
        return $this->cognome;
    }
    function getEmail(){
        return  $this->email;
    }


}