<?php

require 'Libro.php';

class Comic extends Libro
{
    // Propiedades

    // Métodos
    public function __construct(
        $titulo,
        $autor,
        private array $ilustradores,
        $precio,
        $stock,
        private $volumen,
        $id
    )
    {
        // Herencia
        parent::__construct($titulo, $autor, $precio, $stock, $id);
    }

    // Polimorfismo con sobreescritura
    public function verdatos()
    {
        echo parent::verdatos();

        $lista = "<ul> Ilustradores: ";
        foreach( $this->ilustradores as $ilustrador )
        {
            $lista .= "<li> $ilustrador </li>";
        }
        $lista .= "</ul> <br>";

        $res = "Volumen: $this->volumen";
        
        echo $lista .= $res;
    }

}

$comic1 = new Comic
(
    'Dark Phoenix Saga',
    'Chris Claremont',
    ['John Byrne', 'Terry Austin'],
    349.99,
    40,
    2,
    1
);

echo $comic1->verdatos() . "<br>";

//echo $lib1->verdatos();