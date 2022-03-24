<div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" action="index_03_modal_edit_update.php" method="post">

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
            <label for="edit_nombre" class="col-sm-3 control-label">Nombre:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_nombre" name="nombre" required>
            </div>
          </div>


          <div class="form-group row">
            <label for="edit_telefono" class="col-sm-3 control-label">Teléfono</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_telefono" name="telefono" required>
            </div>
          </div>


          <div class="form-group row">
            <label for="edit_correo" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_correo" name="correo" required>
            </div>
          </div>


          <div class="form-group row">
            <label for="edit_cedula" class="col-sm-3 control-label">RUT:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_cedula" name="cedula" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="edit_cliente_categoria_id" class="col-sm-3 control-label">Tipo Cliente:</label>
            <div class="col-sm-9">
              <select class="form-control " id="edit_cliente_categoria_id" name="cliente_categoria_id" required>
                <option value="" selected>- Seleccionar -</option>
                <?php
                $sql = "SELECT * FROM cliente_tipo";
                $query = $conn->query($sql);
                while ($prow = $query->fetch_assoc()) {
                  echo "
                  <option value='" . $prow['id'] . "'>" . $prow['descripcion'] . "</option>
                  ";
                }
                ?>
              </select>
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







