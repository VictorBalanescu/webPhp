<?php

/**
 * classe usata per la registrazione di un utente
 * @author victor
 */
class registrazioneController
{
    public function registraUtente(){
        if(!empty($_POST['nome'])&&!empty($_POST['cognome'])&&!empty($_POST['email']&&!empty($_POST['password'])&&!empty($_POST['Cpassword']))){
            $utente=$this->creaUtente($_POST['nome'],$_POST['cognome'],$_POST['email']);
            if($this->utenteValid()){
                if($this->inserisciUtente($utente)){
                    $credenziali=$this->creaCredenziali($utente->getEmail(),$_POST['password'],1);
                    if($this->credenzialiValid()) {
                        if($this->inserisciCredenziali($credenziali)){
                            $_SESSION["val"] = true;
                            $_SESSION["nome"] = $utente->getNome();
                            $_SESSION["cognome"] = $utente->getCognome();
                            header('location:index.php?action=homePage');
                        }
                    }
                }
            }else{
                echo 'non valido';
            }
        }
    }

    private function utenteValid(){
        require_once 'validation/utenteValidation.php';
        return utenteValidation::valida();
    }

    private function creaUtente($nome,$cognome,$email){
        require_once 'model/utente.php';
        return new utente($nome,$cognome,$email);
    }

    private function credenzialiValid(){
        require_once 'validation/credenzialiValidation.php';
        return credenzialiValidation::valida();
    }

    private function creaCredenziali($email,$password,$id){
        require_once 'model/credenziali.php';
        return new credenziali($email,$password,$id);
    }
    private function inserisciUtente($utente){
        require_once 'service/utenteService.php';
        return (new utenteService())->inserisciUtente($utente);
    }
    private function inserisciCredenziali($credenziali){
        //require_once 'service/';
        return true ;
    }


}