<div class="modal fade" id="edit_photo">
  <div class="modal-dialog">
    <div class="modal-content">

      <form class="form-horizontal" action="05editar_fotos.php" method="post">

        <div class="modal-header">
          <h4 class="modal-title">Editar foto <?php echo $titulo_modulo; ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="card-body">

          <div class="form-group row">
            <label for="dato1" class="col-sm-2 col-form-label"><?php echo $campo1 ?></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="dato1" placeholder="ingrese el <?php echo $campo1 ?>" name="dato1">
            </div>
          </div>


          <div class="form-group row">
            <label for="dato2" class="col-sm-2 col-form-label"><?php echo $campo2 ?></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="dato2" placeholder="ingrese el <?php echo $campo2 ?>" name="dato2">
            </div>
          </div>


          <div class="form-group row">
            <label for="dato3" class="col-sm-2 col-form-label"><?php echo $campo3 ?></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="dato3" placeholder="ingrese el <?php echo $campo3 ?>" name="dato3">
            </div>
          </div>

        </div>

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>

      </form>

    </div>

    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



