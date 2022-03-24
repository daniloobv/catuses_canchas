<div class="modal" id="exampleModal"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form name="formEvento" id="formEvento" action="nuevoEvento.php" class="form-horizontal" method="POST">

        <div class="modal-header">
          <h5 class="modal-title">Registrar Nuevo Evento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div class="card-body">



    <div class="form-group row">
            <label for="user_id" class="col-sm-3 control-label">user_id:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="user_id" name="user_id" required value=" <?php echo $user['id']?> ">
            </div>
          </div>

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
            <label for="cancha_id" class="col-sm-3 control-label">Cancha</label>
            <div class="col-sm-9">
              <select class="form-control select2" name="cancha_id" id="gasto_tipo_id" required>
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





          <div class="form-group row" style="display: none;">
           <label for="evento" class="col-sm-3 control-label">Nombre del Evento</label>
           <div class="col-sm-9">
            <input type="text" class="form-control" name="evento" value="alquiler" id="evento" placeholder="Nombre del Evento" required/>
          </div>
        </div>

        <div class="form-group row">
          <label for="fecha_inicio" class="col-sm-3 control-label">Fecha Inicio</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha Inicio">
          </div>
        </div>
        <div class="form-group row">
          <label for="fecha_fin" class="col-sm-3 control-label">Fecha Final</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="fecha_fin" id="fecha_fin" placeholder="Fecha Final">
          </div>
        </div>


        <div class="col-md-12" style="font-size: 1px;" id="grupoRadio">

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


        <div class="modal-footer">
         <button type="submit" class="btn btn-success">Guardar Evento</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
       </div>

     </div>

   </form>

 </div>
</div>
</div>