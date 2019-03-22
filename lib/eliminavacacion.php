<?php

include ("vacaciones.php");
include ("constantes.php");

$sRut=$_POST["rut_e"];


 if (isset($_SESSION["aVacaciones"])){
     $arrVacaciones=$_SESSION["aVacaciones"]; 
     foreach ($arrVacaciones as $key => $oVacacion) {
         if($oVacacion->getRut()==$sRut){
             unset($arrVacaciones[$key]);
             $_SESSION["aVacaciones"]=$arrVacaciones;
         }
     }
     
 } 
