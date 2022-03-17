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
          <input type="hidden" class="empid" name="id">
          <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
          <input type="hidden"               name="modulo"  value="01index.php">

          <div class="form-group row">
            <label for="descripcion" class="col-sm-3 control-label">DESCRIPCION TIPO CLIENTE:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="descripcion" name="descripcion" required>
            </div>
          </div>


          <div class="form-group row">
            <label for="t_descuento" class="col-sm-3 control-label">DESCUENTO %:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="t_descuento" value="0.00" name="t_descuento" required>
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




