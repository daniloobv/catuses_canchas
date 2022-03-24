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



<script>
  $(function() {
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      format: 'MM/DD/YYYY h:mm A'
    })

    $('#reservationtime2').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      format: 'MM/DD/YYYY h:mm A'
    })

    //Date range as a button
    $('#daterange-btn').daterangepicker({
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate: moment()
    },
    function(start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
    )

    $('.lecturaok').click(function(e) {
      e.preventDefault();
      $('#lecturaok').modal('show');
      var id = $(this).data('id');
      getRow1(id);
    });

    $('.lecturaver').click(function(e) {
      e.preventDefault();
      $('#lecturaver').modal('show');
      var id = $(this).data('id');
      getRow1(id);
    });
  });

</script>




<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        //format: 'L'
        format: 'DD-MM-YYYY'
      });

    $('#reservationdate11').datetimepicker({
        //format: 'L'
        format: 'DD-MM-YYYY'
      });





    $('#reservationdate1').datetimepicker({
        //format: 'L'
        format: 'DD-MM-YYYY'
      });


    $('#reservationdate1').datetimepicker({
        //format: 'L'
        format: 'DD-MM-YYYY'
      });


     //Date picker
     $('#reservationdate2').datetimepicker({
        //format: 'L'
        format: 'DD-MM-YYYY'
      });

             //Date picker
             $('#reservationdate3').datetimepicker({
        //format: 'L'
        format: 'DD-MM-YYYY'
      });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    $('#reservationdatetime2').datetimepicker({ icons: { time: 'far fa-clock' } });


    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
    )

   //Timepicker
   $('#timepicker').datetimepicker({
    format: 'LT'
  })

     //Timepicker
     $('#timepicker11').datetimepicker({
      format: 'LT'
    })

     $('#timepicker12').datetimepicker({
      format: 'LT'
    })


     $('#edit_timepicker11').datetimepicker({
      //sformat: 'LT'
      format: 'HH:mm'
    })

     $('#edit_timepicker12').datetimepicker({
      format: 'LT'
    })



     $('#timepicker2').datetimepicker({
      format: 'LT'
    })



    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })



</script>


<?php
include 'calendario0.php';
//include 'calendario1.php';
?>