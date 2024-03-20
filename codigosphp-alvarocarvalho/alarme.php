<?php
while (true) {
    // Entrada
    $input = explode(" ", readline());
    $H1 = (int)$input[0];
    $M1 = (int)$input[1];
    $H2 = (int)$input[2];
    $M2 = (int)$input[3];

    // Todos iguais sem intervalo para dormir
    if ($H1 == 0 && $M1 == 0 && $H2 == 0 && $M2 == 0) {
        break;
    } else {
        $x = $H1 * 60 + $M1;
        $y = $H2 * 60 + $M2;

        if ($y <= $x) {
            $y += 24 * 60;
        }

        // Saída
        echo abs($y - $x) . "\n";
    }
}
?>
