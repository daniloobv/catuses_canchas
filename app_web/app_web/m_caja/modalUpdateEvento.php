<div class="modal" id="modalUpdateEvento"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualizar mi Eventox</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form name="formEventoUpdate" id="formEventoUpdate" action="UpdateEvento.php" class="form-horizontal" method="POST">
    <input type="hidden" class="form-control" name="idEvento" id="idEvento">
    <div class="form-group">
      <label for="evento" class="col-sm-12 control-label">Nombre del Evento</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="evento" id="evento" placeholder="Nombre del Evento" required/>
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_inicio" class="col-sm-12 control-label">Fecha Inicio</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha Inicio">
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_fin" class="col-sm-12 control-label">Fecha Final</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="fecha_fin" id="fecha_fin" placeholder="Fecha Final">
      </div>
    </div>

    <div class="col-md-12 activado">
 
      <input type="radio" name="color_evento" id="orangeUpd" value="#FF5722" checked>
      <label for="orangeUpd" class="circu" style="background-color: #FF5722;"> </label>

      <input type="radio" name="color_evento" id="amberUpd" value="#FFC107">  
      <label for="amberUpd" class="circu" style="background-color: #FFC107;"> </label>

      <input type="radio" name="color_evento" id="limeUpd" value="#8BC34A">  
      <label for="limeUpd" class="circu" style="background-color: #8BC34A;"> </label>

      <input type="radio" name="color_evento" id="tealUpd" value="#009688">  
      <label for="tealUpd" class="circu" style="background-color: #009688;"> </label>

      <input type="radio" name="color_evento" id="blueUpd" value="#2196F3">  
      <label for="blueUpd" class="circu" style="background-color: #2196F3;"> </label>

      <input type="radio" name="color_evento" id="indigoUpd" value="#9c27b0">  
      <label for="indigoUpd" class="circu" style="background-color: #9c27b0;"> </label>

    </div>

    
     <div class="modal-footer">
        <button type="submit" class="btn btn-success">Guardar Cambios de mi Evento</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
  </form>
      
    </div>
  </div>
</div>




<div class="modal fade" id="modal-abonar">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="form-horizontal" action="05abonar.php" method="post">
            <div class="modal-header">
              <h4 class="modal-title">Abonar </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="card-body">
           <input type="hidden" value="<?php echo $doc; ?>" name="id">
           <input type="hidden" value="<?php echo $registro_venta; ?>" name="id3">
           <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
           <input type="hidden"               name="modulo"  value="01index.php?d=<?php echo $doc; ?>">



           <div class="form-group row">
              <label class="col-sm-2" for="datepicker">Fecha</label>
              <div class="input-group date col-sm-10"  id="reservationdate1" data-target-input="nearest">
                  <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
                <input type="text" id="datepicker" name="fecha" class="form-control datetimepicker-input" data-target="#reservationdate1"  value="<?php echo date("d-m-Y");?>" data-toggle="datetimepicker"/>
            </div>
        </div>

        <div class="form-group row">
            <label for="edit_monto" class="col-sm-2 control-label">Monto Pendiente:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="edit_monto"  readonly name="monto" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="edit_abono" class="col-sm-2 control-label">Abono</label>
            <div class="col-sm-10">
                <input type="number" class="form-control"  step="any" id="edit_abono" name="abono" required />
            </div>
        </div>


        <div class="form-group row">
            <label for="edit_forma_pago" class="col-sm-2 control-label">Forma Pago</label>
            <div class="col-sm-10">
                <select class="form-control" id="edit_forma_pago" name="forma_pago" required>
                    <option value="" selected>- Seleccionar -</option>
                    <?php
                    // $sql = "SELECT * FROM forma_pago";
                    // $query = $conn->query($sql);
                    // while ($prow = $query->fetch_assoc()) {
                    //     echo "
                    //     <option value='" . $prow['id'] . "'>" . $prow['descripcion'] . "</option>
                    //     ";
                    // }
                    ?>
                </select>
            </div>
        </div>




    </div>

    <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      <button type="submit" name="abonar" class="btn btn-primary">Abonar</button>
  </div>

</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->




<div class="modal fade" id="modal-pagar">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="form-horizontal" action="05abonar_pagar.php" method="post">
            <div class="modal-header">
              <h4 class="modal-title">PAGAR </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <input type="text" value="<?php echo $doc; ?>" name="id">
            <input type="text" value="<?php echo $registro_venta; ?>" name="id3">
            <input type="text"               name="tabla"  value="<?php echo $tabla; ?>">
            <input type="text"               name="modulo"  value="01index.php?d=<?php echo $doc; ?>">



            <div class="form-group row">
              <label class="col-sm-2" for="datepicker">Fecha</label>
              <div class="input-group date col-sm-10"  id="reservationdate1" data-target-input="nearest">
                  <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
                <input type="text" id="datepicker" name="fecha" class="form-control datetimepicker-input" data-target="#reservationdate1"  value="<?php echo date("d-m-Y");?>" data-toggle="datetimepicker"/>
            </div>
        </div>



        <div class="form-group row">
            <label for="edit_monto" class="col-sm-2 control-label">Monto Pendiente:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="edit_monto" value="<?php echo number_format(($total_detalles+($total_detalles*0))-$total_abonos,2); ?>" readonly name="monto" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="edit_abono" class="col-sm-2 control-label">Abono</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo number_format(($total_detalles+($total_detalles*0))-$total_abonos,2); ?>" class="form-control"  step="any" readonly id="edit_abono" name="abono" required />
            </div>
        </div>


        <div class="form-group row">
            <label for="edit_forma_pago" class="col-sm-2 control-label">Forma Pago</label>
            <div class="col-sm-10">
                <select class="form-control" id="edit_forma_pago" name="forma_pago" required>
                    <option value="" selected>- Seleccionar -</option>
                    <?php
                    // $sql = "SELECT * FROM forma_pago";
                    // $query = $conn->query($sql);
                    // while ($prow = $query->fetch_assoc()) {
                    //     echo "
                    //     <option value='" . $prow['id'] . "'>" . $prow['descripcion'] . "</option>
                    //     ";
                    // }
                    ?>
                </select>
            </div>
        </div>




    </div>

    <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      <button type="submit" name="pagar" class="btn btn-primary">PAGAR</button>
  </div>

</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

