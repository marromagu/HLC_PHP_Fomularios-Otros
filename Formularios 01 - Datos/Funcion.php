<?php
function obtenerValorCampo(string $campo):string{
    if (!isset($_REQUEST[$campo])){
        $valor = "";
    }
    else{
        $valor = trim(strip_tags($_REQUEST[$campo]));
    }
    return $valor;
}
?>