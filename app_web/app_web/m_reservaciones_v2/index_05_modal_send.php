<div class="modal fade" id="modal-editx">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" action="index_05_modal_send_send.php" method="POST">

        <div class="modal-header">
          <h4 class="modal-title">Enviar correo-e  para: </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="card-body">
          <input type="hidden" class="empid" name="id">
          <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
          <input type="hidden"               name="modulo"  value="01index.php">

          <div class="form-group">
            <label for="edit_nombre" class="col-sm-3 control-label">Nombre:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_nombre2" name="nombre" value="HITMAN" required>
            </div>
          </div>


          <div class="form-group">
            <label for="edit_telefono" class="col-sm-3 control-label">Teléfono</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_telefono2" name="telefono" required>
            </div>
          </div>


          <div class="form-group">
            <label for="edit_email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_email2" name="email" required>
            </div>
          </div>
        </div>

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" name="enviar" class="btn btn-primary"> <i class="fa fa-paper-plane"></i> Enviar</button>
        </div>

      </form>

    </div>





    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->







