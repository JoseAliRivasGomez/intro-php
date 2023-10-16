<?php
include 'includes/header.php';

// Atributos de una clase
class Empleado { 
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

}

$empleado = new Empleado;

$empleado->nombre = "Juan";
$empleado->apellido = "De la torre";

echo "<pre>";
var_dump($empleado);
echo "</pre>";


$empleado2 = new Empleado;

$empleado2->nombre = "Karen";
$empleado2->apellido = "Perez";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";