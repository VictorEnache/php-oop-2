<?php

require_once __DIR__  . "/Modules/Prodotto.php";
require_once __DIR__  . "/Modules/Cibo.php";
require_once __DIR__  . "/Modules/Crocchette.php";

/* $nuovo_prodotto = new Prodotto('collare', 'https://picsum.photos/200/300', 1200);

var_dump($nuovo_prodotto); */

/* $cibo = new Cibo('collare', 'https://picsum.photos/200/300', 1200, ['carne','vrdure']);

var_dump($cibo); */

$crocchette = new Crocchette('crocchette Monge', 'https://picsum.photos/200/300', 1200, ['carne','vrdure'], '3 - 6kg');
var_dump($crocchette);