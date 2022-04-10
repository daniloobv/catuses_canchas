                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><?php echo $campo0; ?></th>
                      <th><?php echo $campo1; ?></th>
                      <th><?php echo $campo2; ?></th>
                      <th><?php echo $campo3; ?></th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  while($row = $query->fetch_assoc()){  ?>
                      <tr>
                        <td><?php echo $row[$dato0]; ?></td>
                        <td><?php echo $row[$dato1]; ?></td>
                        <td><?php echo $row[$dato2]; ?></td>
                        <td><?php echo number_format($row[$dato3],2); ?></td>
                        
                        <td>

                          <div  class="btn-group">

                                <button style="margin: 3px" class="btn btn-success btn-sm edit " data-id="<?php echo $row['idr'];  ?>" onclick = "funcionX(<?php echo $row['idr']; ?>)"><i class="fa fa-edit"></i> Editar</button>

                               <!--   <button style="margin: 3px" class="btn btn-primary btn-sm edit2 " data-id="<?php //echo $row['idr'];  ?>" onclick = "funcionS(<?php //echo $row['idr']; ?>)"><i class="fa fa-paper-plane"></i> Test Correo </button> -->

                            <button style="margin: 3px" class="btn btn-danger btn-sm delete " data-idr="<?php echo $row['idr']; ?>" onclick = "funcionY(<?php echo $row['idr']; ?>)"><i class="fa fa-trash"></i> Eliminar</button>

                          </div>

                        </td>

                      </tr>
                    <?php  }  ?>
                  </tbody>

                </table>