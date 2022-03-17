<script>


  function funcionX(valor){
    //alert(valor);
    $('#modal-edit').modal('show');
    var id = valor;
    getRow(id);
  }

  function funcionX_1(valor){
    //alert(valor);
    $('#edit2').modal('show');
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

        $('.empid').val(response.empid);//id del registro que se desea editar o eliminar
        $('.user_id_photo').val(response.empid);

        $('.employee_id').html(response.nombreempleado);
        $('.del_employee_name').html(response.username);

        $('#employee_name').html(response.username);

        $('#edit_username').val(response.username);
        $('#edit_firstname').val(response.firstname );
        $('#edit_lastname').val(response.lastname);
        $('#edit_lastname').val(response.lastname);

        $('#edit_rol_id').val(response.rol_id);




      }
    });
  }
</script>
