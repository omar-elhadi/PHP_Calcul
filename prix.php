<?php

const TVA = 0.2;

$prixHT = 300;

$prixTTC = $prixHT * TVA;

echo $prixTTC . "€";
