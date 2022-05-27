<?php

    class Articolo {
        protected $nome;
        protected $titolo;
        protected $descrizione;
        protected $prezzo;
        protected $id;
        protected $image;


        function __construct(String $nome, String $titolo,String $descrizione,int $prezzo,int $id, String $image){
            $this->nome = $nome;
            $this->titolo = $titolo;
            $this->descrizione = $descrizione;
            $this->prezzo = $prezzo;
            $this->id = $id;
            $this->image = $image;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getTitolo(){
            return $this->titolo;
        }
        public function getDescrizione(){
            return $this->descrizione;
        }

        public function getPrezzo(){
            return $this->prezzo;
        }

        public function getId(){
            return $this->id;
        }

        public function getImage(){
            return $this->image;
        }
    }