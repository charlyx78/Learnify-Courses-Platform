$(document).ready(function() {
    $('#botonVerAlumnos').on("click",function(){
        e.preventDefault();
        $.ajax({
            method: "post",
            url: "../Programa/mostrarAlumnos.php",
            data: {
                varTest: $("#varTest").val()
            },
            dataType: "text",
            success: function (data) {
                $("#varTest").val(""); 
                console.log("le pique jaja")
            }
        });
    });


});