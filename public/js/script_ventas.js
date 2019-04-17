$(document).ready(function() {

    // Ajax para obtener valor unitario del producto
    $("#proveedor_id").change(obtener_valor);
    $("#producto_id").change(obtener_valor);

    function obtener_valor() {
        var proveedor_id = $("#proveedor_id").val();
        var producto_id = $("#producto_id").val();

        $.ajax({
            url: '/ventas/getValor/' + producto_id,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                if (proveedor_id == 1) {
                    var valor = response.agrocosur;
                } else if (proveedor_id == 2) {
                    var valor = response.centralpecuaria;
                } else if (proveedor_id == 3) {
                    var valor = response.disprovet;
                } else if (proveedor_id == 4) {
                    var valor = response.erma;
                }

                $("#valor_unitario").val(valor);
                obtener_total();

            }


        });

    }
    // End Ajax

    // Script para obtner valor total desde la Cantidad
    $("#cantidad").keyup(obtener_total);
    $("#valor_unitario").keyup(obtener_total);


    function obtener_total(){
      var cantidad = $("#cantidad").val();
      var valor_unitario = $("#valor_unitario").val();
      var valor_venta = cantidad * valor_unitario;
      $("#valor_venta").val(valor_venta);
    }
    // End Script

});
