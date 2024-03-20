<?php
$qte = intval(readline());
for ($i = 0; $i < $qte; $i++) {
    $texto = readline();
    $qte = intval(readline());
    $t_new = '';
    for ($j = 0; $j < strlen($texto); $j++) {
        $posicao = ord($texto[$j]) - $qte;
        if ($posicao < 65) {
            $t_new .= chr(91 - (65 - $posicao));
        } else {
            $t_new .= chr(ord($texto[$j]) - $qte);
        }
    }
    echo $t_new . "\n";
}
?>
