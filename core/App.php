<?php
/**
 * la main class
 * @author victor
*/
class App{

    public function run(){
        $this->session();
        $this->getPagina();

    }
    //una funzione che ci restituisce una pagina
    private function getPagina(){
        require_once 'core/Route.php';
        if(isset($_GET['action'])){
            include Route::getPagina($_GET['action']);
        }else {
            include 'template/home.php';
        }
    }
    //funzione che inizia la sessione
    private function session(){
        require_once 'controller/session/session.php';
        (new session())->setS();
    }
}