<?php
$tabela = array(6,2,5,5,4,5,6,3,7,6);
$n = intval(readline());
for ($l = 0; $l < $n; $l++) {
    $total = 0;
    $valor = readline();
    for ($i = 0; $i < strlen($valor); $i++) {
        $total += $tabela[intval($valor[$i])];
    }
    echo $total . " leds\n";
}
?>
