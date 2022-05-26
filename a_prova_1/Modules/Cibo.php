<?php

class Cibo extends Prodotto{
    protected $ingredienti;

    function __construct(String $name,String $image,int $price, Array $ingredienti, int $ean){
        parent::__construct( $name, $image, $price, $ean);
        $this->ingredienti = $ingredienti;

    }
    
}