<?php

class Utente {
    protected $nome;
    protected $cognome;
    protected $anno_di_nascita;
    protected $sesso;
    protected $indirizzo;
    protected $email;
    
    

    function __construct(String $nome,String $cognome,String $anno_di_nascita,String $sesso,String $indirizzo, String $email){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->anno_di_nascita = $anno_di_nascita;
        $this->sesso = $sesso;
        $this->indirizzo = $indirizzo;
        $this->account_creato = $account_creato;
        $this->email = $email;
        
        
    }

    public function haUnAccount($array){
        foreach($array as $key => $user){
            if(in_array($this->email,$user)){
            return true;
            } 
        }

    }

}