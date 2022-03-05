<?php include '../00_includes/00_session.php'; ?>
<?php include 'configuracion.php'; ?>
<?php include '../00_includes/01_html_ini.php'; ?>
<?php include '../00_includes/02_head.php'; ?>
<?php include '../00_includes/03_body_ini.php'; ?>
<?php include '../00_includes/04_menu_superior.php'; ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <?php include '../00_includes/05_menu_lateral_izquierdo.php'; ?>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php include '../00_includes/06_cinta_titulo_modulo.php'; ?>


  <!-- Main content -->
  <!-- Main content -->
  <section class="content">
    <div class="error-page">


      <div class="error-content">
        <h3><i class="fas fa-exclamation-triangle text-danger"></i> Este modulo se encuentr en desarrollo.</h3>

        <p>
          estimado cliente gracias por su paciencia.
          por medio del sigueinte enlace: podra regresar a la<a href="../00_m_a_base/index.php">  pagina principal</a>
        </p>


      </div>

      <h4 class="headline text-danger" style="font-size: 38px;">MODULO EN DESARROLLO</h4>

    </div>
    <!-- /.error-page -->

  </section>
  <!-- /.content -->
  <!-- /.content -->


</div>
<!-- /.content-wrapper -->
<?php include '../00_includes/06_footer.php'; ?>

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
<?php include '../00_includes/06_script.php'; ?>
<?php include '../00_includes/07_body_html_fin.php'; ?>