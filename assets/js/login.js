$(document).ready(function() {
    $("#login").submit(function(){        
         $.ajax({
      type: "POST",
      dataType:"JSON",
      url: $(this).attr('action'), //Relative or absolute path to response.php file
      data: $(this).serialize(),
      success: function(value) {       
          if (value.response ==1)
              window.location ='alta-usuario';
          else
          $.notify("Usuario ó contraseña no validos", "warn");
          console.log(value);    
      }
      });
        return false;
    });
});  
/*
   <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css"/>        
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>        
         <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script> -->
         
         
          $.ajax({
      type: "POST",
      dataType: "json",
      url: $(this).attr('action'), //Relative or absolute path to response.php file
      data: $(this).serialize(),
      success: function(data) {
        //$.notify(response, "success");
        alert("Returned json: " + data["response"]);
      }
     /* ,error: function (errorMessage) {
              $.notify('Error:'+ errorMessage,"error");                
       }*/       
   // });
                