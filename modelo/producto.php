<?php

class Producto{
    public $Id;
    public $Nombre;
    public $Precio;
    public $Stock;
    public $TipoProducto;

    public function MostrarDatos(){
        echo 'Id producto: ' . $this->Id . '<br>';
        echo 'Nombre: '. $this->Nombre . '<br>';
        echo 'Precio: '. $this->Precio . '<br>';
        echo 'Stock: '. $this->Stock . '<br>';
        echo 'Id Tipo de Producto: ' . $this->TipoProducto->Id . '<br>';
        echo 'Tipo de Producto: ' . $this->TipoProducto->Descripcion . '<br>'; 
    }
}