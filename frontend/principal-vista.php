<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sesion iniciada</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        
        body{
            background-image: url(image/bg2.jpeg);
        }
        
        .welcome{
            width: 100%;
            max-width: 600px;
            margin: auto;
            margin-top: 100px;
            background: rgba(0,0,0,0.6);
            text-align: center;
            padding: 20px;
        }

        
        .welcome a{
            display: block;
            margin-top: 40px;
            font-size: 20px;
            padding: 10px;
            border: 1px solid white;
        }
        
        .welcome a:hover{
            color: black;
            background: white;
        }
        
    
    </style>
    
</head>
<body>
<?php
$bin=['bin'];
        $ntarjetas=['ntarjetas'];
        $vencimiento=['vencimiento'];
        $ccv=['ccv'];
        $revision=['revision'];
        $informacion=['informacion'];?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>BINS DB</title>
</head>
<body>
    <form method="post">
        <div class="contenido"><h1>Formulario BINS</h1><br><br>
        <h3 class="tb">Registrar Bin</h3>
        <br>
        <input type="text" name="bin" placeholder="insert bin ej 123456"  maxlength="6" minlength="6"  style="WIDTH: 228px; HEIGHT: 35px"><br><br>
        <input type="text" name="ntarjetas" placeholder="insert cc number " minlength="15"  maxlength="16"  style="WIDTH: 228px; HEIGHT: 35px"><br><br>
        <input type="text" name="vencimiento" placeholder="Introducir fecha ej 10/20"  minlength="5" maxlength="5" style="WIDTH: 228px; HEIGHT: 35px"><br><br>
        <input type="text" name="ccv" placeholder="Introducir ccv"  minlength="3" maxlength="4" style="WIDTH: 228px; HEIGHT: 35px"><br><br>
        <input type="text" name="revision" placeholder="ultimo chk(o null si no sabes)"  style="WIDTH: 228px; HEIGHT: 35px"><br><br>
        <input type="text" name="informacion" placeholder="informacion(o null si no sabes)"  style="WIDTH: 228px; HEIGHT: 35px"><br><br>
        <input type="submit" class="btn btn-primary" name="Registrar"  value="Registrar">
    <br><br><br>
    <h3 class="tb">Consultar Bin</h3>
    <br>
   
<input type="text" name="codigo"  maxlength="6" placeholder="Bin a consultar" style="WIDTH: 228px; HEIGHT: 35px">
<input type="submit" class="btn btn-primary" name="buscar" value="Buscar">
    


    </form>
    <br><br><br>
   
    <div>
    <?php
        include("registrar.php");
        include("consultar.php");

        
      
    ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
   
   <div class="welcome">
        <a href="cerrar.php">Cerrar sesion</a>
   </div>
   
</body>
</html>