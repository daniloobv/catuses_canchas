
<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Eliminando...</b></h4>
            </div>
            <div class="modal-body">
                       <form class="form-horizontal" method="POST" action="<?php echo $modulo_delete;?>">
                    <input type="hidden" class="user_id_photo" name="id">
                    <div class="text-center">
                        <p>ELIMINAR POSICIÓN</p>
                        <h2 id="userid" class=" del_user_name"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>


