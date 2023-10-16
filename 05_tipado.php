<?php
include 'includes/header.php';


// Tipado

class Empleado { 
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
}


$juan = new Empleado('Juan', 'De la torre', 'TI', 'juan@empresa.com', 006);
$karen = new Empleado('Karen', 'Perez', 'MKT', 'karen@empresa.com', "007");

echo "<pre>";
var_dump($juan);
echo "</pre><br>";

echo "<pre>";
var_dump($karen);
echo "</pre><br>";