<?php
require_once 'Cliente.php';
$c1 = new Cliente("Pablo Mayo");
$c2 = new Cliente("Rocío González");

?>

<ol>
    <li>
        <?= $c1->getNombre()?>
    </li>
</ol>