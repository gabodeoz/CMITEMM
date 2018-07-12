$(document).ready(function () {
    $("form").submit(function () {
        $.ajax($("form").attr('action'), {
            type: 'POST', // http method
            data: $("form").serialize(), // data to submit
            success: function (data, status) {
                $.notify('Success');
            },
            error: function (errorMessage) {
                $.notify('Error:'+ errorMessage);                
            }
        });
        return false;
    });
});


