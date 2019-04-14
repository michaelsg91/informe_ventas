$(document).ready(function() {
    $("#form_create_venta #proveedor_id").change(function() {
      var proveedor_id=$(this).val();
      var producto_id=$("#form_create_venta #producto_id").val();

      $.get("/valor",{proveedor_id:proveedor_id}).done(function(data){
      $("#form_create_venta #valor_unitario").val(data);
      });



    });

});


//
// $("#form_create_venta #proveedor_id").change(function(){
//   var proveedor_id=$(this).val();
//   var producto_id=$("#form_create_venta #producto_id").val();
//   $.ajax({
//     type:'get',
//     url:"{{route('valor')}}",
//     data:proveedor_id,
//      data:{'proveedor_id':proveedor_id,'producto_id':producto_id},
//     success:function(result){
//       alert(result);
//
//       $("#form_create_venta #valor_unitario").val(result);
//     },
//     error:function(){
//       alert("ERROR");
//     }
//   });
//
//
// });
//
// $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
