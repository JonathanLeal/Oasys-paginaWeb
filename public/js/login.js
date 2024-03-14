$(document).ready(function() {
    
});
$("#btnIngresar").on("click", function(e) {
    e.preventDefault();
    var usuario = {
        usuario: $("#usuario").val(),
        email: $("email").val(),
        password: $("password").val()
    }
    $.ajax({
        url: "api/register",
        type: "POST",
        dataType: "JSON",
        data: usuario,
        success: function(response) {
            console.log(response);
            Swal.fire({
            icon: 'success',
            title: 'usuario guardado con exito',
            showConfirmButton: false,
            timer: 3000
            })
        },
        error: function(error) {
            console.log(error);
        }
    });
});