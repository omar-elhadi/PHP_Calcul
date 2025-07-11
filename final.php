<?php

$a = 5;
$b = 10; 
$c = 3;


$ajout = $a += $b;
$multiplie = $b *= $c;
$divise = $b /= $a;
$soustrait = $c -= $b;
$reste = $b  %= $c;

echo "Ajout: 		" . $ajout . "\n";
echo "Multiplie: 	" . $multiplie . "\n";
echo "Divise:		" . $divise . "\n";
echo "Soustrait: 	" . $soustrait . "\n";
echo "Reste: 		" . $reste . "\n";
