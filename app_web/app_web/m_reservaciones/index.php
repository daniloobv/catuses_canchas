<?php include '../00_includes/00_session.php'; ?>
<?php include 'configuracion.php'; ?>
<?php include '../00_includes/01_html_ini.php'; ?>
<?php include '../00_includes/02_head.php'; ?>

<?php include '../00_includes/03_body_ini.php'; ?>

<!-- Navbar -->
<?php include '../00_includes/04_menu_superior.php'; ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <?php include '../00_includes/05_menu_lateral_izquierdo.php'; ?>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php //include('msjs.php'); ?>
  <?php include '../00_includes/06_cinta_titulo_modulo.php'; ?>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <!-- /.col -->
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body p-0">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include '../00_includes/06_footer.php'; ?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<?php include '../00_includes/06_script.php'; ?>


<?php
include('modalNuevoEvento.php');
include('modalUpdateEvento.php');
?>

<!-- <script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/fullcalendar/main.js"></script>
<script src="../../dist/js/demo.js"></script> -->
<?php
//include('config.php');

$SqlEventos   = ("SELECT *, client.nombre as nombre_cliente, canchas.nombre as nombre_cancha FROM eventoscalendar
  INNER JOIN client on client.id = eventoscalendar.cliente_id
  INNER JOIN canchas on canchas.id = eventoscalendar.cancha_id
  INNER JOIN horarios on horarios.id = eventoscalendar.horario_id
  ");
$resulEventos = mysqli_query($conn, $SqlEventos);

?>

<script>
  $(function () {
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
    m    = date.getMonth(),
    y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var calendarEl = document.getElementById('calendar');

    var calendar = new Calendar(calendarEl, {
      locale: 'es',
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title'

      },
      themeSystem: 'bootstrap',





      events: [
      <?php
      while($dataEvento = mysqli_fetch_array($resulEventos)){ ?>
        {
          _id: '<?php echo $dataEvento['id']; ?>',
          title: '<?php echo $dataEvento['evento'].' '.$dataEvento['nombre_cancha'].'  CLIENTE: ['.$dataEvento['nombre_cliente'].' ]'; ?>',
          start: '<?php echo $dataEvento['fecha_inicio']; ?>',
          end:   '<?php echo $dataEvento['fecha_fin']; ?>',
          color: '<?php echo $dataEvento['color_evento']; ?>'
        },
      <?php } ?>
      ],

      dateClick: function(info) {
        //alert('clicked ' + info.dateStr);
      },
      select: function(info) {

//info.endStr;

const day_ini = new Date(info.startStr);
const yyyy_ini = day_ini.getFullYear();
let mm_ini = day_ini.getMonth() + 1; // Months start at 0!
let dd_ini = day_ini.getDate();
if (dd_ini < 10) dd_ini = '0' + dd_ini;
if (mm_ini < 10) mm_ini = '0' + mm_ini;
const day_i = yyyy_ini + '-' + mm_ini + '-' + dd_ini;


const day_fin = new Date(info.endStr);
const yyyy_fin = day_fin.getFullYear();
let mm_fin = day_fin.getMonth() + 1; // Months start at 0!
let dd_fin = day_fin.getDate();
if (dd_fin < 10) dd_fin = '0' + dd_fin;
if (mm_fin < 10) mm_fin = '0' + mm_fin;
const day_f = yyyy_fin + '-' + mm_fin + '-' + dd_fin;


//alert('selected ' + info.startStr + ' to ' + day_f);
$("#exampleModal").modal();

$("input[name=fecha_inicio]").val(info.startStr);
$('input[name=fecha_fin').val(day_f);

},


eventClick: function(info) {
  var eventObj = info.event;

  if (eventObj.url) {
    alert(
      'Clicked ' + eventObj.title + '.\n' +
      'Will open ' + eventObj.url + ' in a new tab'
      );

    window.open(eventObj.url);

        info.jsEvent.preventDefault(); // prevents browser from following link in current tab.
      } else {
        //alert('Clicked ' + eventObj.title);
      }

      const day_fin = new Date(eventObj.endStr);
      const yyyy_fin = day_fin.getFullYear();
let mm_fin = day_fin.getMonth() + 1; // Months start at 0!
let dd_fin = day_fin.getDate();
if (dd_fin < 10) dd_fin = '0' + dd_fin;
if (mm_fin < 10) mm_fin = '0' + mm_fin;
const day_f = yyyy_fin + '-' + mm_fin + '-' + dd_fin;

$('input[name=idEvento').val(eventObj._id);
$('input[name=evento').val(eventObj.title);
$('input[name=fecha_inicio').val(eventObj.startStr);
$('input[name=fecha_fin').val(day_f);

$("#modalUpdateEvento").modal();

},


    locale: 'es',
    //defaultView: "month",
    navLinks: false,
    editable: true,
    //eventLimit: true,
    selectable: true,
    //selectHelper: false,



    });

calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
</script>


<?php include '../00_includes/07_body_html_fin.php'; ?>
