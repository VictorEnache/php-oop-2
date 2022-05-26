<?php

class Utente {
    protected $nome;
    protected $cognome;
    protected $anno_di_nascita;
    protected $sesso;
    protected $indirizzo;
    protected $account_creato;
    protected $email;
    

    function __construct(String $nome,String $cognome,String $anno_di_nascita,String $sesso,String $indirizzo,bool $account_creato = false, String $email){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->anno_di_nascita = $anno_di_nascita;
        $this->sesso = $sesso;
        $this->indirizzo = $indirizzo;
        $this->account_creato = $account_creato;
        $this->email = $email;
        
        
    }


}