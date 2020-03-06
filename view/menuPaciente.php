<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset= utf-8"/>
        <title>PACIENTES</title> 

    </head>
    <body>

    <h1>Nuevo Paciente</h1>
        <br>
        <form name="form1" method="post" action="index.php?accion=guardar">
            <p>Nombre: <input type="text" name="txtnombre" ></p>
            <p>Apellido: <input type="text" name="txtapellido" ></p>
            <p>Tipo Documento: <select name="seltipodocumento">
                    <option value="<?php echo $dato['tipodocumento']; ?>">Seleccion...</option>
                    <?php foreach($consultatipodocumento as $dato): ?>
                    <option value="<?php echo $dato['tipodocumento']; ?>"><?php echo $dato['nombre']; ?></option>
                    <?php endforeach; ?>
                </select></p>
            <p>Numero Documento: <input type="text" name="txtnumerodocumento" ></p>
            <p>Genero: <select name="selgenero">
                    <option value="<?php echo $dato['idgenero']; ?>">Seleccion...</option>
                    <?php foreach($consultagenero as $dato): ?>
                    <option value="<?php echo $dato['idgenero']; ?>"><?php echo $dato['nombre']; ?></option>
                    <?php endforeach; ?>
                </select></p>
            <p>Edad: <input type="text" name="txtedad" ></p>
            <p><input type="submit" name="btnguardar" value="guardar"></p>
        </form>

        <br>

        <a href="./?accion=menuConsultaPaciente">Consultar Pacientes</a>
        <br>
        <a href="./?accion=menuvolver">volver</a>

        


    </body>


</html>