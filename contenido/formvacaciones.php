<?php include('../lib/constantes.php')?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="../css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>
    <body>
        
        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('../menu.php');?></div>
                    <div id="contenido">
                        <form action="../lib/recepcionvacaciones.php" method="post">
                            Rut: <input id="rut" name="rut" type="text">
                            <br>Nombre: <input id="nombre" name="nombre" type="text">
                            <br>Cargo: <input id="cargo" name="cargo" type="text">
                            <br>Fecha de inicio:<input id="fechaini" name="fechaini" type="text">
                            <br>Días totales:<input id="diastotales" name="diastotales" type="text">
                            <br>Comentario<textarea id="comentario" name="comentario" rows="7" cols=20>   </textarea>
                            <input type="submit" value="Enviar"  >                     
                        </form>
                    </div>
        </div>
        <?php
         if (isset($_SESSION["hm"])) echo $_SESSION["hm"];
         ?>
    </body>
    <script>
        $("#subvacaciones").show();
        $("#subvacaciones").css("display","block");
        $("#subvacaciones").addClass("active");
    </script>
</html>
