<?php
class ProductoController{
    //private $servicio;

    public function __construct(){
        //Aquí creamos la construcción al objeto del Servicio
    }

    public function listarProducto(){
        //Usar el atributo servicio y traerse los datos de BBDD para mostrarlo en l
    }

    public function ejecuta(){
        $producto = this->listarProducto();

        //Cargar la vista y guardar los productos
        require_once("Vista/Main.php");
    }
}