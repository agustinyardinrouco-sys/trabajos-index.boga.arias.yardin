<?php

$pc=["SO","SSD","GPU","RAM","CPU"];
foreach($pc as $componente){
if ($componente=="GPU"){
    continue;
}
echo $componente."<br>";
}
