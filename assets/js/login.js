$(document).ready(function () {
    $("#login").submit(function () {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $("#loading").show();
            },
            success: function (value) {
                if (value.response == 1) {
                    window.location = '%VIEW_HOME%';
                    console.log(value.response);
                } else
                    $.notify("Usuario ó contraseña no validos", "warn");
                $("#loading").hide();
            }
        });
        return false;
    });
});      
