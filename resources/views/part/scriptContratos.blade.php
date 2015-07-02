<script>
$( "#num_anios" ).change(function() {
    var millas_anio = $("#millas_anio").val();
    var num_anios = $("#num_anios").val();
  var multi = millas_anio * num_anios;
  $("#total_millas").val(multi);
});
$("#no_cuotas").change(function(){
    var saldo_financiar = $("#saldo_financiar").val();
    var no_cuotas = $("#no_cuotas").val();
    var interes = 12.368472 / 1200;
    var pmt = PMT(interes, no_cuotas, -saldo_financiar);

    $("#valor_cuotas").val(pmt.toFixed(2));

});

function PMT(i, n, p) {
 return i * p * Math.pow((1 + i), n) / (1 - Math.pow((1 + i), n));
}
$(function() {
    $( ".datepicker" ).datepicker({
        dateFormat: "yy-mm-dd"
    });
    });
</script>