<?php

$mysql = new mysqli(
    'localhost',
    'lael',
    'laelleal',
    'blog'
);
$mysql -> set_charset('utf8');

if($mysql == FALSE){
    echo "erro na conexão";
}