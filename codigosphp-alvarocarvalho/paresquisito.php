<?php

$qte = intval(readline());
$pares = [];
$impares = [];

for ($n = 0; $n < $qte; $n++) {
    $num = intval(readline());
    if ($num % 2 == 0) {
        $pares[] = $num;
    } else {
        $impares[] = $num;
    }
}

sort($pares);
rsort($impares);

foreach ($pares as $p) {
    echo $p . "\n";
}

foreach ($impares as $i) {
    echo $i . "\n";
}

?>
