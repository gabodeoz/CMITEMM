$(document).ready(function () {
    $("#insert").submit(function () {                
        $.ajax($(this).attr('action'), {
            type: 'POST', // http method
            data: $(this).serialize(), // data to submit
                  beforeSend:function(){ 
			$("#loading").show();
            },
            success: function (val) {
                if(val.response == 1){
                    $.notify(val.message, "success");
                }else{
                    $.notify(val.message, "error");
                }
                 var str = JSON.stringify(val); 
                 console.log(str);  
                $("#loading").hide();
            },
            error: function (errorMessage) {
                $("#loading").hide();
                $.notify('Error:'+ errorMessage,"error");                
            }
    });
    return false;
    });                  
});


