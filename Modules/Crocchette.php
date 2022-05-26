<?php

class Crocchette extends Cibo{
    protected $taglia_consigliata_animale;

    function __construct(String $name,String $image,int $price, Array $ingredienti, String $taglia_consigliata_animale, int $ean){
        parent::__construct( $name, $image, $price,  $ingredienti, $ean);

        $this->taglia_consigliata_animale = $taglia_consigliata_animale;
    }
}