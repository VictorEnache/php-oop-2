


<?php 

    require_once __DIR__ . "/Traits/Discount.php";

    require_once __DIR__ . "/Classi/Articolo.php";

    require_once __DIR__ . "/Sottoclassi/Gioco.php";


    $palla = new Gioco('palla', 'una bella palla', 'è rotonda', 120, 4, 'url', 'gomma', 'rimbalza');

    try{
         var_dump($palla->returnDiscount(60));
    } catch (Exception $e) {
        var_dump("Eccezzione: " . $e->getMessage());
    }
   
?>