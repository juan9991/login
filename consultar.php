
<?php
$conex = mysqli_connect("localhost","root","","bin");
if(isset($_POST['buscar'])){
$codigo = $_POST['codigo'];
$consulta="SELECT * FROM tarjetas where bin = '$codigo'";
$ejecutar_consulta=mysqli_query($conex, $consulta);

while ($resultado=mysqli_fetch_array($ejecutar_consulta) ){
    
    ?>

   
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <table class="table table table-dark table-bordered">
      <tr> <th>tarjeta</th>
      <th>vencimiento</th>
      <th>ccv</th>
      <th>revision</th>
      <th>informacion </th>
  
       </tr>
       <tbody>
        <tr> 
       <td><?php echo $resultado ['n_tarjetas']; ?> </td> 
       <td><?php echo $resultado ['f_vencimiento']; ?></td> 
       <td><?php echo $resultado ['ccv']; ?></td> 
       <td><?php echo $resultado ['revision']; ?></td> 
       <td><?php echo $resultado ['informacion']; ?></td> 
      
       </tr> 
         </tbody>
       
  
       <?php 
}}?> 
    