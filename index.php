<?php

require_once 'modelo/producto.php';
require_once 'modelo/tipoproducto.php';

$TipoProducto = new TipoProducto();
$TipoProducto->Descripcion= 'Galletitas';
$TipoProducto->Id2= 2;


$Producto = new Producto();

$Producto->Id1= 1;
$Producto->Nombre= 'Merenguitas';
$Producto->Precio= 1000;
$Producto->Stock= 10;
$Producto->TipoProducto = $TipoProducto;

$Producto->MostrarDatos();