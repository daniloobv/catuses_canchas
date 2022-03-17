                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Foto_</th>
                      <th><?php echo $campo1; ?></th>
                      <th><?php echo $campo3; ?></th>
                      <th><?php echo $campo4; ?></th>


                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  while($row = $query->fetch_assoc()){  ?>
                     <tr>

                      <td><img src="<?php echo (!empty($row['photo'])) ? '../../images/' . $row['photo'] : '../../images/profile.jpg'; ?>" width="64px" height="64px">

                                          <a href="#edit_photo" data-toggle="modal" class="pull-right photo" data-id="<?php echo $row['userid']; ?>">

                        <span class="fa fa-edit">

                        </span>

                    </a>


                      </td>


                      <td><?php echo $row['username']; ?></td>

                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>






                      <td>

                        <div  class="btn-group-vertical">

                          <button style="margin-top: 0px;margin-bottom: 05px;" class="btn btn-success btn-sm edit " data-id="<?php echo $row['empid'];  ?>" onclick = "funcionX(<?php echo $row['empid']; ?>)"><i class="fa fa-edit"></i> Editar</button>

                          <button style="margin-top: 0px;margin-bottom: 05px;" class="btn btn-warning btn-sm edit2 " data-id="<?php echo $row['empid']; ?>" onclick = "funcionX_1(<?php echo $row['empid']; ?>)"><i class="fa fa-key"></i> Nueva Contraseña</button>

                          <button style="margin-top: 0px;margin-bottom: 05px;" class="btn btn-danger btn-sm delete " data-id="<?php echo $row['empid']; ?>" onclick = "funcionY(<?php echo $row['empid']; ?>)"><i class="fa fa-trash"></i> Eliminar</button>

                        </div>





                      </td>

                    </tr>

                  <?php  }  ?>
                </tbody>

              </table>