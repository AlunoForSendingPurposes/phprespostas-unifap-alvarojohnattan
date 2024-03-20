<?php
$x = intval(readline());
$y = intval(readline());
if ($x > $y) {
    list($x, $y) = array($y, $x);
}
for ($i = $x + 1; $i < $y; $i++) {
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo $i . "\n";
    }
}
?>
