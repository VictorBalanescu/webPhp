<?php
/**
 * la classe service viene usata per preparate i dati alla classe repository
 * @author victor
 */
class utenteService{

    public function inserisciUtente($utente){
        require_once 'repository/utenteRepository.php';
        return (new utenteRepository())->inserisciUtente($utente);
    }
    public function trovaUtente($email){
        require_once 'repository/utenteRepository.php';
        return (new utenteRepository())->trovaUtente($email);
    }
}