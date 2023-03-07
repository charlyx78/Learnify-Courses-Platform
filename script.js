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
    if(errorLogin == true) {
        e.preventDefault();
        $('.toast-body').text(errorMensajeLogin);
        $('.toast').toast("show");
    }
})
$('#contrasena').on('input', function validacionContrasena() {
    var contrasena = $(this).val();
    var error = '<i class="bi bi-x-lg icono-error"></i>';
    var success = '<i class="bi bi-check-lg icono-success"></i>';
    $('#item-validacion-caracteres').find('i').remove();
    $('#item-validacion-mayuscula').find('i').remove();
    $('#item-validacion-caracter-especial').find('i').remove();
    $('#item-validacion-numero').find('i').remove();
    contrasena.length < 8 ? $('#item-validacion-caracteres').append(error) : $('#item-validacion-caracteres').append(success);
    !/[A-Z]/.test(contrasena) ? $('#item-validacion-mayuscula').append(error) : $('#item-validacion-mayuscula').append(success);
    !/[^A-Za-z0-9]/.test(contrasena) ? $('#item-validacion-caracter-especial').append(error) : $('#item-validacion-caracter-especial').append(success);
    !/\d/.test(contrasena) ? $('#item-validacion-numero').append(error) : $('#item-validacion-numero').append(success);
})
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
    let tipoCuentaSeleccionada = 0;
    !nombre ? ($('#nombre').addClass('is-invalid'), error++) : ($('#nombre').removeClass('is-invalid'));
    !apellidoPaterno ? ($('#apellidoPaterno').addClass('is-invalid'), error++) : ($('#apellidoPaterno').removeClass('is-invalid'));
    !apellidoMaterno ? ($('#apellidoMaterno').addClass('is-invalid'), error++) : ($('#apellidoMaterno').removeClass('is-invalid'));
    !genero ? ($('#genero').addClass('is-invalid'), error++) : ($('#genero').removeClass('is-invalid'));
    !fechaNacimiento ? ($('#fechaNacimiento').addClass('is-invalid'), error++) : ($('#fechaNacimiento').removeClass('is-invalid'));
    !correo ? ($('#correo').addClass('is-invalid'), error++) : ($('#correo').removeClass('is-invalid'));
    !contrasena ? ($('#contrasena').addClass('is-invalid'), error++) : ($('#contrasena').removeClass('is-invalid'));
    !confirmarContrasena ? ($('#confirmarContrasena').addClass('is-invalid'), error++) : confirmarContrasena != contrasena ? ($('#confirmarFeedback').text("Las contraseñas no coinciden"), $('#confirmarContrasena').addClass('is-invalid'), error++) : ($('#confirmarContrasena').removeClass('is-invalid'));
    for(let i = 0; i < tipoCuenta.length; i++) {
        if(tipoCuenta[i].checked) {
            tipoCuentaSeleccionada++;
        }
    }
    tipoCuentaSeleccionada == 0 ? ($('#tipoCuentaEstudiante').addClass('is-invalid'), $('#tipoCuentaMaestro').addClass('is-invalid'), error++) : ($('#tipoCuentaEstudiante').removeClass('is-invalid'), $('#tipoCuentaMaestro').removeClass('is-invalid'));
    var contrasenaValida = true;
    if ($('#item-validacion-caracteres i.bi-x-lg').length > 0 ||
        $('#item-validacion-mayuscula i.bi-x-lg').length > 0 ||
        $('#item-validacion-caracter-especial i.bi-x-lg').length > 0 ||
        $('#item-validacion-numero i.bi-x-lg').length > 0) {
        contrasenaValida = false;
    }
    if(error > 0 || !contrasenaValida) {
        e.preventDefault();
    }
    if (!contrasenaValida) {
    }
    if(errorRegistro == true) {
        e.preventDefault();
        $('.toast-body').text(errorMensajeRegistro);
        $('.toast').toast("show");
    }
})
function removerError(e) {
    var id = '#' + e.target.id;
    if($(id).find('.is-invalid')) {
        $(id).removeClass('is-invalid');
    }
}

const navItems = $('.item-navegacion-home');
navItems.on('click', function() {
    navItems.removeClass('item-active');  
    $(this).addClass('item-active');
});

$('document').ready(function(){
    var maxTituloCurso = 40;
    var maxTestimonial = 144;
    var titulosCurso = document.querySelectorAll('.titulo-curso')
    var testimoniales = document.querySelectorAll('.texto-testimonial')
    titulosCurso.forEach((tituloCurso) => {
        if(tituloCurso.textContent.length > maxTituloCurso) {
            tituloCurso.textContent = tituloCurso.textContent.substring(0, maxTituloCurso) + "...";
        }
        else {
            tituloCurso.textContent = tituloCurso.textContent;
        }

    });
    testimoniales.forEach((testimonial) => {
        if(testimonial.textContent.length > maxTestimonial) {
            testimonial.textContent = testimonial.textContent.substring(0, maxTestimonial) + "...";
        }
        else {
            testimonial.textContent = testimonial.textContent;
        }
    });
});

