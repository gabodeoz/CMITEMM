$(document).ready(function () {
    $("form").submit(function () {                
        $.ajax($(this).attr('action'), {
            type: 'POST', // http method
            data: $(this).serialize(), // data to submit
                  beforeSend:function(){ 
			$("#loading").show();
            },
            success: function (val) {
                if(val.response == 1){
                    $.notify("El registro fue exitoso", "success");
                }else{
                    $.notify("No se pudo generar el registro", "error");
                }
                $("#loading").hide();
            },
            error: function (errorMessage) {
                $("#loading").hide();
                $.notify('Error:'+ errorMessage,"error");                
            }
    });
    return true;
    });                  
});


