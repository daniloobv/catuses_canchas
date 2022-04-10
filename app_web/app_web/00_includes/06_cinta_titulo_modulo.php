<!--  <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div>
      </div>
    </div> -->


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 col-12">
            <!-- <h1>Collapsed Sidebar</h1> -->
            <div class="btn-group" >

              <?php if( $btnRegresarVisible){ ?>
               <button class="btn bg-maroon btn-sm" style="margin-right: 3px;margin-left: 3px;">
                <i class="fa fa-chevron-left"></i> <a href=" <?php echo $urlRegresarText ?> "> <?php echo $btnRegresarText ?> </a>
              </button>
            <?php  }
            else{ ?>

            <?php } ?>



            <?php if( $btnNuevoVisible){ ?>
             <button class="btn bg-primary btn-sm" style="margin-right: 3px;margin-left: 3px;" data-toggle="modal" data-target=" <?php echo $urlNuevoText ?>"> <!-- onclick="alert('test');"> -->
              <i class="fas fa-plus"></i>  <?php echo $btnNuevoText ?>
            </button>
          <?php  }
          else{ ?>

          <?php } ?>




          <?php if( $btnOpcion1Visible){ ?>
           <button class="btn bg-success btn-sm" style="margin-right: 3px;margin-left: 3px;">
            <i class="fa fa-circle"></i> <a href=" <?php echo $urlOpcion1Text ?> "> <?php echo $btnOpcion1Text ?> </a>
          </button>
        <?php  }
        else{ ?>

        <?php } ?>



        <?php if( $btnOpcion2Visible){ ?>
         <button class="btn bg-danger btn-sm" style="margin-right: 3px;margin-left: 3px;">
          <i class="fas fa-square"></i> <a href=" <?php echo $urlOpcion2Text ?> "> <?php echo $btnOpcion2Text ?> </a>
        </button>
      <?php  }
      else{ ?>

      <?php } ?>


      <?php
      include('../m_reservaciones/msjs.php');
      ?>


    </div>
  </div>



</div>
</div><!-- /.container-fluid -->

<?php
if(isset($_SESSION['error'])){
  echo "
  <div class='alert alert-danger alert-dismissible'>
  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  <h4><i class='icon fa fa-warning'></i> Error!</h4>
  ".$_SESSION['error']."
  </div>
  ";
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



</section>