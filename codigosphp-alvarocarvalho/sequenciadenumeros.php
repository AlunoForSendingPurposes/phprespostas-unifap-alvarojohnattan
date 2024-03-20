<?php
while (true) {
    $valores = array_map('intval', explode(' ', readline()));
    $m = max($valores);
    $n = min($valores);
    if ($m <= 0 || $n <= 0) {
        break;
    }
    $soma = 0;
    $mensagem = '';
    for ($i = $n; $i <= $m; $i++) {
        $soma += $i;
        $mensagem .= $i . " ";
    }
    echo $mensagem . 'Sum=' . $soma . PHP_EOL;
}
?>
