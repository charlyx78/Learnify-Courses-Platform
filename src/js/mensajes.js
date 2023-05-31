$(document).ready(function() {
    $('#enviarMensaje').on("click",function(){
        $.ajax({
            url: "../Programa/enviarMensaje.php",
            method: "POST",
            data: {
                remitente: $("#remitente").val(),
                destinatario: $("#destinatario").val(),
                mensaje: $("#mensaje").val()
            },
            dataType: "text",
            success:function(data){
                $("#mensaje").val(""); 
            }
        })
    })
    setInterval(function(){
        $.ajax({
            url: "../Programa/chatTiempoReal.php",
            method: "POST",
            data: {
                remitente: $("#remitente").val(),
                destinatario: $("#destinatario").val()
            },
            dataType: "text",
            success: function(data) {
                $("#msjBody").html(data);
            }
        })
    }, 700);
})
