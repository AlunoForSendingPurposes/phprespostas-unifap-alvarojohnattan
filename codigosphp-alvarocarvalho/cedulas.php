<?php
$N = readline();
$cem = intval($N/100);
$cinquenta = intval(($N-($cem*100))/50);
$vinte = intval(($N-($cem*100)-($cinquenta*50))/20);
$dez = intval(($N-($cem*100)-($cinquenta*50)-($vinte*20))/10);
$cinco = intval(($N-($cem*100)-($cinquenta*50)-($vinte*20)-($dez*10))/5);
$dois = intval(($N-($cem*100)-($cinquenta*50)-($vinte*20)-($dez*10)-($cinco*5))/2);
$um = intval(($N-($cem*100)-($cinquenta*50)-($vinte*20)-($dez*10)-($cinco*5)-($dois*2))/1);
echo $N . "\n";
echo $cem . " nota(s) de R$ 100,00\n";
echo $cinquenta . " nota(s) de R$ 50,00\n";
echo $vinte . " nota(s) de R$ 20,00\n";
echo $dez . " nota(s) de R$ 10,00\n";
echo $cinco . " nota(s) de R$ 5,00\n";
echo $dois . " nota(s) de R$ 2,00\n";
echo $um . " nota(s) de R$ 1,00\n";
?>
