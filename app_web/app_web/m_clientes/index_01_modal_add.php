<div class="modal fade" id="modal-add">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" action="index_01_modal_add_insert.php" method="POST">
        <div class="modal-header">
          <h4 class="modal-title">Nuevo <?php echo $titulo_modulo; ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="card-body">
          <div class="form-group">
            <input type="hidden" class="empid" name="id">
            <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
            <input type="hidden"               name="modulo"  value="01index.php">
            <label for="nombre" class="col-sm-3 control-label">Nombre:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
          </div>


          <div class="form-group">
            <label for="telefono" class="col-sm-3 control-label">Teléfono</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
          </div>


          <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="email" name="email" required>
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




