<div class="modal fade" id="modal-add">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <form class="form-horizontal" action="index_01_modal_add_insert.php" method="POST">

        <div class="modal-header">
          <h4 class="modal-title">NUEVO</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>MENSAJE&hellip;</p>
          <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
          <div class="form-group">
            <label for="mensaje">CUERPO DEL MENSAJE</label>
            <textarea id="mensaje" name="mensaje" class="form-control" rows="12">  </textarea>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
          <button type="submit" name="add" class="btn btn-primary">GUARDAR</button>
        </div>

      </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
      <!-- /.modal -->