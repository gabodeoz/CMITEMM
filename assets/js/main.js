$(document).ready(function () {
    $("form").submit(function () {
        $.ajax($("form").attr('action'), {
            type: 'POST', // http method
            data: $("form").serialize(), // data to submit
            success: function (status) {                
                $.notify("Access granted", "success");
            },
            error: function (errorMessage) {
                $.notify('Error:'+ errorMessage,"error");                
            }
        });
        return false;
    });
});


