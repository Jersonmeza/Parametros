function limpiar(){
    $('#id').val('');
    $('#nombre').val('');
    $('#valor').val('');
    $('#id').focus();
}

function guardar(){
   var id="";
   var nombre="";
   var valor="";
   var url="";

   id = $('#id').val();
   nombre = $('#nombre').val();
   valor = $('#valor').val();

   url = base_url + "/" + controller + "/guardar";
   
   $.ajax({
      'type': "POST",
      'url' : url,
      'data': {
         'id': id,
         'nombre': nombre,
         'valor': valor
      },
      'success': function(data){
          alert(data);
          limpiar();
      }
   });
}

function actualizar(){
    var id="";
    var nombre="";
    var valor="";
    var url="";
 
    id = $('#id').val();
    nombre = $('#nombre').val();
    valor = $('#valor').val();
 
    url = base_url + "/" + controller + "/actualizar";
    
    $.ajax({
       'type': "POST",
       'url' : url,
       'data': {
          'id': id,
          'nombre': nombre,
          'valor': valor
       },
       'success': function(data){
           alert(data);
           limpiar();
       }
    });
}

function eliminar(){
    var id="";
    var url="";
 
    id = $('#id').val();
 
    url = base_url + "/" + controller + "/eliminar";
    
    $.ajax({
       'type': "POST",
       'url' : url,
       'data': {
          'id': id
       },
       'success': function(data){
           alert(data);
           limpiar();
       }
    });
}