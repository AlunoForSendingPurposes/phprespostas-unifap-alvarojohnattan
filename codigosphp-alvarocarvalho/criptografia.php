<?php
$qte = intval(readline());
for ($i = 0; $i < $qte; $i++) {
    $texto = readline();
    $texto_new = '';
    for ($j = 0; $j < strlen($texto); $j++) {
        $l = $texto[$j];
        if (preg_match("/[a-zA-Z]/", $l)) {
            $texto_new .= chr(ord($l) + 3);
        } else {
            $texto_new .= $l;
        }
    }
    $texto_new = strrev($texto_new);
    $meio = intval(strlen($texto_new) / 2);
    $metade1 = substr($texto_new, 0, $meio);
    $metade2 = substr($texto_new, $meio);
    $metade_new = '';
    for ($k = 0; $k < strlen($metade2); $k++) {
        $l = $metade2[$k];
        $metade_new .= chr(ord($l) - 1);
    }
    $texto_final = $metade1 . $metade_new;
    echo $texto_final . "\n";
}
?>
