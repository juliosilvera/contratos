@extends('main')

@section('content')
<center><h1>Pre Manifiestos</h1></center>

<div id="table_div" style="width:100%; overflow:scroll"></div>
<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['table']}]}"></script>
<script>
google.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('boolean', 'Confirmado');
        data.addColumn('string', 'Sala');
        data.addColumn('string', 'Fecha');
        data.addColumn('string', 'Hora de Invitacion');
        data.addColumn('string', 'Nombres');
        data.addColumn('string', 'Edad');
        data.addColumn('string', 'Conyugue');
        data.addColumn('string', 'Edad');
        data.addColumn('string', 'Estado Civil');
        data.addColumn('string', 'Telefono casa 1');
        data.addColumn('string', 'Telefono casa 2');
        data.addColumn('string', 'Telefono celular 1');
        data.addColumn('string', 'Telefono celular 2');
        data.addColumn('string', 'Telefono oficina');
        data.addColumn('string', 'Tarjeta');
        data.addColumn('string', 'Fuente');
        data.addColumn('string', 'Operador');
        data.addColumn('string', 'Supervisor');
        data.addColumn('string', 'Tipo cita');
        data.addColumn('string', 'Tele closer');
        data.addColumn('string', 'Opciones tele closer');
        data.addColumn('string', 'gerente');

        data.addRows([
        @foreach($data as $k)



            [{{$k->confirmado}}, '{{$k->sala}}', '{{$k->fecha}}', '{{$k->hora_invitacion}}', '{{$k->nombres1}}', '{{$k->edad1}}',
            '{{$k->nombres2}}', '{{$k->edad2}}', '{{$k->estado_civil}}', '{{$k->telefono_casa1}}', '{{$k->telefono_casa2}}',
            '{{$k->telefono_celular1}}', '{{$k->telefono_celular2}}', '{{$k->telefono_oficina}}', '{{$k->tarjetas}}', '{{$k->fuente}}',
            '{{$k->operador}}', '{{$k->supervisor}}', '{{$k->tipo_cita}}', '{{$k->tele_closer}}"', '{{$k->opciones_tele_closer}}',
            '{{$k->gerente}}'],
        @endforeach

        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true});
      }
</script>
@stop
