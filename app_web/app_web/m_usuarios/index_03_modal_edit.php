<div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" action="index_03_modal_edit_update.php" method="post" enctype="multipart/form-data">

        <div class="modal-header">
          <h4 class="modal-title">Editar <?php echo $titulo_modulo; ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="card-body">
          <input type="hidden" class="empid" name="id">
          <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
          <input type="hidden"               name="modulo"  value="01index.php">

          <div class="form-group row">
            <label for="edit_rol_id" class="col-sm-3 control-label">Rol</label>
            <div class="col-sm-9">
                <select class="form-control" id="edit_rol_id"  name="rol_id"required>
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
            <label for="edit_username" class="col-sm-3 control-label">Usuario:</label>

            <div class="col-sm-9">
                <input type="text" class="form-control" id="edit_username" name="username" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="edit_firstname" class="col-sm-3 control-label">Nombres: </label>

            <div class="col-sm-9">
                <input type="text" class="form-control" id="edit_firstname" name="firstname" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="edit_lastname" class="col-sm-3 control-label">Apellidos: </label>

            <div class="col-sm-9">
                <input type="text" class="form-control" id="edit_lastname" name="lastname" required>
            </div>
        </div>













        </div>

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" name="edit" class="btn btn-primary">Modificar</button>
        </div>

      </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->







