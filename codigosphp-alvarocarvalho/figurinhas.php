<?php
function mdc($num1, $num2) {
    $resto = null;
    while ($resto !== 0) {
        $resto = $num1 % $num2;
        $num1 = $num2;
        $num2 = $resto;
    }
    return $num1;
}

function mdc2($x, $y) {
    while ($y !== 0) {
        list($x, $y) = array($y, $x % $y);
    }
    return $x;
}

$lista = array();
$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    list($x, $y) = array_map('intval', explode(' ', readline()));
    $lista[] = mdc2($x, $y);
}

foreach ($lista as $item) {
    echo $item . "\n";
}
?>
