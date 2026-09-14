<?php

function saludo($nombre){
    return " hola, mi nombre es: $nombre"."<br>";
}
echo saludo("sebastian gomez");

$usuario="yardo";
echo saludo($usuario);

echo saludo($nombre="santino");