<?php

class Nodo{
    public $dato;
    public $siguiente;
    public function __construct($dato) {
        $this->dato = $dato;
        $this->siguiente = null;
    }
}

class listasentrelazadas{
    public $comienzo;
    public function __construct(){
       $this->comienzo = null;
    }

    public function insertar($dato){
        $nuevoNodo = new Nodo($dato);
        $nuevoNodo->siguiente = $this->comienzo;
        $this->comienzo = $nuevoNodo;
    }
    
    public function imprimirHTML(){
        $actual = $this->comienzo;
        echo "<ul>";
        
        while($actual != null){
            echo "<li>" . $actual->dato . "</li>";
            $actual = $actual->siguiente;
        }
        echo "</ul>";
    }
}

// Corrección aquí: usar el nombre correcto de la clase
$lista = new listasentrelazadas();

$lista->insertar("fresas");
$lista->insertar("crema");
$lista->insertar("chispas de chocolate");
$lista->imprimirHTML();

?><?php

class Nodo{
    public $dato;
    public $siguiente;
    public function __construct($dato) {
        $this->dato = $dato;
        $this->siguiente = null;
    }
}

class listasentrelazadas{
    public $comienzo;
    public function __construct(){
       $this->comienzo = null;
    }

    public function insertar($dato){
        $nuevoNodo = new Nodo($dato);
        $nuevoNodo->siguiente = $this->comienzo;
        $this->comienzo = $nuevoNodo;
    }
    
    public function imprimirHTML(){
        $actual = $this->comienzo;
        echo "<ul>";
        
        while($actual != null){
            echo "<li>" . $actual->dato . "</li>";
            $actual = $actual->siguiente;
        }
        echo "</ul>";
    }
}

// Corrección aquí: usar el nombre correcto de la clase
$lista = new listasentrelazadas();

$lista->insertar("fresas");
$lista->insertar("crema");
$lista->insertar("chispas de chocolate");
$lista->imprimirHTML();

?>