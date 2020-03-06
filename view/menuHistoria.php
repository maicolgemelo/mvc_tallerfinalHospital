<?php require_once 'header.php';?>

<h1>Menu Doctores</h1>
<br>

<form name="form2" method="POST" action="./?accion=guardarDato">

   <p>Paciente:
        <select name="selpaciente">
           <option value="">Seleccione...</option>
           <?php foreach($consultaPacientesId as $datos): ?>

              <option value="<?php echo $datos['numerodocumento'] ?>"><?php echo $datos['nombre'] ?></option>

           <?php endforeach; ?>
        </select>

   </p> 
   <p>Medico:
        <select name="selmedico">
           <option value="numerodocumento">Seleccione...</option>
           <?php foreach($consultaMedico as $datos): ?>

              <option value="<?php echo $datos['numerodocumento'] ?>"><?php echo $datos['nombre'] ?></option>

           <?php endforeach; ?>
        </select>
   </p>
   <p>Observaciones:
    <br>
    <textarea name="txtobservaciones" rows="10" cols="40">observaciones</p>
   <p><input type="submit" name="btnguardarhistoria" value="Guardar Historia"></p>

</form>
<br>

  <table>
       <thead>
         
        <th>Id</th>
        <th>Paciente</th>
        <th>Medico</th>
        <th>Nombre</th>
        <th>Modificar</th>
    

       </thead>
        <tbody>

          <?php foreach($consultaHistoria as $dato): ?>
           <tr>
             
           <td><?php echo $dato['idhistoria']; ?></td>
           <td><?php echo $dato['paciente']; ?></td>
           <td><?php echo $dato['medico']; ?></td>
           <td><?php echo $dato['observacion']; ?></td>
           <td><?php echo $dato['fecha']; ?></td>
           
           <td><a href="./?accion=modificarProducto&id=<?php echo $dato['id']; ?>">Modificar</a></td>
           
          </tr>
          <?php endforeach;?>
        </tbody>


    </table> 
    

<br>
<br>
<br>

<a href="index.php">Volver</a>

<?php require_once 'footer.php'; ?>