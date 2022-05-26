<?php 
require __DIR__ . "/../Array/navbar_links.php";
?>

<header>
    <div class="container">
        <ul class="row" >
            <?php foreach($navbar_links as $link) : ?>
                <li><a href="#"><?= $link ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
</header>