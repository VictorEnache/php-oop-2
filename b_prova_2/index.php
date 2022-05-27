<!-- 
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.

    L'e-commerce vende prodotti per gli animali.

    I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

    L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.

    Il pagamento avviene con la carta di credito, che non deve essere scaduta.

    BONUS: Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). 
-->

<!-- 
    - Creare la classe articolo che rapresenta tutti gli articoli della pagina
    - Creare tre sotto classi (giochi, cibo, cucce)
 -->


<?php 

    trait Discount{
        function returnDiscount($sconto){
            if(!is_int($sconto) || $sconto > 100 || $sconto<0){
                throw new Exception ('devi inserire un "numero" compreso tra 0 e 100');
            }
            return $this->prezzo * $sconto/100;
        }
    }

    require_once __DIR__ . "/Classi/Articolo.php";

    require_once __DIR__ . "/Sottoclassi/Gioco.php";


    $palla = new Gioco('palla', 'una bella palla', 'è rotonda', 120, 4, 'url', 'gomma', 'rimbalza');

    var_dump($palla->returnDiscount('fg'))
?>