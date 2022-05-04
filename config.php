<?php

$mysql = new mysqli(
    'localhost',
    'lael',
    'laelleal',
    'blog'
);
$mysql -> set_charset('utf8');

if($mysql == TRUE){
    echo "banco conectado";
} else {
    echo "erro na conexão";
}