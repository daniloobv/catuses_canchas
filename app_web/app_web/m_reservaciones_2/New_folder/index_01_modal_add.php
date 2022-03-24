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

        <input type="hidden" class="empid" name="id">
        <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
        <input type="hidden"               name="modulo"  value="01index.php">


        <div class="card-body">


          <div class="form-group row">

            <label for="cliente_id" class="col-sm-3 control-label">Cliente:</label>
            <div class="col-sm-9">
              <select class="form-control select2" id="cliente_id" name="cliente_id"  required>
                <option value="" selected>- Seleccionar -</option>
                <?php
                $sqla = "SELECT * FROM client ";
                $querya = $conn->query($sqla);
                while ($prow = $querya->fetch_assoc()) {
                  echo "<option value='".$prow['id']."'>".$prow['cedula'].' .......... '.$prow['nombre'] ."</option> ";
                }
                ?>
              </select>
            </div>
          </div>


          <div class="form-group row">
            <label for="telefono" class="col-sm-3 control-label">Cancha</label>
            <div class="col-sm-9">
              <select class="form-control select2" name="gasto_tipo_id" id="gasto_tipo_id" required>
                <option value="" selected>- Seleccionar -</option>
                <?php
                $sqla = "SELECT * FROM canchas ";
                $querya = $conn->query($sqla);
                while ($prow = $querya->fetch_assoc()) {
                  echo "<option value='".$prow['id']."'>". $prow['nombre'] . "</option> ";
                }
                ?>
              </select>
            </div>
          </div>


          <div class="form-group row">
            <label class="col-sm-3 control-label" for="datepicker">Fecha</label>
            <div class=" col-sm-9 input-group date"  id="reservationdate11" data-target-input="nearest">
              <div class="input-group-append" data-target="#reservationdate11" data-toggle="datetimepicker">
                <div class="input-group-text"> <i class="fa fa-calendar"> </i>    </div>
              </div>
              <input type="text" id="datepicker" name="fecha" class="form-control datetimepicker-input" data-target="#reservationdate11"  value="<?php echo date("d-m-Y");?>" data-toggle="datetimepicker"/>
            </div>
          </div>




        <!--   <br>
          <h4>propuesta 1</h4>
          <br>

          <div class="bootstrap-timepicker">
            <div  class="form-group row">
              <label class="col-sm-3 control-label" for="time_in">Hora Inicio:</label>
              <div class="col-sm-9 input-group date" id="timepicker11" data-target-input="nearest">
               <div class="input-group-append" data-target="#timepicker11" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
              </div>
              <input type="text" id="time_in" value="<?php //echo $hora_actual ?>" name="time_in" data-toggle="datetimepicker" class="form-control datetimepicker-input" data-target="#timepicker11"/>
            </div>
          </div>
        </div>


        <div class="bootstrap-timepicker">
          <div  class="form-group row">
            <label class="col-sm-3 control-label" for="time_in">Hora Final:</label>
            <div class="col-sm-9 input-group date" id="timepicker2" data-target-input="nearest">
             <div class="input-group-append" data-target="#timepicker2" data-toggle="datetimepicker">
              <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
            <input type="text" id="time_in" value="<?php //echo $hora_actual ?>" name="time_in" data-toggle="datetimepicker" class="form-control datetimepicker-input" data-target="#timepicker2"/>
          </div>
        </div>
      </div>


      <br>
      <br> -->
   <!--    <h4>propuesta 2</h4>
      <br> -->

      <div class="form-group row">
        <label for="horario_id" class="col-sm-3 control-label">Horario</label>

        <div class="col-sm-9">
          <select class="form-control" name="horario_id" id="horario_id" required>
            <option value="" selected>- Seleccionar -</option>
            <?php
            $sql = "SELECT * FROM horarios";
            $query = $conn->query($sql);
            while ($prow = $query->fetch_assoc()) {
              echo "
              <option value='" . $prow['id'] . "'>" . $prow['hora_inicio'] .' - ' .$prow['hora_final']. "</option> ";
            }
            ?>
          </select>
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




