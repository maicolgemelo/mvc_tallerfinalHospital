<?php require_once 'header.php';?>

<h1>Menu Doctores</h1>
<br>

<form name="form2" method="POST" action="./?accion=guardarDato">

   <p>Tipo Documento:
        <select name="seltipodoc">
           <option value="">Seleccione...</option>
           <?php foreach($consultaTipodoc as $datos): ?>

              <option value="<?php echo $datos['idtipodocumento'] ?>"><?php echo $datos['nombre'] ?></option>

           <?php endforeach; ?>
        </select>

   </p> 
   <p>Numero Documento: <input type="text" name="txtnumerodocumento"></p>
   <p>Nombre: <input type="text" name="txtnombre"></p>
   <p><input type="submit" name="btnguardarmedico" value="Guardar Datos"></p>

</form>
<br>

  <table>
       <thead>
         
        <th>Id</th>
        <th>Tipo Documento</th>
        <th>Numero Documento</th>
        <th>Nombre</th>
        <th>Modificar</th>
    

       </thead>
        <tbody>

          <?php foreach($consultaMedico as $dato): ?>
           <tr>
             
           <td><?php echo $dato['idtipodocumento']; ?></td>
           <td><?php echo $dato['tipodoc']; ?></td>
           <td><?php echo $dato['numerodocumento']; ?></td>
           <td><?php echo $dato['nombre']; ?></td>
           
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