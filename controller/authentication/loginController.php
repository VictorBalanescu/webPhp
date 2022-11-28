<?php

/**
 * questa classe controlla le credenziali della persona che cerca di fare il login
 * se i dati sono giusti viene reindirizzato alla homePage,
 * ovviamente deve essere completata con i dovuti controlli
 * @author victor
 */
class loginController{
    public function login(){
        if(!empty($_POST['email'])&& !empty($_POST['password'])){
            $utente=$this->findUser($_POST['email']);
            if($utente!=null){
                $_SESSION["val"] = true;
                $_SESSION["nome"] = $utente['nome'];
                $_SESSION["cognome"] = $utente['cognome'];
                header('location:index.php?action=homePage');
            }
        }
    }
    private function findUser($email){
        require_once 'service/utenteService.php';
        return (new utenteService())->trovaUtente($email);
    }


}