<div class="modal fade" id="modal-delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" action="index_05_modal_delete_delete.php" method="post">
        <div class="modal-header">
          <h4 class="modal-title">eliminar <?php echo $titulo_modulo; ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card-body">
          <input type="hidden" class="empid" name="id">
          <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
          <input type="hidden"               name="modulo"  value="index.php">
          <p><h5 style="text-align: center;"> estas seguro que deseas eliminar este registro </h5></p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" name="delete" class="btn btn-danger">Eliminar</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
      <!-- /.modal