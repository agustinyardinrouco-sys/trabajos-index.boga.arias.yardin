<?php

$texto="yardo ";

$variable1=$texto;
$variable2= &$texto;

echo $variable2;

$texto= "ciro boga ";

echo $variable2;
