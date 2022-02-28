   <script>
    $(function() {
      $('.edit').click(function(e) {
        e.preventDefault();
        $('#edit').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });

      $('.delete').click(function(e) {
        e.preventDefault();
        $('#delete').modal('show');
        var id = $(this).data('id');
        getRow(id);

      });


      $('.edit2').click(function(e) {
        e.preventDefault();
        $('#edit2').modal('show');
        var id = $(this).data('id');
        getRow(id);

      });




      $('.photo').click(function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        getRow(id);
      });


    });

    function getRow(id) {
      $.ajax({
        type: 'POST',
        url: 'index_03_row.php',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(response) {

          $('.del_user_name').html(response.firstname + ' ' + response.lastname);
          $('.user_id_photo').val(response.userid);
          $('#userid').val(response.userid);
          $('#userid1').val(response.userid);

                    //$('#name').html(response.firstname + ' ' + response.lastname);


                    $('#edit_username').val(response.username);
                    $('#edit_username1').val(response.username);
                    $('#edit_firstname').val(response.firstname);
                    $('#edit_lastname').val(response.lastname);


                    $('#edit_empresa_id').val(response.empresa_id);
                    $('#edit_sucursal_id').val(response.sucursal_id);

                    $('#edit_rol').val(response.rol_id);

                    $('#del_userid').val(response.userid);
                    $('#del_usuario').html(response.firstname + ' ' + response.lastname);
                  }
                });
    }
  </script>