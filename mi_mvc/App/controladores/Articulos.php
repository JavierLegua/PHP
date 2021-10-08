<?php

class Articulos extends Controlador{
    public function __construct(){
    }

    public function index(){
        $datos = 'cualquier dato';
        $this->vista('articulos/inicio',$datos);
    }
  }