    <!-- Edit -->
    <div class="modal fade" id="edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal" method="POST" action="<?php echo $modulo_edit;?>">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title"><b>Actualizar Informacion de: <span class="del_user_name"></span></b></h4>
                    </div>

                    <div class="modal-body">

                        <input type="hidden" id="userid" name="id">

                        <div class="form-group">
                            <label for="edit_username" class="col-sm-3 control-label">Usuario:</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit_username" name="username">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="edit_rol" class="col-sm-3 control-label">Rol</label>

                            <div class="col-sm-9">
                                <select class="form-control" name="rol_id" id="edit_rol" required>
                                    <option value="" selected>- Seleccionar -</option>
                                    <?php
                                    $sql = "SELECT * FROM roles";
                                    $query = $conn->query($sql);
                                    while ($prow = $query->fetch_assoc()) {
                                        echo "
                                        <option value='" . $prow['id'] . "'>" . $prow['rol_descrip'] . "</option>
                                        ";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="edit_empresa_id" class="col-sm-3 control-label">Empresa</label>

                            <div class="col-sm-9">
                                <select class="form-control"  id="edit_empresa_id"    name="empresa_id"  required>
                                    <option value="" selected>- Seleccionar -</option>
                                    <?php
                                    $sql = "SELECT * FROM empresas";
                                    $query = $conn->query($sql);
                                    while ($prow = $query->fetch_assoc()) {
                                        echo "<option value='" . $prow['id'] . "'>".$prow['descripcion'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="edit_sucursal_id" class="col-sm-3 control-label">Sucursal</label>

                            <div class="col-sm-9">
                                <select class="form-control"  id="edit_sucursal_id"    name="sucursal_id"  required>
                                    <option value="" selected>- Seleccionar -</option>
                                    <?php
                                    $sql = "SELECT * FROM sucursales";
                                    $query = $conn->query($sql);
                                    while ($prow = $query->fetch_assoc()) {
                                        echo "<option value='" . $prow['id'] . "'>".$prow['descripcion'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>






                        <div class="form-group">
                            <label for="edit_firstname" class="col-sm-3 control-label">Nombre:</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit_firstname" name="firstname">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="edit_lastname" class="col-sm-3 control-label">Apellidos:</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit_lastname" name="lastname">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
                        <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Actualizar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

