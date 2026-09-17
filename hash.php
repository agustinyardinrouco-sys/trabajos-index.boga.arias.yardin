<?php

$clave="cirobboga21";

echo hash("md5",$clave)."<br>";


foreach(hash_algos()as $algoritmos){
echo $algoritmos. "<br>";
}