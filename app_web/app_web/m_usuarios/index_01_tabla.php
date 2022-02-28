   <table id="example1" class="table table-bordered">
    <thead>
        <th style=" text-align: center; vertical-align: middle;" class="hidden"></th>
        <!-- <th style=" text-align: center; vertical-align: middle;">ID Usuario</th> -->
        <th style=" text-align: center; vertical-align: middle;">Foto</th>
        <th style=" text-align: center; vertical-align: middle;">Nombre y Rol</th>
        <th style=" text-align: center; vertical-align: middle;">Acción</th>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT *,
        admin.id AS userid,
        empresas.descripcion AS empresa_descripcion
        FROM admin
        LEFT JOIN roles ON roles.id=admin.rol_id
        LEFT JOIN empresas ON empresas.id=admin.empresa_id
        ";
        $query = $conn->query($sql);
        while ($row = $query->fetch_assoc()) {
            ?>
            <tr>
                <td style="vertical-align: middle;" class="hidden"></td>
                <!-- <td style="vertical-align: middle;"><?php //echo $row['userid']; ?></td> -->
                <td style="text-align: center; vertical-align: middle;">
                    <img src="<?php echo (!empty($row['photo'])) ? '../../images/' . $row['photo'] : '../../images/profile.jpg'; ?>" width="60px" height="60px">
                    <a href="#edit_photo" data-toggle="modal" class="pull-right photo" data-id="<?php echo $row['userid']; ?>">
                        <span class="fa fa-edit">
                        </span>
                    </a>
                </td>

                <td style="vertical-align: middle;"><?php echo $row['firstname'] . ' ' . $row['lastname'] .'<br><br><strong>('. $row['rol_descrip'].')</strong>'  .'<br><br><strong>Empresa: ('. $row['empresa_descripcion'].')</strong>' ; ?></td>

                <td style=" display: flex;  justify-content: center;  align-items: center;">
                    <div class="btn-group-vertical">

                        <button style="margin-top: 0px;margin-bottom: 05px;" class="btn btn-success btn-sm edit  " data-id="<?php echo $row['userid']; ?>"><i class="fa fa-edit"></i> Editar</button>
                        <button style="margin-top: 0px;margin-bottom: 05px;" class="btn btn-danger btn-sm delete " data-id="<?php echo $row['userid']; ?>"><i class="fa fa-trash"></i> Eliminar</button>
                        <button style="margin-top: 0px;margin-bottom: 05px;" class="btn btn-warning btn-sm edit2 " data-id="<?php echo $row['userid']; ?>"><i class="fa fa-key"></i> Nueva <br> Contraseña</button>

                          <a href="" class="btn btn-primary btn-sm " onclick="alert('Funcion en proceso de desarrollo')" style="margin-top: 0px;margin-bottom: 17px;" ><i class="fas fa-shield-alt"></i> Permisos </a>

                       <!--  <a href="permisos.php?user=<?php //echo $row['userid']; ?>" class="btn btn-primary btn-sm " style="margin-top: 0px;margin-bottom: 17px;" ><i class="fas fa-shield-alt"></i> Permisos </a> -->


                    </div>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>