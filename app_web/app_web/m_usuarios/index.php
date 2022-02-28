<!-- 1) incluimos en nuestra pagina al archivo de CONFIGURACION.PHP el cual se encargara de validar el acceso a cada pagina
  tambien se encarga de brindar acceso a las variables que nos permiten interactuar con la BD -->
  <?php include 'configuracion.php'; ?>

  <!-- 2) el archivo HEADER.PHP nos permite agegar los elementos basicos y principales de un header en HTML (plugins, librerias, etc) -->
  <?php include '../00_includes/header1.php'; ?>


  <!--3) INICIO DEL CUERPO DE LA PAGINA HTML .... BODY -->
  <body class="hold-transition skin-blue sidebar-mini <?php echo ' '.$fijarSidebar; ?>">
    <div class="wrapper">


      <!--4) incluimos al archivo que contiene la estructura  y funcionalidad de la BARRA SUPERIRO por medio del archivo NAVBAR.PHP -->
      <?php include '../00_includes/navbar.php'; ?>


      <!--5) incluimos al archivo que contiene la estructura  y funcionalidad del MENU LATERAL IZQUIERDO por medio del archivo menubar.PHP -->
      <?php include '../00_includes/menubar.php'; ?>
      <!-- =============================================== -->


      <div class="content-wrapper">
        <!-- 6) INICIO MENSAJES DE SESION - ESTO PARA AVISAR SI LAS TRANSACCIONES HAN SIDO EXITOSA O FALLIDAS AL INTERACTUAR CON EL BACKEND  -->

        <?php
        if(isset($_SESSION['error'])){
          echo " <div class='alert alert-danger alert-dismissible'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          <h4><i class='icon fa fa-warning'></i> Error!</h4>
          ".$_SESSION['error']."
          </div>          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
          <div class='alert alert-success alert-dismissible'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          <h4><i class='icon fa fa-check'></i>¡Proceso Exitoso!</h4>
          ".$_SESSION['success']."
          </div>
          ";
          unset($_SESSION['success']);
        }
        ?>
        <!-- FIN MENSAJES DE SESION - ESTO PARA AVISAR SI LAS TRANSACCIONES HAN SIDO EXITOSA O FALLIDAS AL INTERACTUAR CON EL BACKEND  -->


        <?php include 'cinta_superior.php'; ?>


        <section class="content connectedSortable">

          <div class="row">

            <div class="col-sm-12 col-12">

              <!-- 7) LLAMADO AL CONTENEDOR PRIMARIO DENTRO DEL CUERPO DE LA PAGINA QUE POR LO GENERA PERO NO CASI SIEMPRE CONTIEN UNICAMENTE UNA TABLA -->
              <?php include 'index_00_contenedor_01.php'; ?>

            </div>

          </div>




        </section>

      </div>


      <!--8) incluimos al archivo que contiene la estructura   del PIE DE PAGINA por medio del archivo FOOTER.PHP -->
      <?php include '../00_includes/footer.php'; ?>
      <?php
//$modulo="archivoB";
      $palbraClave=$extra;
      ?>
      <?php include 'index_04_modal_add.php'; ?>
      <?php include 'index_05_modal_edit.php'; ?>
       <?php include 'index_05_modal_edit_pass.php'; ?>
      <?php include 'index_06_modal_delete.php'; ?>
      <?php include 'index_07_modal_edit_photo.php'; ?>


    </div>
    <!-- ./wrapper -->
    <?php //include '09_script.php'; ?>
    <?php include '../00_includes/scripts1.php'; ?>
    <?php include 'index_02_script.php'; ?>
  </body>
  </html>
