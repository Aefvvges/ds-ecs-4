<?php

class Producto{
    public $Id1;
    public $Nombre;
    public $Precio;
    public $Stock;
    public $TipoProducto;

    public function MostrarDatos(){
        echo 'Id producto: ' . $this->Id1 . '<br>';
        echo 'Nombre: '. $this->Nombre . '<br>';
        echo 'Precio: '. $this->Precio . '<br>';
        echo 'Stock: '. $this->Stock . '<br>';
        echo 'Id Tipo de Producto: ' . $this->TipoProducto->Id2 . '<br>';
        echo 'Tipo de Producto: ' . $this->TipoProducto->Descripcion . '<br>'; 
    }
}