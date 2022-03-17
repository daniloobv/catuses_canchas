<div class="modal fade" id="modal-add">
  <div class="modal-dialog">
    <div class="modal-content">

      <form class="form-horizontal" action="index_01_modal_add_insert.php" method="POST" enctype="multipart/form-data">

        <div class="modal-header">
          <h4 class="modal-title">Nuevo <?php echo $titulo_modulo; ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="card-body">

      <input type="hidden" class="empid" name="id">
      <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
      <input type="hidden"               name="modulo"  value="01index.php">

      <div class="form-group row">
        <label for="rol_id" class="col-sm-3 control-label">Rol</label>
        <div class="col-sm-9">
            <select class="form-control" id="rol_id"  name="rol_id"required>
                <option value="" selected>- Seleccionar -</option>
                <?php
                $sql = "SELECT * FROM roles";
                $query = $conn->query($sql);
                while ($prow = $query->fetch_assoc()) {
                    echo "
                    <option value='" . $prow['id'] . "'>" . $prow['rol_descrip'] . "</option>
                    ";
                }
                ?>
            </select>
        </div>
    </div>





    <div class="form-group row">
        <label for="username" class="col-sm-3 control-label">Usuario:</label>

        <div class="col-sm-9">
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
    </div>



    <div class="form-group row">
        <label for="password" class="col-sm-3 control-label">Contraseña:</label>

        <div class="col-sm-9">
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="first_name" class="col-sm-3 control-label">Nombres: </label>

        <div class="col-sm-9">
            <input type="text" class="form-control" id="first_name" name="first_name" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="last_name" class="col-sm-3 control-label">Apellidos: </label>

        <div class="col-sm-9">
            <input type="text" class="form-control" id="last_name" name="last_name" required>
        </div>
    </div>



    <div class="form-group row">
        <label for="photo" class="col-sm-3 control-label">Foto</label>
        <div class="col-sm-9">
            <input type="file" name="photo" id="photo">
        </div>
    </div>













</div>

<div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="submit" name="add" class="btn btn-primary">Guardar</button>
</div>

</form>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->




