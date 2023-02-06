$('#btnIrRegistro').click(function() {
    $('#carruselLoginRegistro').carousel('next');
})
$('#btnIrLogin').click(function() {
    $('#carruselLoginRegistro').carousel('prev');
})
function previewImagen(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        document.getElementById('imgPreview').src = e.target.result;
      }
      reader.readAsDataURL(input.files[0]);
    }
}
$('#btnRegistro').click(function validacionesRegistro(e) {
    var error = 0;
    var nombre = $('#nombre').val().trim();
    var apellidoPaterno = $('#apellidoPaterno').val().trim();
    var apellidoMaterno = $('#apellidoMaterno').val().trim();
    var genero = $('#genero').val().trim();
    var fechaNacimiento = $('#fechaNacimiento').val().trim();
    var correo = $('#correo').val();
    var contrasena = $('#contrasena').val();
    var confirmarContrasena = $('#confirmarContrasena').val();

    !nombre ? ($('#nombre').addClass('is-invalid'), error++) : ($('#nombre').removeClass('is-invalid'));
    !apellidoPaterno ? ($('#apellidoPaterno').addClass('is-invalid'), error++) : ($('#apellidoPaterno').removeClass('is-invalid'));
    !apellidoMaterno ? ($('#apellidoMaterno').addClass('is-invalid'), error++) : ($('#apellidoMaterno').removeClass('is-invalid'));
    !genero ? ($('#genero').addClass('is-invalid'), error++) : ($('#genero').removeClass('is-invalid'));
    !fechaNacimiento ? ($('#fechaNacimiento').addClass('is-invalid'), error++) : ($('#fechaNacimiento').removeClass('is-invalid'));
    !correo ? ($('#correo').addClass('is-invalid'), error++) : ($('#correo').removeClass('is-invalid'));
    !contrasena ? ($('#contrasena').addClass('is-invalid'), error++) : ($('#contrasena').removeClass('is-invalid'));
    !confirmarContrasena ? ($('#confirmarContrasena').addClass('is-invalid'), error++) : confirmarContrasena != contrasena ? ($('#confirmarFeedback').text("Las contraseñas no coinciden"), $('#confirmarContrasena').addClass('is-invalid'), error++) : ($('#confirmarContrasena').removeClass('is-invalid'));

    if(error > 0) {
        e.preventDefault();
    }
})