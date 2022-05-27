<?php
class Gioco extends Articolo{
    use Discount;
    protected $materiale;   
    protected $azione;


    function __construct( String $nome, String $titolo, String $descrizioe, int $prezzo, int $id, String $image, String $materiale, String $azione){
        parent::__construct($nome, $titolo,$descrizioe, $prezzo, $id, $image);

        $this->$materiale = $materiale;
        $this->$azione = $azione;
    }

    public function getMateriale(){
        return $this->materiale;
    }

    public function getAzione(){
        return $this->azione;
    }
}