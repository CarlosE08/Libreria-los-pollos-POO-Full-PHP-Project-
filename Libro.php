<?php

class Libro {
    // Propiedades

    // Métodos
    public function __construct(
        private string $titulo,
        private string $autor,
        private float $precio,
        private int $stock,
        private int $id
    )
    {}

    public function verdatos()
    {
        $datos = "<b> {$this->titulo} </b> <br> <i> Autor: {$this->autor} </i> <br>
                    precio: {$this->precio} <br> ID: {$this->id} <br>";
        
        if ( $this->stock > 0 )
        {
            $datos .= "Candidad disponible: <span style='color:green' > {$this->stock} \n</span> <br>";
        }
        else {
            $datos .= "<span style='color:red' > Agotado </span>";
        }

        return $datos;
    }
}

// Instancias clase Libro:
$lib1 = new Libro(
    'IT',
    'Stephen King',
    289.99,
    11,
    1
);

echo $lib1->verdatos() . "<br>";

// var_dump( $lib1 );

// echo $lib1->titulo;
