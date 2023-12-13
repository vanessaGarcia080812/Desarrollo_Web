<!DOCTYPE html>
<html>
<head>
    <title>actividad 3.1</title>
    <link rel="stylesheet" href="estilo/css.css"> 

    <script src="archico/archivo.js" defer></script>

</head>
<body>
   <div class="loggin-box">
        <h1>Registrate aqui con tus datos</h1>
        <hr>
        <form id="myform" class="form-register" role="form" action="validacion_contraseña.php" method="POST"
            autocomplete="off">
            <div id="signupalert" style="display:none" class="alert alert-danger">
                <p>Error:</p>
                <span></span>
            </div>
            <div class="cont1">
                <div class="cont2">
                    <div class="divicion1">
                        <div class="form-row">
                            <label for="FirstName">Nombre </label>
                            <input type="text" name="nombre" placeholder="Nombres" required>
                        </div>
                        <div class="form-row">
                            <label for="Apellido">Apellido </label>
                            <input type="text" name="apellido" placeholder="Apellidos..."required>
                        </div>
                        
                        <!-- TIPO DOCUMENTO -->
                        <div class="form-row" name="tipodocumento">
                            <label id="tpDoc" for="tpDocumento">Tipo de documento</label>
                            <select class="form-row" name="tpDocumento"
                                value="<?php if(isset($tpDocumento)) echo  $tpDocumento; ?>">
                                <option>Tarjeta de Identidad</option>
                                <option>Cédula de Ciudadanía</option>
                                <option>Cédula de Extranjería</option>
                                <option>Pasaporte</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <label for="cedula">N. Cédula: </label>
                            <input type="text" name="cedula" placeholder="Número de cédula" required>
                        </div>
                        <div class="form-row">
                            <label for="email">Correo </label>
                            <input type="email" name="email" placeholder="Correo Electronico" required>
                        </div>
                        <div class="form-row">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" placeholder="Contraseña" id="myPassword" required>
                        </div>

                    </div>
                    <div>
                        <div class="form-row">
                            <input class="button" type="submit" name="registrar" value="Registrar">
                        </div>
                    </div>
                
                </div>
            </div>

        </form>

</div>


<?php

function validar_clave($clave,&$error_clave){

    if(strlen($clave) < 6){
        $error_clave = "La contraseña debe tener al menos 6 caracteres";
        return false;   
    }
    if(strlen($clave) < 16){
        $error_clave = "La contraseña debe tener mas de 16 caracteres";
        return false;
    }
    if (!preg_match('`[a-z]`',$clave)){
        $error_clave = "La contraseña al menos debe tener una letra minúscula";
        return false;
    }
    if (!preg_match('`[A-Z]`',$clave)){
        $error_clave = "La contraseña al menos debe tener una letra mayúscula";
        return false;
    }
    if (!preg_match('`[0-9]`',$clave)){
        $error_clave = "La contraseña debe tener al menos un caracter numerico";
        return false;
    }

    $error_clave= "";
    return true;


}
?>


<?php
if(isset($_POST["registrar"])){
    $error_encontrado="";
    if(validar_clave($_POST["password"], $error_encontrado)){
        echo "CONTRASEÑA SEGURA";   
    }else{
        echo "SU CONTRASEÑA ES MALA POR: " . $error_encontrado;
    }
}
?>

    <script>
        $(document).ready(function ($) {
            $('#myPassword', '').strength({
                strengthClass: 'strength',
                strengthMeterClass: 'strength_meter',
                strengthButtonClass: 'button_strength',
                strengthButtonText: 'Mostrar Contraseña',
                strengthButtonTextToggle: 'Ocultar Contraseña'

            });
        });
    </script>
