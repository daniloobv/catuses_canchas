<div class="modal fade" id="edit2">
    <div class="modal-dialog">
        <div class="modal-content">

            <form class="form-horizontal" method="POST" action="index_05_modal_edit_pass_f.php">

                <div class="modal-header">
                    <h4 class="modal-title">Editar <?php echo $titulo_modulo; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="card-body">
                    <input type="hidden" class="empid" name="id">
                    <input type="hidden"               name="tabla"  value="<?php echo $tabla; ?>">
                    <input type="hidden"               name="modulo"  value="01index.php">

                    <div class="form-group row">
                        <label for="password" class="col-sm-3 control-label">Nueva Contraseña:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="edit" class="btn btn-primary">Modificar</button>
                </div>

            </form>

        </div>
<!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->







