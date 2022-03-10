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
            <div  class="form-group row">
              <label class="col-sm-3 control-label" for="time_ini">Hora Inicio:</label>
              <div class="col-sm-9 input-group date" id="timepicker11" data-target-input="nearest">
               <div class="input-group-append" data-target="#timepicker11" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
              </div>
              <input type="text" id="time_ini" value="<?php echo $hora_actual ?>" name="time_ini" data-toggle="datetimepicker" class="form-control datetimepicker-input" data-target="#timepicker11"/>
            </div>
          </div>
        </div>


      <div class="bootstrap-timepicker">
          <div  class="form-group row">
            <label class="col-sm-3 control-label" for="time_fin">Hora Final:</label>
            <div class="col-sm-9 input-group date" id="timepicker2" data-target-input="nearest">
             <div class="input-group-append" data-target="#timepicker2" data-toggle="datetimepicker">
              <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
            <input type="text" id="time_fin" value="<?php echo $hora_actual ?>" name="time_fin" data-toggle="datetimepicker" class="form-control datetimepicker-input" data-target="#timepicker2"/>
          </div>
        </div>
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



