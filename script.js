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
        var contenedorImagen = document.getElementById('imgPreview')
        contenedorImagen.style.backgroundImage = 'url(' + e.target.result + ')';
        contenedorImagen.style.backgroundSize = 'cover';
        contenedorImagen.style.backgroundPosition = 'center center';
        contenedorImagen.style.backgroundRepeat = 'no-repeat';
      }
      reader.readAsDataURL(input.files[0]);
    }
}

$('#formLogin').submit(function validacionesLogin(e) {
    var error = 0;
    var correo = $('#correoLogin').val().trim();
    var contrasena = $('#contrasenaLogin').val().trim();
    !correo ? ($('#correoLogin').addClass('is-invalid'), error++) : $('#correoLogin').removeClass('is-invalid');
    !contrasena ? ($('#contrasenaLogin').addClass('is-invalid'), error++) : $('#contrasenaLogin').removeClass('is-invalid');
    if(error > 0) {
        e.preventDefault();
    }
})
const formRegistro = document.getElementById('formRegistro')
$('#formRegistro').submit(function validacionesRegistro(e) {
    var error = 0;
    var nombre = $('#nombre').val().trim();
    var apellidoPaterno = $('#apellidoPaterno').val().trim();
    var apellidoMaterno = $('#apellidoMaterno').val().trim();
    var genero = $('#genero').val().trim();
    var fechaNacimiento = $('#fechaNacimiento').val().trim();
    var correo = $('#correo').val();
    var contrasena = $('#contrasena').val();
    var confirmarContrasena = $('#confirmarContrasena').val();
    const tipoCuenta = formRegistro.elements['tipoCuenta'];
    !nombre ? ($('#nombre').addClass('is-invalid'), error++) : ($('#nombre').removeClass('is-invalid'));
    !apellidoPaterno ? ($('#apellidoPaterno').addClass('is-invalid'), error++) : ($('#apellidoPaterno').removeClass('is-invalid'));
    !apellidoMaterno ? ($('#apellidoMaterno').addClass('is-invalid'), error++) : ($('#apellidoMaterno').removeClass('is-invalid'));
    !genero ? ($('#genero').addClass('is-invalid'), error++) : ($('#genero').removeClass('is-invalid'));
    !fechaNacimiento ? ($('#fechaNacimiento').addClass('is-invalid'), error++) : ($('#fechaNacimiento').removeClass('is-invalid'));
    !correo ? ($('#correo').addClass('is-invalid'), error++) : ($('#correo').removeClass('is-invalid'));
    !contrasena ? ($('#contrasena').addClass('is-invalid'), error++) : ($('#contrasena').removeClass('is-invalid'));
    !confirmarContrasena ? ($('#confirmarContrasena').addClass('is-invalid'), error++) : confirmarContrasena != contrasena ? ($('#confirmarFeedback').text("Las contraseñas no coinciden"), $('#confirmarContrasena').addClass('is-invalid'), error++) : ($('#confirmarContrasena').removeClass('is-invalid'));
    let tipoCuentaSeleccionada = 0;
    for(let i = 0; i < tipoCuenta.length; i++) {
        if(tipoCuenta[i].checked) {
            tipoCuentaSeleccionada++;

        }
    }
    tipoCuentaSeleccionada == 0 ? ($('#tipoCuentaEstudiante').addClass('is-invalid'), $('#tipoCuentaMaestro').addClass('is-invalid'), error++) : ($('#tipoCuentaEstudiante').removeClass('is-invalid'), $('#tipoCuentaMaestro').removeClass('is-invalid'));
    if(error > 0) {
        e.preventDefault();
    }
})