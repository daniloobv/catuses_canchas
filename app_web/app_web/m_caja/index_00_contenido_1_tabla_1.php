                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><?php echo $campo0; ?></th>
                      <th><?php echo $campo1; ?></th>
                      <th><?php echo $campo1_1; ?></th>
                      <th><?php echo $campo2; ?></th>
                      <th><?php echo $campo3; ?></th>
                      <th><?php echo $campo4; ?></th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  while($row = $query->fetch_assoc()){  ?>
                      <tr>
                        <td><?php echo $row[$dato0]; ?></td>
                        <td><?php echo $row[$dato1]; ?></td>

 <?php

 if($row[$dato1_1]==1){
 $status = '<span class="badge badge-danger">SIN PAGAR</span>' ;
}

 if($row[$dato1_1]==2){
 $status = '<span class="badge badge-warning">ABONOS</span>' ;
}

 if($row[$dato1_1]==3){
 $status = '<span class="badge badge-success">PAGADO</span>' ;
}
                        ?>



                        <td><?php echo $status; ?></td>
                        <td><?php echo $row[$dato2]; ?></td>
                        <td><?php echo $row[$dato3]; ?></td>
                        <td><?php echo $row[$dato3]; ?></td>
                        
                        <td>

                          <div  class="btn-group">

                            <button style="margin: 3px" class="btn bg-maroon btn-sm abonar " data-id="<?php echo $row['idr'];  ?>" onclick = "funcion_abonar(<?php echo $row['idr']; ?>)"><i class="fas fa-dollar-sign"></i> Abonar</button>

                              <button style="margin: 3px" class="btn btn-warning btn-sm edit " data-id="<?php echo $row['idr'];  ?>" onclick = "funcion_editar(<?php echo $row['idr']; ?>)"><i class="fa fa-edit"></i> Editar</button>


                            <button style="margin: 3px" class="btn btn-danger btn-sm delete " data-idr="<?php echo $row['idr']; ?>" onclick = "funcionY(<?php echo $row['idr']; ?>)"><i class="fa fa-trash"></i> Eliminar</button>

                          </div>

                        </td>

                      </tr>
                    <?php  }  ?>
                  </tbody>

                </table>