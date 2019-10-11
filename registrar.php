<?php


    include("con_db.php");


   if(isset($_POST['Registrar'])){
    if(strlen($_POST['bin']) >= 1 &&
    strlen($_POST['ntarjetas']) >= 1 &&
    strlen($_POST['vencimiento']) >= 1 &&
    strlen($_POST['ccv']) >= 1 &&
    strlen($_POST['revision']) >= 1 &&
    strlen($_POST['informacion']) >= 1 ){
        $bin = trim($_POST['bin']);
        $ntarjetas = trim($_POST['ntarjetas']);
        $vencimiento = trim($_POST['vencimiento']);
        $ccv = trim($_POST['ccv']);    
        $revision = trim($_POST['revision']);
        $informacion = trim($_POST['informacion']);

        $consulta = "INSERT INTO tarjetas(Bin, n_tarjetas, f_vencimiento, ccv, revision, informacion) VALUES ('$bin','$ntarjetas','$vencimiento','$ccv','$revision','$informacion')";
        var_dump($consulta);
        $resultado = mysqli_query($conex,$consulta);
        if($resultado == false) {

            // ALGO SALIO MAL
            echo "<script language='JavaScript'>
            alert('Surgio un error al intentar grabar losdatos');
            </script>";
           // en mi xamp hacia todas las operaciones perfecto, por eso  creo que tengo pedos en conectar a la db
            }else{
            
            // TODO OK
            echo "<script language='JavaScript'>
            alert('Se guardaron los datos');
            </script>";
            mysqli_close($conex);
            }
    }
   }
   
   ?>