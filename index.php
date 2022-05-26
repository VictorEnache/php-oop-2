<?php

require_once __DIR__  . "/Modules/Prodotto.php";
require_once __DIR__  . "/Modules/Cibo.php";

/* $nuovo_prodotto = new Prodotto('collare', 'https://picsum.photos/200/300', 1200);

var_dump($nuovo_prodotto); */

$cibo = new Cibo('collare', 'https://picsum.photos/200/300', 1200, ['carne','vrdure']);

var_dump($cibo);