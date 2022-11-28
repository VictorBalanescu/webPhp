<?php

/**
 * in questa classe gestisco la sessione
 * non uso il  token ma una semplice gestione con delle variabili
 * @author victor
 */
class session{
    protected $cookie;
    // settiamo tutti i parametri dei cookie scrivendoli in maniera sicura
     function setS(){
        $this->cookie=[
            'lifetime'=>0,
            'path'=>'/',
            'domain'=>'',
            'secure'=>'true',
            'httponly'=>'true',
            'samesite'=>'Lax',
        ];
        $this->initSession();
    }
    //settiamo i parametri della sessione
    private function initSession(){
        ini_set('session.use_cookies','1');
        ini_set('session.use_only_cookies','1');
        ini_set('session.use_trans_id','0');
        ini_set('session.use_strict_mode','1');
        session_set_cookie_params($this->cookie);
        $this->startSession();
    }
    //starto la sessione
    private function startSession(){
        if(session_status()!==PHP_SESSION_ACTIVE){
            session_start();
        }
    }
    public function rigeneraSession(){
        return session_regenerate_id(true);
    }
    public function destroySession(){
        if(session_status()===PHP_SESSION_ACTIVE){
            session_destroy();
            header('location:index.php?action=home');
        }
    }
}