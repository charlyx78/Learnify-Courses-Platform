$(document).ready(function() {
    $('.boton-eliminar-categoria').click(function(){
        valor = $(this).data('valor');
        $.ajax({
            url: '../Programa/registroCategoria.php',
            method: 'POST',
            data: { valor: valor },
            success: function(response) {
                location.reload();
            },
            error: function(xhr, status, error) {
              console.log(error);
            }
        });
    })
});