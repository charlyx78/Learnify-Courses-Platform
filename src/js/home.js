document.getElementById("btnVerCursos").addEventListener("click", function() {
    document.getElementById("contenedorCursos").scrollIntoView({ behavior: "smooth" });
  });

  $('#btnBusqAvan').click(function(e) {
    e.preventDefault();
    var buscadorCursos = document.querySelector('.buscador-cursos');
    if (buscadorCursos.style.display === "none") {
      $('.buscador-cursos').show("slow")
    } else {
      $('.buscador-cursos').hide("slow")
    }
  })