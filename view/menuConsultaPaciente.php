<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset= utf-8"/>
        <title>Consulta pacientes</title> 

    </head>
    <body>
    
        <h1>Consulta Pacientes</h1>

        <table>
            <thead>
                <tr>
                    <th>Tipo Documento</th>
                    <th>Numero Documento</th>
                    <th>Nombre Completo</th>
                    <th>Genero</th>
                    <th>Edad</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consultapaciente as $dato): ?>
                <tr>
                    <td><?php echo $dato['nombre']; ?></td>
                    <td><?php echo $dato['numerodocumento']; ?></td>
                    <td><?php echo $dato['idtipodocumento']. " " . $dato['apellido']; ?></td>
                    <td><?php echo $dato['genero']; ?></td>
                    <td><?php echo $dato['edad']; ?></td>
                    <td><a href="index.php?accion=modificar&id=<?php echo $dato['numerodocumento']; ?>">Modificar</a></td>
                   
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


        <a href="./?accion=menuRegistroPaciente">Registro Paciente</a>
        <br>
        <a href="./?accion=menuDoctores">Menu Principal</a>


    </body>


</html>