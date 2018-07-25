
var listUsuarios;
  $(document).ready(function() {      
        listUsuarios=$('#table-usuarios').dataTable({
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
        "language": {"url": "spanish.json" }});   
        listUsuarios.removeClass( 'display' ).addClass('table table-striped table-bordered');         
        loadList();
    }); 
    
    function loadList(){
           $.ajax({
            type:"post",
            url:"%action%",            
            dataType:"JSON",
            beforeSend: function(){
                $('#loading').show();							
                },
            success:function(result){
                listUsuarios.fnClearTable();                
                for(var i = 0; i <=result.data.length; i++) { 
                    listUsuarios.fnAddData(result.data[i]);
                }
                $('#loading').hide();
            }
         });
    }


