
<?php include '../00_includes/04_menu_superior.php'; ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <?php include '../00_includes/05_menu_lateral_izquierdo.php'; ?>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row">



      <!-- Left col -->
      <section class="col-lg-12 connectedSortable">
        <?php include 'index_00_contenido_1.php'; ?>
        <?php //include 'index_00_contenido_2.php'; ?>
      </section>
      <!-- /.Left col -->

      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <!-- <section class="col-lg-5 connectedSortable"> -->
        <?php //include 'index_00_contenido_3.php'; ?>
        <?php //include 'index_00_contenido_4.php'; ?>
        <!-- </section> -->
        <!-- right col -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'index_06_funciones.php'; ?>

<?php include 'index_01_modal_add.php'; ?>
<?php include 'index_03_modal_edit.php'; ?>
<?php include 'index_04_modal_photo_edit.php'; ?>
<?php include 'index_05_modal_delete.php'; ?>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

