<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Agregar Usuario N</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" autocomplete="off" action="<?php echo $modulo_add;?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">Usuario:</label>

                        <div class="col-sm-9">
                            <input type="text" autocomplete="new-text" class="form-control" id="username" name="username" required placeholder="Nombre de usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="clave" class="col-sm-3 control-label">Contraseña:</label>

                        <div class="col-sm-9">
                            <input type="password" autocomplete="new-password" class="form-control" id="clave" name="clave" required placeholder="su contraseña">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="rol_id" class="col-sm-3 control-label">Rol</label>

                        <div class="col-sm-9">
                            <select class="form-control" name="rol_id" id="rol_id" required>
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
                            <label for="empresa_id" class="col-sm-3 control-label">Empresa</label>

                            <div class="col-sm-9">
                                <select class="form-control"  id="empresa_id"    name="empresa_id"  required>
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
                            <label for="sucursal_id" class="col-sm-3 control-label">Sucursal</label>

                            <div class="col-sm-9">
                                <select class="form-control"  id="sucursal_id"    name="sucursal_id"  required>
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
                        <label for="firstname" class="col-sm-3 control-label">Nombre:</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">Apellidos:</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">Foto</label>

                        <div class="col-sm-9">
                            <input type="file" name="photo" id="photo">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>