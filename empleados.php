<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulario de Empleados</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</head>
<body>

<h1 align="center"><span style= "color: white">Formulario de Empleados</span></h1>
<h5 align="center"><span style= "color: white">Arreglos Asociativos</span></h5>
    <br>
    <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
    <div class="prueba">
    <table align="left" border="2">
        <tr>
            <th>Empleado 1</th>
        </tr>
        <tr>
            <td align="center">Nombre:</td>
            <td><input  type="text" name="e0[nombre]"></td>
        </tr>
        <tr>
            <td align="center">Apellido:</td>
            <td><input  type="text" name="e0[apellido]"></td>
        </tr>
        <tr>
            <td align="center">Cédula:</td>
            <td><input  type="number" name="e0[ci]" step="any"></td>
        </tr>
        <tr>
            <td align="center">Sueldo:</td>
            <td><input  type="number" name="e0[sueldo]" step="any"></td>
        </tr>
        <tr>
            <td align="center">Departamento:</td>
            <td><input type="text" name="e0[dep]"></td>
        </tr>
        <tr>
            <td align="center">Lugar de Trabajo:</td>
            <td><input type="text" name="e0[lugar]"></td>
        </tr>

    </table>
    <table align="left" border="2">

        <tr>
            <th>Empleado 2</th>
        </tr>

        <tr>
            <td align="center">Nombre:</td>
            <td><input type="text" name="e1[nombre]"></td>
        </tr>
        <tr>
            <td align="center">Apellido:</td>
            <td><input type="text" name="e1[apellido]"></td>
        </tr>
        <tr>
            <td align="center">Cédula:</td>
            <td><input type="number" name="e1[ci]" step="any"></td>
        </tr>
        <tr>
            <td align="center">Sueldo:</td>
            <td><input type="number" name="e1[sueldo]" step="any"></td>
        </tr>
        <tr>
            <td align="center">Departamento:</td>
            <td><input type="text" name="e1[dep]"></td>
        </tr>
        <tr>
            <td align="center">Lugar de Trabajo:</td>
            <td><input type="text" name="e1[lugar]"></td>
        </tr>

        </table>
        <table align="left" border="2">
        <tr>
            <th>Empleado 3</th>
        </tr>

        <tr>
            <td align="center">Nombre:</td>
            <td><input type="text" name="e2[nombre]"></td>
        </tr>
        <tr>
            <td align="center">Apellido:</td>
            <td><input type="text" name="e2[apellido]"></td>
        </tr>
        <tr>
            <td align="center">Cédula:</td>
            <td><input type="number" name="e2[ci]" step="any"></td>
        </tr>
        <tr>
            <td align="center">Sueldo:</td>
            <td><input type="number" name="e2[sueldo]" step="any"></td>
        </tr>
        <tr>
            <td align="center">Departamento:</td>
            <td><input type="text" name="e2[dep]"></td>
        </tr>
        <tr>
            <td align="center">Lugar de Trabajo:</td>
            <td><input type="text" name="e2[lugar]"></td>
        </tr>
        </table>
        </div>
        <table align="center" border="1">
        <tr>
            <td><input type="submit" id="siguiente" name="btn" value="Siguiente" /></td>
            <td><input type="submit" name="btn" value="Limpiar"></td>
        </tr>
        </table>
        
    </form>
        <script src="prueba.js"></script>
    <?php
        
    // Realice un programa en PHP que permita la entrada de nombre,
    // apellido y cedula de 3 empleados al igual que sus respectivos
    // sueldos, departamento y lugar de trabajo. Utilice arrays asociativos.

    if(isset($_POST['btn']) && $_POST['btn'] == 'Siguiente'){

    $emp0 = $_POST['e0'];
    $emp1 = $_POST['e1'];
    $emp2 = $_POST['e2'];
    $personas = array($emp0, $emp1, $emp2);

    if($emp0['sueldo']>0 && $emp1['sueldo']>0 && $emp2['sueldo']>0 && $emp0['ci']>0 && $emp1['ci']>0 && $emp2['ci']>0){
    echo "<br>";
    echo "<table align='center' border='2'>";
    echo "<tr> <td><th>Nombre</th> <th>Apellido</th> <th>Cédula</th> <th>Sueldo</th> <th>Departamento</th> <th>Lugar de Trabajo</th></td> </tr>";

    for($i = 1; $i <= 3; $i++){
    foreach($personas as $fila){
        echo "<tr> <th>Empleado ".$i++."</th>";
        foreach($fila as $columna => $value){
            echo "<td align='center'>".$value."</td>";
        }
        echo "</tr>";
      }
      
    }
      echo "</table>";


     } else echo "<h1 align = 'center'> Los sueldos y la cédula de identidad de los empleados deben ser positivos </h1>";

    }//IF SET

        ?>
    
</body>
</html>