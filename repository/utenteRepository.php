<?php
/**
 * questa classe viene usata per interagire con il database
 * @author victor
 */
class utenteRepository{

    function inserisciUtente(utente $utente){

        $connect= new PDO('mysql:host=localhost;dbname=prova','root','');
        $stmt =$connect->prepare("INSERT INTO utenti(`id`,`nome`,`cognome`,`email`) VALUES (:id,:nome,:cognome,:email)");
        //uso il nome della varibile della primarykey per fare l'auto increment;
        $stmt->bindParam(':id', $id);
        //parametri passati
        $nome=$utente->getNome();
        $cognome=$utente->getCognome();
        $email=$utente->getEmail();
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':cognome',$cognome);
        $stmt->bindParam(':email', $email);
        return $stmt->execute();
    }
    function trovaUtente($email){
        $connect= new PDO('mysql:host=localhost;dbname=prova','root','');
        $stmt=$connect->prepare("SELECT * FROM `utenti` WHERE email= :email");
        $stmt->bindParam(':email',$email);
        $stmt->execute();
        $utenteF=$stmt->fetch();
        $stmt->closeCursor();
        return $utenteF;
    }

}