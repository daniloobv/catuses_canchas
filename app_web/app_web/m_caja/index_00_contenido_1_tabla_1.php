                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><?php echo $campo0; ?></th>
                      <th><?php echo $campo1; ?></th>
                      <th><?php echo $campo1_1; ?></th>
                      <th><?php echo $campo2; ?></th>
                      <th><?php echo $campo3; ?></th>
                      <th><?php echo $campo4; ?></th>

                      <th><?php echo $campo1_2; ?></th>
                      <th><?php echo $campo1_3; ?></th>
                      <th><?php echo $campo1_4; ?></th>
                      <th><?php echo $campo1_5; ?></th>
                      <th><?php echo $campo1_6; ?></th>

                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  while($row = $query->fetch_assoc()){  ?>
                      <tr>


                       <?php

                       $CONSULTA = "SELECT * FROM cuentas WHERE eventoscalendar_id = ".$row['idr'];
                       $EJECUTAR = $conn->query($CONSULTA);
                       $RESPUESTA = $EJECUTAR->fetch_assoc();

                       $precio =  $RESPUESTA['precio'];
                       $descuento =  $RESPUESTA['descuento'];
                       $sub_total =  $RESPUESTA['sub_total'];

                       // $CONSULTA2 = "SELECT IfNull(sum(cuentas_abonos.monto),0) as TotalAbono FROM eventoscalendar inner join cuentas on cuentas.eventoscalendar_id = ".$row['idr']." inner join cuentas_abonos on cuentas_abonos.cuenta_id = cuentas.id";

                       $CONSULTA2 = "SELECT
                       cuentas.id as cuenta_idx,
                       IfNull(sum(cuentas_abonos.monto),0) as totalAbonado
                       FROM
                       eventoscalendar
                       INNER JOIN cuentas on cuentas.eventoscalendar_id = eventoscalendar.id
                       INNER JOIN cuentas_abonos on cuentas_abonos.cuenta_id = cuentas.id
                       WHERE eventoscalendar.id = ".$row['idr'];

                       $EJECUTAR2 = $conn->query($CONSULTA2);
                       $RESPUESTA2 = $EJECUTAR2->fetch_assoc();
                       $abono=$RESPUESTA2['totalAbonado'];

                       ?>



                       <td><?php echo $row[$dato0]; ?></td>
                       <td><?php echo $row[$dato1]; ?></td>

                       <?php
                       if((($sub_total-$abono)==0) && ($sub_total == $abono ) ){
                         $status = '<span class="badge badge-success">PAGADO</span>' ;
                       }
                       else{
                        if (($sub_total-$abono )<$sub_total) {
                          $status = '<span class="badge badge-warning">ABONADO</span>' ;
                        }
                        else{
                          $status = '<span class="badge badge-danger">SIN PAGAR</span>' ;
                        }

                      }
                      ?>

                      <td><?php echo $status; ?></td>



                      <td><?php echo $row[$dato2]; //CLIENTE ?></td>
                      <td><?php echo $row[$dato3]; //FECHA INICIAL ?></td>
                      <td><?php echo $row[$dato3]; //FECHA FINAL ?></td>



                      <td><?php echo number_format($precio,2); ?></td>
                      <td><?php echo number_format($descuento,2); ?></td>
                      <td><?php echo number_format($sub_total,2); ?></td>
                      <td><?php echo number_format($abono,2); ?></td>
                      <td><?php echo number_format(($sub_total-$abono),2); ?></td>

                      <td>

                        <div  class="btn-group">

                          <button style="margin: 3px" class="btn bg-maroon btn-sm abonar " data-id="<?php echo $row['idr'];  ?>" onclick = "funcion_abonar(<?php echo $row['idr']; ?>)"><i class="fas fa-dollar-sign"></i>Abonar</button>

                          <button style="margin: 3px" class="btn btn-success btn-sm pagar " data-id="<?php echo $row['idr'];  ?>" onclick = "funcion_pagar(<?php echo $row['idr']; ?>)"><i class="far fa-money-bill-alt"></i>Pagar</button>

                          <button style="margin: 3px" class="btn btn-warning btn-sm edit " data-id="<?php echo $row['idr'];  ?>" onclick = "funcionX(<?php echo $row['idr']; ?>)"><i class="fa fa-edit"></i>Editar</button>


                          <button style="margin: 3px" class="btn btn-danger btn-sm delete " data-idr="<?php echo $row['idr']; ?>" onclick = "funcionY(<?php echo $row['idr']; ?>)"><i class="fa fa-trash"></i>Eliminar</button>

                        </div>

                      </td>

                    </tr>
                  <?php  }  ?>
                </tbody>

              </table>