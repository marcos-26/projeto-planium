<?php

echo '<pre>';


$dadosJson = file_get_contents('beneficiarios.json');
$dadosJsonDecodificados = Json_decode($dadosJson);

foreach($dadosJsonDecodificados->clientes as $cliente){
    echo $cliente->id . ' - ' . $cliente->nome .PHP_EOL;
    
}
