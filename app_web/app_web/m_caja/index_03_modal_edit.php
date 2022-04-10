<div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" action="index_03_modal_edit_update.php" method="post">

        <div class="modal-header">
          <h4 class="modal-title">Editar <?php echo $titulo_modulo; ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- <H1>EDITAR</H1> -->

        <div class="card-body">
          <input type="hidden" class="empid" name="id">
          <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
          <input type="hidden"               name="modulo"  value="01index.php">




          <div class="form-group row">
            <label for="edit_fecha_inicio" class="col-sm-3 control-label">Fecha Inicio</label>
            <div class="input-group date col-sm-9"  id="reservationdate1_edit" data-target-input="nearest">

              <div class="input-group-append" data-target="#reservationdate1_edit" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>

              <input type="text" id="edit_fecha_inicio" name="fecha_inicio" class="form-control datetimepicker-input" data-target="#reservationdate1_edit"  value="<?php echo date("d-m-Y");?>" data-toggle="datetimepicker"/>

            </div>
          </div>

          <div class="form-group row">
            <label for="edit_fecha_fin" class="col-sm-3 control-label">Fecha Final</label>
            <div class="input-group date col-sm-9"  id="reservationdate2_edit" data-target-input="nearest">

              <div class="input-group-append" data-target="#reservationdate2_edit" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>

              <input type="text" id="edit_fecha_fin" name="fecha_fin" class="form-control datetimepicker-input" data-target="#reservationdate2_edit"  value="<?php echo date("d-m-Y");?>" data-toggle="datetimepicker"/>

            </div>
          </div>





          <div class="form-group row">
            <label for="edit_cliente_id" class="col-sm-3 control-label">CLIENTE:</label>
            <div class="col-sm-9">
              <select class="form-control select2" id="edit_cliente_id"  name="cliente_id"required>
                <option value="" selected>- Seleccionar -</option>
                <?php
                $sql = "SELECT * FROM client";
                $query = $conn->query($sql);
                while ($prow = $query->fetch_assoc()) {
                  echo "
                  <option value='" . $prow['id'] . "'>" . $prow['nombre'] . "</option>
                  ";
                }
                ?>
              </select>
            </div>
          </div>

          <!-- <input id="myInput"> -->

          <div class="form-group row">
            <label for="edit_cancha_id" class="col-sm-3 control-label">CANCHA:</label>
            <div class="col-sm-9">
              <select class="form-control select2" id="edit_cancha_id"  name="cancha_id"required>
                <option value="" selected>- Seleccionar -</option>
                <?php
                $sql = "SELECT * FROM canchas";
                $query = $conn->query($sql);
                while ($prow = $query->fetch_assoc()) {
                  echo "
                  <option value='" . $prow['id'] . "'>" . $prow['nombre'] . "</option>
                  ";
                }
                ?>
              </select>
            </div>
          </div>


          <div class="form-group row">
            <label for="edit_horario_id" class="col-sm-3 control-label">HORARIO:</label>
            <div class="col-sm-9">
              <select class="form-control select2" id="edit_horario_id"  name="horario_id"required>
                <option value="" selected>- Seleccionar -</option>
                <?php
                $sql = "SELECT * FROM horarios";
                $query = $conn->query($sql);
                while ($prow = $query->fetch_assoc()) {
                  echo "
                  <option value='" . $prow['id'] . "'>" . $prow['hora_inicio'] . ' - ' . $prow['hora_final'] . "</option>
                  ";
                }
                ?>
              </select>
            </div>
          </div>



          <div class="form-group row">
            <label for="edit_grupoRadio" class="col-sm-3 control-label">COLOR EVENTO:</label>
            <div class="col-sm-9" id="grupoRadio">

              <input type="radio" name="color_evento" id="orange" value="#FF5722" checked>
              <label for="orange" class="circu" style="background-color: #FF5722;"> </label>

              <input type="radio" name="color_evento" id="amber" value="#FFC107">
              <label for="amber" class="circu" style="background-color: #FFC107;"> </label>

              <input type="radio" name="color_evento" id="lime" value="#8BC34A">
              <label for="lime" class="circu" style="background-color: #8BC34A;"> </label>

              <input type="radio" name="color_evento" id="teal" value="#009688">
              <label for="teal" class="circu" style="background-color: #009688;"> </label>

              <input type="radio" name="color_evento" id="blue" value="#2196F3">
              <label for="blue" class="circu" style="background-color: #2196F3;"> </label>

              <input type="radio" name="color_evento" id="indigo" value="#9c27b0">
              <label for="indigo" class="circu" style="background-color: #9c27b0;"> </label>

            </div>
          </div>

          <div class="form-group row">
           <label for="edit_precio" class="col-sm-3 control-label">PRECIO REGULAR</label>
           <div class="col-sm-9">
            <input type="text" class="form-control" id="edit_precio"  name="precio" readonlyplaceholder="Nombre del Evento" required/>
          </div>
        </div>

        <div class="form-group row">
         <label for="edit_descuento" class="col-sm-3 control-label">DESCUENTO</label>
         <div class="col-sm-9">
          <input type="text" class="form-control" id="edit_descuento"  name="descuento" readonlyplaceholder="Nombre del Evento" required/>
        </div>
      </div>

      <div class="form-group row">
       <label for="edit_neto_a_pagar" class="col-sm-3 control-label">TOTAL A PAGAR</label>
       <div class="col-sm-9">
        <input type="text" class="form-control" id="edit_neto_a_pagar"  name="neto_a_pagar" readonlyplaceholder="Nombre del Evento" required/>
      </div>
    </div>







  </div>

  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="submit" name="edit" class="btn btn-primary">Modificar</button>
  </div>

</form>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->




