<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos<h1>
<?php
    require_once("Funcion.php");
    print_r($_REQUEST);
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $errores = [];
        $nombre = obtenerValorCampo("nombre");
        $genero = obtenerValorCampo("genero");
   
        if($nombre == ""){
            $errores["nombre"] = "<p>No se ha seleccionado nombre</p>";
        }
        if($genero == ""){
            $errores["generos"] = "<p>No se ha seleccionado genero</p>";
        }
        if(count($errores)>0){
            foreach($errores as $error){
                echo $error;
            }
        }else{
            //si no hay errores
            echo"<p>El nombre es $nombre y el genero es $genero</p>";
        }
    }

?>
<a href="Formulario.html">Volver al formulario</a> 
</body>
</html>