<script>


  function funcionX(valor){
    //alert(valor);
    $('#modal-edit').modal('show');
    var id = valor;
    getRow(id);
  }

  function funcion_abonar(valor){
    //alert(valor);
    $('#modal-abonar').modal('show');
    var id = valor;
    getRow(id);
    getRow_2(id);
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
    //getRow_2(id);

  }

  function funcion_pagar(valor){
    //alert(valor);
    $('#modal-pagar').modal('show');
    var id = valor;
    getRow(id);
    getRow_2(id);
    //getRow_2(id);

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

    $('.abonar').click(function(e){
      e.preventDefault();
      $('#modal-abonar').modal('show');
      var id = $(this).data('id');
    // alert(id);
    getRow(id);
    getRow_2(id);
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
      getRow_2(id);
    });

    $('.pagar').click(function(e){
      e.preventDefault();
      $('#modal-pagar').modal('show');
      var id = $(this).data('id');
      getRow(id);
      getRow_2(id);
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
        $('.employee_id').html(response.empid);


        const formatter = new Intl.NumberFormat('en-US', {
          //style: 'currency',
          //currency: 'USD',
          minimumFractionDigits: 2
        })
        let num = response.subTotalx - response.totalAbonado;
        $('#edit_monto').val(formatter.format(num));
        $('#edit_monto_p').val(formatter.format(num));
        $('#edit_monto_a').val(formatter.format(num));
        //$('#edit_monto').val(formatter.format(num));
        $('#edit_descripcion').val(response.descripcion);



      }
    });
  }


  function getRow_2(id){
    var tabla = '<?php echo $tabla; ?>';
    $.ajax({
      type: 'POST',
      url: 'index_02_data_2.php',
      data: {id:id,tabla:tabla},
      dataType: 'json',
      success: function(response){

        const formatter = new Intl.NumberFormat('en-US', {
        //style: 'currency',
        //currency: 'USD',
        minimumFractionDigits: 2
        })
        let num = response.subTotalx - response.totalAbonado;
        $('#edit_monto').val(formatter.format(num));
        $('#edit_monto_p').val(formatter.format(num));
        $('#edit_monto_a').val(formatter.format(num));
        //$('#edit_monto').val(formatter.format(num));
        $('#edit_descripcion').val(response.descripcion);

      }
    });
  }

</script>
