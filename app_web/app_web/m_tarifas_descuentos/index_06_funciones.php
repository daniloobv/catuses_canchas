<script>


  function funcionX(valor){
    //alert(valor);
    $('#modal-edit').modal('show');
    var id = valor;
    getRow(id);
  }


    function funcionS(valor){
    //alert(valor);
    $('#modal-editx').modal('show');
    var id = valor;
    getRow(id);
  }



  function funcionA(valor){
    //alert(valor);
    $('#modal-abonar').modal('show');
    var id = valor;
    getRow(id);

  }

  function funcionY(valor){
    //alert(valor);
    $('#modal-delete').modal('show');
    var id = valor;
    getRow(id);

  }


  $(function(){
    $('.edit').click(function(e){
      e.preventDefault();
      $('#modal-edit').modal('show');
      var id = $(this).data('id');

    // alert(id);

    getRow(id);
  });

     $('.editx').click(function(e){
      e.preventDefault();
      $('#modal-edit2').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $('.delete').click(function(e){
      e.preventDefault();
      $('#modal-delete').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $('.abonar').click(function(e){
      e.preventDefault();
      $('#modal-abonar').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $('.photo').click(function(e){
      e.preventDefault();
      var id = $(this).data('id');
      getRow(id);
    });

  });

  function getRow(id){
    var tabla = '<?php echo $tabla; ?>';
    $.ajax({
      type: 'POST',
      url: 'index_02_data.php',
      data: {id:id,tabla:tabla},
      dataType: 'json',
      success: function(response){
        $('.empid').val(response.empid);
        $('.employee_id').html(response.nombreempleado);
        $('.del_employee_name').html(response.nombre);
        $('#edit_nombre').val(response.nombre);
        $('#edit_rtn_dni').val(response.rtn_dni);
        $('#edit_cliente_tipo_id').val(response.cliente_tipo_id);
        $('#edit_telefono').val(response.telefono);
        $('#edit_direccion').val(response.direccion);
        $('#edit_email').val(response.correo);

        $('#edit_nombre2').val(response.nombre);
        $('#edit_rtn_dni2').val(response.rtn_dni);
        $('#edit_cliente_tipo_id2').val(response.cliente_tipo_id);
        $('#edit_telefono2').val(response.telefono);
        $('#edit_direccion2').val(response.direccion);
        $('#edit_email2').val(response.correo);
      }
    });
  }
</script>
