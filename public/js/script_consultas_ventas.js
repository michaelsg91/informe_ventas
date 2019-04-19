$(document).ready(function() {

  // Script para poner en 0 valor de dropdowns
  $("#cliente_id").change(function(){
    $("#producto_id").val(0);
    $("#proveedor_id").val(0);
  });
  $("#producto_id").change(function(){
    $("#cliente_id").val(0);
    $("#proveedor_id").val(0);
  });
  $("#proveedor_id").change(function(){
    $("#producto_id").val(0);
    $("#cliente_id").val(0);
  });

});
