<div class="modal" id="exampleModal"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form name="formEvento" id="formEvento" action="nuevoEvento.php" class="form-horizontal" method="POST">
        <div class="modal-header">
          <h5 class="modal-title">NUEVA RESERVACION</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="card-body">

          <!-- <div class="form-group row">
            <label for="fecha_inicio" class="col-sm-3 control-label">Fecha Inicio</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha Inicio">
            </div>
          </div>  -->


        <div class="form-group row">
          <label for="fecha_inicio" class="col-sm-3 control-label">Fecha Inicio</label>
          <div class="input-group date col-sm-9"  id="reservationdate11" data-target-input="nearest">

            <div class="input-group-append" data-target="#reservationdate11" data-toggle="datetimepicker">
              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>

            <input type="text" id="fecha_inicio" name="fecha_inicio" class="form-control datetimepicker-input" data-target="#reservationdate11"  value="<?php echo date("d-m-Y");?>" data-toggle="datetimepicker"/>

          </div>
        </div>

        <div class="form-group row">
          <label for="fecha_fin" class="col-sm-3 control-label">Fecha Final</label>
          <div class="input-group date col-sm-9"  id="reservationdate1" data-target-input="nearest">

            <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>

            <input type="text" id="fecha_fin" name="fecha_fin" class="form-control datetimepicker-input" data-target="#reservationdate1"  value="<?php echo date("d-m-Y");?>" data-toggle="datetimepicker"/>

          </div>
        </div>


<!--         <div class="form-group row">
          <label for="fecha_fin" class="col-sm-3 control-label">Fecha Final</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="fecha_fin" id="fecha_fin" placeholder="Fecha Final">
          </div>
        </div>
 -->
        <script>
          $(function(){
          $(document).on('change','#cliente_id',function(){ //detectamos el evento change
          var value = $(this).val();//sacamos el valor del select
          getRow(value);
          getData();
          resta();
          //$('#myInput').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
        });

          $(document).on('change','#cancha_id',function(){ //detectamos el evento change
          //var value = $(this).val();//sacamos el valor del select
          getData();

        });

        $(document).on('change','#precio',function(){ //detectamos el evento change
          //var value = $(this).val();//sacamos el valor del select
          resta();
        });



      });

          function getRow(id){
            var tabla = 'client';
             // alert(tabla);
             $.ajax({
              type: 'POST',
              url: 'index_02_data.php',
              data: {id:id,tabla:tabla},
              dataType: 'json',
              success: function(response){
                 // console.log(response);
                 $('.empid').val(response.empid);
                 $('#descuento').val(response.t_descuento);
                 resta();
               }
             });
           }

           function getData(){
            var tablax = 'tarifa';
             // alert(tabla);
             $.ajax({
              type: 'POST',
              url: 'index_02_data.php',
              data: {tablax:tablax},
              dataType: 'json',
              success: function(response){
                //console.log(response);
                $('#precio').val(response.precio);
                resta();
              }
            });
           }

           function resta(){
            //UNIDAD---A
            var a = parseFloat(document.formEvento.precio.value);
            var b = parseFloat(document.formEvento.descuento.value);

            if (isNaN(a)) {
              a=0;
            }
            if (isNaN(b)) {
              b=0;
            }
            console.log('valor obtenido en A: '+ a);
            console.log('valor obtenido en B: '+ b);

            //var c = a+b;
            //SUBTOTAL---C
            var c = parseFloat(a-b);
            //console.log('subtotal: '+c);
            document.formEvento.neto_a_pagar.value = c.toFixed(2);
          }

        </script>

        <div class="form-group row">
          <label for="cliente_id" class="col-sm-3 control-label">CLIENTE:</label>
          <div class="col-sm-9">
            <select class="form-control select2" name="cliente_id" id="cliente_id" required>
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
          <label for="cancha_id" class="col-sm-3 control-label">CANCHA:</label>
          <div class="col-sm-9">
            <select class="form-control select2" name="cancha_id" id="cancha_id" required>
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
          <label for="horario_id" class="col-sm-3 control-label">HORARIO:</label>
          <div class="col-sm-9">
            <select class="form-control select2" name="horario_id" id="horario_id" required>
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
          <label for="grupoRadio" class="col-sm-3 control-label">COLOR EVENTO:</label>
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
         <label for="precio" class="col-sm-3 control-label">PRECIO REGULAR</label>
         <div class="col-sm-9">
          <input type="text" class="form-control" name="precio" readonly id="precio" placeholder="precio" required/>
        </div>
      </div>

      <div class="form-group row">
       <label for="descuento" class="col-sm-3 control-label">DESCUENTO</label>
       <div class="col-sm-9">
        <input type="text" class="form-control" name="descuento" readonly id="descuento" placeholder="Nombre del Evento" required/>
      </div>
    </div>

    <div class="form-group row">
     <label for="neto_a_pagar" class="col-sm-3 control-label">TOTAL A PAGAR</label>
     <div class="col-sm-9">
      <input type="text" class="form-control" name="neto_a_pagar" readonly id="neto_a_pagar" placeholder="Nombre del Evento" required/>
    </div>
  </div>





</div>

<div class="modal-footer">
 <button type="submit" class="btn btn-success">Guardar RESERVA</button>
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
</div>
</form>

</div>
</div>
</div>