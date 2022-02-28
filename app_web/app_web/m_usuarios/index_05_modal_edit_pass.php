<!-- Edit -->
<div class="modal fade" id="edit2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Nueva Contraseña para: <span class="del_user_name"></span></b></h4>
            </div>
            <div class="modal-body">
                      <form class="form-horizontal" method="POST" action="index_05_modal_edit_pass_f.php">
                    <input type="hidden" id="userid1" name="id">
                    <div class="form-group">
                        <label for="clave" class="col-sm-3 control-label">Nueva Contraseña:</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="clave" name="clave" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
                <button type="submit" class="btn btn-info btn-flat" name="edit2"><i class="fa fa-save"></i> Guardar la Nueva Contraseña </button>
                </form>
            </div>
        </div>
    </div>
</div>