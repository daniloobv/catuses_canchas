<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullcalendar jQuery Demo</title>
    <meta name="description" content="Fullcalendar ejemplo..."/>
    <meta name="author" content="Jose Aguilar">
    <link rel="shortcut icon" href="https://www.jose-aguilar.com/blog/wp-content/themes/jaconsulting/favicon.ico" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel='stylesheet' type='text/css' href='css/fullcalendar.css' />
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/moment.min.js'></script>
    <script type='text/javascript' src='js/fullcalendar.min.js'></script>
    <script type='text/javascript' src='js/locale/es.js'></script>


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
</head>

<body>


<?php
include 'modalNuevoEvento.php';
include 'modalUpdateEvento.php';
?>


    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="https://www.jose-aguilar.com/">
            <img src="https://www.jose-aguilar.com/blog/wp-content/themes/jaconsulting/images/jose-aguilar.png" width="30" height="30" alt="Jose Aguilar">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="https://www.jose-aguilar.com/scripts/jquery/fullcalendar/">P1 <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="https://www.jose-aguilar.com/scripts/jquery/fullcalendar/fullcalendar.zip">P2</a>
                <a class="nav-item nav-link" href="https://www.jose-aguilar.com/blog/fullcalendar-con-jquery/">P3</a>
                <a class="nav-item nav-link" href="https://www.jose-aguilar.com/">&copy; P4</a>
            </div>
        </div>
    </nav>
    <div class="container">





      <div class="row">
        <div id="content" class="col-lg-12">
            <div id="calendar"></div>
            <div class="modal fade" id="modal-event" tabindex="-1" role="dialog" aria-labelledby="modal-eventLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="event-title"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="event-description"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes1</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Bloque de anuncios adaptable -->
            <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-6676636635558550"
            data-ad-slot="8523024962"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
    



    
</div>
<footer class="footer bg-dark">
    <div class="container">
        <span class="text-muted"><a href="https://www.jose-aguilar.com/">&copy; Jose Aguilar</a></span>
    </div>
</footer>






</body>
</html>
