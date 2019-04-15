$(document).ready(function() {
    $("#form_create_venta #proveedor_id").change(function() {
      var proveedor_id=$(this).val();
      var producto_id=$("#form_create_venta #producto_id").val();

      $.ajax({
        url:'/getValor/'+producto_id,
        type:'get',
        dataType:'json',
        success:function(response){

          var valor=response.disprovet;
          $("#form_create_venta #valor_unitario").val(valor);
        }


      });

    });

});
