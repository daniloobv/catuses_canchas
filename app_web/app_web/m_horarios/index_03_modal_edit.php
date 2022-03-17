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

          <input type="hidden" class="empid" name="id">
          <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
          <input type="hidden"               name="modulo"  value="01index.php">

          <div class="bootstrap-timepicker">
            <div class="form-group row">
              <label for="edit_time_ini">Hora Inicio:</label>
              <div class="input-group date" id="timepicker11" data-target-input="nearest">
               <div class="input-group-append" data-target="#timepicker11" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
              </div>
              <input type="text" id="edit_time_ini" value="<?php echo $hora_actual ?>" name="time_ini" data-toggle="datetimepicker" class="form-control datetimepicker-input" data-target="#timepicker11"/>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
        </div>


        <div class="bootstrap-timepicker">
          <div class="form-group row">
            <label for="edit_time_fin">Hora Final:</label>
            <div class="input-group date" id="timepicker12" data-target-input="nearest">
             <div class="input-group-append" data-target="#timepicker12" data-toggle="datetimepicker">
              <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
            <input type="text" id="edit_time_fin" value="<?php echo $hora_actual ?>" name="time_fin" data-toggle="datetimepicker" class="form-control datetimepicker-input" data-target="#timepicker12"/>
          </div>
          <!-- /.input group -->
        </div>
        <!-- /.form group -->
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