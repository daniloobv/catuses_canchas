<script>


  function funcionX(valor){
    //alert(valor);
    $('#modal-edit').modal('show');
    var id = valor;
    getRow(id);
  }


    function funcionS(valor){
    //alert(valor);
    $('#modal-editx').modal('show');
    var id = valor;
    getRow(id);
  }



  function funcionA(valor){
    //alert(valor);
    $('#modal-abonar').modal('show');
    var id = valor;
    getRow(id);

  }

  function funcionY(valor){
    //alert(valor);
    $('#modal-delete').modal('show');
    var id = valor;
    getRow(id);

  }


  $(function(){
    $('.edit').click(function(e){
      e.preventDefault();
      $('#modal-edit').modal('show');
      var id = $(this).data('id');

    // alert(id);

    getRow(id);
  });

     $('.editx').click(function(e){
      e.preventDefault();
      $('#modal-edit2').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $('.delete').click(function(e){
      e.preventDefault();
      $('#modal-delete').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $('.abonar').click(function(e){
      e.preventDefault();
      $('#modal-abonar').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $('.photo').click(function(e){
      e.preventDefault();
      var id = $(this).data('id');
      getRow(id);
    });

  });

  function getRow(id){
    var tabla = '<?php echo $tabla; ?>';
    $.ajax({
      type: 'POST',
      url: 'index_02_data.php',
      data: {id:id,tabla:tabla},
      dataType: 'json',
      success: function(response){
        $('.empid').val(response.empid);
        $('.employee_id').html(response.nombreempleado);
        $('.del_employee_name').html(response.nombre);
        $('#edit_nombre').val(response.nombre);
        $('#edit_cedula').val(response.cedula);
        $('#edit_telefono').val(response.telefono);
        $('#edit_correo').val(response.correo);
        $('#edit_cliente_categoria_id').val(response.cliente_categoria_id);

      }
    });
  }
</script>





<script>

  <?php
  include '../00_includes/00_conn.php';

  $SqlEventos   = "SELECT * FROM eventoscalendar";
  $resulEventos = mysqli_query($conn, $SqlEventos);

  ?>

  function addZero(i) {
    if (i < 10) {
      i = '0' + i;
    }
    return i;
  }

  var hoy = new Date();
  var dd = hoy.getDate();
  if(dd<10) {
    dd='0'+dd;
  }

  if(mm<10) {
    mm='0'+mm;
  }

  var mm = hoy.getMonth()+1;
  var yyyy = hoy.getFullYear();

  dd=addZero(dd);
  mm=addZero(mm);

  $(document).ready(function() {
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next',
        center: 'title',
        right: 'month,agendaDay'
      },
      defaultDate: yyyy+'-'+mm+'-'+dd,
        buttonIcons: true, // show the prev/next text
        weekNumbers: false,
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        selectable: true,
        events: [
        <?php
        while($dataEvento = mysqli_fetch_array($resulEventos)){ ?>
          {
            _id: '<?php echo $dataEvento['id']; ?>',
            title: '<?php echo $dataEvento['evento']; ?>',
            start: '<?php echo $dataEvento['fecha_inicio']; ?>',
            end:   '<?php echo $dataEvento['fecha_fin']; ?>',
            color: '<?php echo $dataEvento['color_evento']; ?>'
          },
        <?php } ?>
        ],

//Nuevo Evento
//select:
dayClick: function(start, end){
  $("#exampleModal").modal();
  $("input[name=fecha_inicio]").val(start.format('DD-MM-YYYY'));

  var valorFechaFin = end.format("DD-MM-YYYY");
      var F_final = moment(valorFechaFin, "DD-MM-YYYY").subtract(1, 'days').format('DD-MM-YYYY'); //Le resto 1 dia
      $('input[name=fecha_fin').val(F_final);

    },



/*  dayClick: function (date, jsEvent, view) {
    alert('Has hecho click en: '+ date.format());
  },*/






  eventRender: function(event, element) {
    element
    .find(".fc-content")
    .prepend("<span id='btnCerrar'; class='closeon material-icons'>&#xe5cd;</span>");

    //Eliminar evento
    element.find(".closeon").on("click", function() {

      var pregunta = confirm("Deseas Borrar este Evento?");
      if (pregunta) {

        $("#calendar").fullCalendar("removeEvents", event._id);

        $.ajax({
          type: "POST",
          url: 'deleteEvento.php',
          data: {id:event._id},
          success: function(datos)
          {
            $(".alert-danger").show();

            setTimeout(function () {
              $(".alert-danger").slideUp(500);
            }, 3000);

          }
        });
      }
    });
  },

  eventClick: function (calEvent, jsEvent, view) {
    $('#event-title').text(calEvent.title);
    $('#event-description').html(calEvent.description);
    $('#modal-event').modal();
  },


});
  });

</script>
