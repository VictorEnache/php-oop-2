<?php

class Prodotto{
    protected $name;
    protected $image;
    /* il prezzo verra espresso in centesimi per evitare errori nelle operazioni con i float */
    protected $price;

    function __construct(String $name,String $image,String $price){
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getImage(){
        return $this->image;
    }

    public function getName(){
        return $this->name;
    }
}

