<?php
    trait Discount{
        function returnDiscount($sconto){
            if(!is_int($sconto) ){
                throw new Exception ('devi inserire un "numero" non una stringa');
            } elseif ($sconto > 100 || $sconto<0) {
                throw new Exception ('devi inserire un "numero" compreso tra 0 e 100');
            }
            return $this->prezzo * $sconto/100;
        }
    }