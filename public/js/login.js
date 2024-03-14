$(document).ready(function() {
    
});
$("#btnIngresar").on("click", function(e) {
    e.preventDefault();
    var usuario = {
        email: $("#email").val(),
        password: $("#password").val()
    }
    $.ajax({
        url: "api/auth/login",
        type: "POST",
        dataType: "JSON",
        data: usuario,
        success: function(response) {
            console.log(response);
            Swal.fire({
            icon: 'success',
            title: 'usuario Logueado con exito',
            showConfirmButton: false,
            timer: 3000
            })
            window.location.href = `/`;
        },
        error: function(error) {
            console.log(error);
        }
    });
});