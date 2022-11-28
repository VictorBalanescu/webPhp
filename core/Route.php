<?php
/**
 * questa classe restituisce la pagina che deve essere restituita
 * @author victor
 */

class Route{

    public static function getPagina($link){
        if($link=='login'){
            $pagina='template/'.$link.'.php';
        }else if($link=='registrazione'){
            $pagina='template/'.$link.'.php';
        }else if($link=='azienda'){
            $pagina='template/'.$link.'.php';
        }else if($link=='info'){
            $pagina='template/'.$link.'.php';
        }else if($link=='contatti'){
            $pagina='template/'.$link.'.php';
        }else if($link=='homePage'){
            $pagina='template/'.$link.'.php';
        }else if($link=='logout'){
            $pagina='template/'.$link.'.php';
        }else {
            $pagina='template/home.php';
        }
        return $pagina;
    }
}
