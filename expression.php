<?php

$x = true;
$y = false;

echo "x AND y donne " . ($x && $y ? 'true' : 'false') . "\n";

echo "x OR y donne " . (($x or $y) ? 'true' : 'false') . "\n";

echo "x XOR y donne " . (($x xor $y) ? 'true' : 'false') . "\n";
