<?php

require_once __DIR__  . "/Modules/Prodotto.php";

$nuovo_prodotto = new Prodotto('collare', 'https://picsum.photos/200/300', 1200);

var_dump($nuovo_prodotto);