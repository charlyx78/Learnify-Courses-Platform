function previewImagen(input, contenedor) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        var contenedorImagen = contenedor;
        contenedorImagen.style.backgroundImage = 'url(' + e.target.result + ')';
        contenedorImagen.style.backgroundSize = 'cover';
        contenedorImagen.style.backgroundPosition = 'center center';
        contenedorImagen.style.backgroundRepeat = 'no-repeat';
        }
        reader.readAsDataURL(input.files[0]);
    }
}
const input = document.getElementById('inputVideoPromo');
const videoPreview = document.querySelector('.videopromo-preview');

input.addEventListener('change', () => {
  const file = input.files[0];
  const url = URL.createObjectURL(file);
  videoPreview.src = url;
});