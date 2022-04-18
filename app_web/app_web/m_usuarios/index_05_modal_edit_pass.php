
<div class="modal fade" id="edit2">
    <div class="modal-dialog">
      <div class="modal-content">

        <form class="form-horizontal" action="05editar_2.php" method="post" >

            <div class="modal-header">
              <h4 class="modal-title">Nueva Contraseña</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <input type="hidden" class="empid" name="id">
        <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
        <input type="hidden"               name="modulo"  value="01index.php">

        <div class="card-body">

         <div class="form-group row">
            <label for="clave" class="col-sm-3 control-label">Nueva Contraseña:</label>

            <div class="col-sm-9">
                <input type="password" class="form-control" id="clave" name="clave" required>
            </div>
        </div>


    </div>

    <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button type="submit" name="update2" class="btn btn-warning">Guardar</button>
  </div>

</form>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal-->


