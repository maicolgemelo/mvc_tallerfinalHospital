<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset= utf-8"/>
        <title>modificar informacion</title> 

    </head>
    <body>
        <?php foreach($consulta as $datos): ?>
        <h1>Modificar informacion</h1>
        <br>
        <form name="form1" method="post" action="index.php?accion=guardar">
            <p>Nombre: <input type="text" name="txtnombre" ></p>
            <p>Apellido: <input type="text" name="txtapellido" ></p>
            <p>Tipo Documento: <input type="text" name="txttipodocumento" ></p>
            <p>Numero Documento: <input type="text" name="txtnumerodocumento" ></p>
            <p>Genero: <input type="text" name="txtgenero" ></p>
            <p>Edad: <input type="text" name="txtedad" ></p>
            <p><input type="submit" name="btnguardar" value="guardar"></p>
        </form>
        <?php endforeach; ?>

    </body>


</html>