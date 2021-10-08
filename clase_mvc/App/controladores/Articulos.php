<?php

class Articulos extends Controlador{
    public function __construct(){
    }
    public function index(){
        
        $datos = 'cualquier dato';
        $this->vista('articulos/inicio',$datos);

    }
    public function actualizar($id=-1){
        if($id == -1){
            echo"Articulo desconocido";
        }
      print_r($id);
      
    }
}