<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
      <div class="modal-content">

        <form class="form-horizontal" action="index_04_modal_photo_edit_update.php" method="post" enctype="multipart/form-data">

            <div class="modal-header">
              <h4 class="modal-title">Editar foto <?php echo $titulo_modulo; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <input type="hidden" class="empid_2" name="id">

            <div class="form-group">
                <label for="photo" class="col-sm-3 control-label">Foto</label>

                <div class="col-sm-9">
                    <input type="file" id="photo" name="photo" required>
                </div>
            </div>

        </div>

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" name="upload" class="btn btn-primary">Salvar</button>
      </div>

  </form>


</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
