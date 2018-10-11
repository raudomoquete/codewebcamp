$(document).ready(function () {
      $('.sidebar-menu').tree()

      $('#registros').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
        'language'    : {
          paginate: {
            next: 'Siguiente',
            previous: 'Anterior',
            last: 'Ultimo',
            first: 'Primero'
          },
          info: 'Mostrando _START_  a _END_ de _TOTAL_ resultados',
          search: 'Buscar: '
        }
    });

    $('#crear_registro_admin').attr('disabled', true);
     
    $('#repetir_password').on('input', function() { //si quieres q cambie el color luego de escribir cambiar input por blur
        var password_nuevo = $('#password').val();

         if ($(this).val() == password_nuevo ) {
              $('#resultado_password').text('Correcto');
              $('#resultado_password').parents('.form-group').addClass('has-success').removeClass('has-error');
              $('input#password').parents('form-group').addClass('has-success').removeClass('has-error');
              $('#crear_registro_admin').attr('disabled', false);
         } else {
              $('#resultado_password').text('No son iguales!');
              $('#resultado_password').parents('.form-group').addClass('has-error').removeClass('has-success');
              $('input#password').parents('form-group').addClass('has-error').removeClass('has-success');
         }
    });

    
    //Date picker
    $('#fecha').datepicker({
      autoclose: true
    });

    $('.seleccionar').select2();

    $('.timepicker').timepicker({
      showInputs: false
    })

  })