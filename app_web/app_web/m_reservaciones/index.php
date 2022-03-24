<?php include '../00_includes/00_session.php'; ?>
<?php include 'configuracion.php'; ?>
<?php include '../00_includes/01_html_ini.php'; ?>
<?php include '../00_includes/02_head_mod.php'; ?>
<?php include '../00_includes/03_body_ini.php';


 $SqlEventos   = ("SELECT *, client.nombre as nombre_cliente, canchas.nombre as nombre_cancha FROM eventoscalendar LEFT JOIN client on client.id = eventoscalendar.cliente_id JOIN canchas on canchas.id = eventoscalendar.cancha_id");
  $resulEventos = mysqli_query($conn, $SqlEventos);

?>

<div class="wrapper">

  <?php echo $preolader; ?>

  <?php include '../00_includes/04_menu_superior.php'; ?>

  <?php include '../00_includes/05_menu_lateral_izquierdo.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include '../00_includes/06_cinta_titulo_modulo.php'; ?>
    <!-- Main content -->
    <section class="content">




      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">



          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">


           <div id="calendar"></div>


           <?php //include 'index_00_contenido_2.php';   ?>
           <?php //include 'index_00_contenido_1.php'; ?>

         </section>
       </div>
     </div>
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 <?php include '../00_includes/06_footer.php'; ?>


<?php
  include 'modalNuevoEvento.php';
  include 'modalUpdateEvento.php';
?>

 <?php include 'index_03_modal_edit.php'; ?>
 <?php include 'index_05_modal_send.php'; ?>
 <?php include 'index_01_modal_add.php'; ?>
 <?php include 'index_04_modal_photo_edit.php'; ?>
 <?php include 'index_05_modal_delete.php';

 ?>



</div>
<!-- ./wrapper -->

<?php include '../00_includes/06_script_mod.php'; ?>
<?php include 'index_06_funciones.php'; ?>
<?php include '../00_includes/07_body_html_fin.php'; ?>




