<?php include('lib/constantes.php')?>
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
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        
        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('menu.php');?></div>
            <div id="contenido"></div>
        </div>
        
        <pre>
            <?php
            var_dump(session_id());
            $_SESSION["hm"]="Hola Mundo";
            ?>

        </pre>
    </body>
    
    <script>
        $("#menusolucitudes").click(function(){
            
            if ($("#subvacaciones").css("display")!="none"){
                $("#subvacaciones").css("display","none");
            }
            else{
                $("#subvacaciones").show();
                $("#subvacaciones").css("display","block");
            }
         });
    </script>
    
    
</html>
