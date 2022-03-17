<div class="modal fade" id="modal-add">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <form class="form-horizontal" action="index_01_modal_add_insert.php" method="POST">

        <div class="modal-header">
          <h4 class="modal-title">NUEVO HORARIO</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


          <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">



          <div class="bootstrap-timepicker">
            <div class="form-group row">
              <label for="time_in">Hora Inicio:</label>
              <div class="input-group date" id="edit_timepicker11" data-target-input="nearest">
               <div class="input-group-append" data-target="#edit_timepicker11" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
              </div>
              <input type="text" id="time_in" value="<?php echo $hora_actual ?>" name="time_ini" data-toggle="datetimepicker" class="form-control datetimepicker-input" data-target="#edit_timepicker11"/>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
        </div>


        <div class="bootstrap-timepicker">
          <div class="form-group row">
            <label for="time_fi">Hora Final:</label>
            <div class="input-group date" id="edit_timepicker12" data-target-input="nearest">
             <div class="input-group-append" data-target="#edit_timepicker12" data-toggle="datetimepicker">
              <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
            <input type="text" id="time_fi" value="<?php echo $hora_actual ?>" name="time_fin" data-toggle="datetimepicker" class="form-control datetimepicker-input" data-target="#edit_timepicker12"/>
          </div>
          <!-- /.input group -->
        </div>
        <!-- /.form group -->
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



