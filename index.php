<?php

require_once 'modelo/producto.php';
require_once 'modelo/tipoproducto.php';

$TipoProducto = new TipoProducto();
$TipoProducto->Descripcion= 'Galletitas';
$TipoProducto->Id= 2;


$Producto = new Producto();

$Producto->Id= 1;
$Producto->Nombre= 'Merenguitas';
$Producto->Precio= 1000;
$Producto->Stock= 10;
$Producto->TipoProducto = $TipoProducto;

$Producto->MostrarDatos();