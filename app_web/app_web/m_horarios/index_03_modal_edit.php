<div class="modal fade" id="modal-edit">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <form name="f" class="form-horizontal" action="index_03_modal_edit_update.php" method="post">

        <div class="modal-header">
          <h4 class="modal-title">EDITAR</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>MENSAJE&hellip;</p>
          <input type="hidden" class="empid" name="id">
          <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
          <div class="form-group">
            <label for="inputDescription">CUERPO DEL MENSAJE</label>
            <textarea id="edit_mensaje" name="mensaje" class="form-control" rows="12">  </textarea>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
          <button type="submit" name="edit" class="btn btn-primary">GUARDAR CAMBIOS</button>
        </div>


      </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
      <!-- /.modal -->