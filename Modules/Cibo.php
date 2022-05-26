<?php

class Cibo extends Prodotto{
    protected $ingredienti;

    function __construct(String $name,String $image,String $price, Array $ingredienti){
        parent::__construct( $name, $image, $price);
        $this->ingredienti = $ingredienti;

    }
    
}