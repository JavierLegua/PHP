<?php
class Controlador{

    //Cargar vista
    public function vista($vista, $datos=[]){
        //Comprobamos si existe el archivo

        if (file_exists('../App/vistas/'.$vista.'.php')) {
            require_once '../App/vistas/'.$vista.'.php';
        }else{
            die('la vista no existe');
        }
    }

}