<?php
while (true) {
    try {
        $n = intval(fgets(STDIN));
        $x = explode(" ", fgets(STDIN));
        $m = 0;
        for ($i = 0; $i < $n; $i++) {
            if (intval($x[$i]) > $m) {
                $m = intval($x[$i]);
            }
        }
        if ($m < 10) {
            $N = 1;
        } elseif ($m >= 10 && $m < 20) {
            $N = 2;
        } else {
            $N = 3;
        }
        echo $N . "\n";
    } catch (Exception $e) {
        break;
    }
}
?>
