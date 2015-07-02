@extends('main')

@section('content')
<?php
$fecha = Input::get('fecha');
$manifiesto = DB::table('manifiestos')->where('fecha', $fecha)->count();
$confirmador1 = DB::table('manifiestos')->where('fecha', $fecha)->where('opciones_tele_closer', 'OK')->where('confirmado', '1')->count();
$confirmador2 = DB::table('manifiestos')->where('fecha', $fecha)->where('opciones_tele_closer', 'OKT')->where('confirmado', '1')->count();
$confirmador = $confirmador1 + $confirmador2;
$qs = DB::table('manifiestos')->where('fecha', $fecha)->where('updated_at', '!=', $fecha)->where('calificacion', 'QS')->count();
$nqs =DB::table('manifiestos')->where('fecha', $fecha)->where('updated_at', '!=', $fecha)->where('calificacion', 'NQS')->count();
$nt =DB::table('manifiestos')->where('fecha', $fecha)->where('updated_at', '!=', $fecha)->where('calificacion', 'NT')->count();
$shows = DB::table('manifiestos')->where('fecha', $fecha)->where('updated_at', '!=', $fecha)->count();
$nshows =DB::table('manifiestos')->where('fecha', $fecha)->where('updated_at', '!=', $fecha)->where('calificacion', 'NS')->count();
?>
<center><h3>Reportes Mercadeo</h3></center>
<h4>Reporte General</h4>
<table border="1">
	<tr>
		<td>
			# Citas
		</td>
		<td>
			# OKS
		</td>
		<td>
			% OKS
		</td>
		<td>
			Shows
		</td>
		<td>
			% Shows
		</td>
		<td>
			QS
		</td>
		<td>
			% QS
		</td>
		<td>
			NQS
		</td>
		<td>
			% NQS
		</td>
		<td>
			NT
		</td>
		<td>
			% NT
		</td>
		<td>
			NS
		</td>
		<td>
			% NS
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $manifiesto; ?>
		</td>
		<td>
			<?php echo $confirmador; ?>
		</td>
		<td>

		</td>
		<td>
			<?php echo $shows; ?>
		</td>
		<td>

		</td>
		<td>
			<?php echo $qs; ?>
		</td>
		<td>

		</td>
		<td>
			<?php echo $nqs; ?>
		</td>
		<td>
		</td>
		<td>
			<?php echo $nt; ?>
		</td>
		<td>
		</td>
		<td>
			<?php echo $nshows; ?>
		</td>
		<td>
		</td>
	</tr>
</table>
<?php
$supervisores = DB::table('manifiestos')->where('fecha', $fecha)->groupBy('supervisor')->get();
foreach ($supervisores as $value) {
	$manifiesto = DB::table('manifiestos')->where('fecha', $fecha)->where('supervisor', $value->supervisor)->count();
	$confirmador1 = DB::table('manifiestos')->where('fecha', $fecha)->where('supervisor', $value->supervisor)->where('opciones_tele_closer', 'OK')->where('confirmado', '1')->count();
	$confirmador2 = DB::table('manifiestos')->where('fecha', $fecha)->where('supervisor', $value->supervisor)->where('opciones_tele_closer', 'OKT')->where('confirmado', '1')->count();
	$confirmador = $confirmador1 + $confirmador2;
	$qs = DB::table('manifiestos')->where('supervisor', $value->supervisor)->where('fecha', $fecha)->where('updated_at', '!=', $fecha)->where('calificacion', 'QS')->count();
	$nqs =DB::table('manifiestos')->where('supervisor', $value->supervisor)->where('fecha', $fecha)->where('updated_at', '!=', $fecha)->where('calificacion', 'NQS')->count();
	$nt =DB::table('manifiestos')->where('supervisor', $value->supervisor)->where('fecha', $fecha)->where('updated_at', '!=', $fecha)->where('calificacion', 'NT')->count();
	$shows = DB::table('manifiestos')->where('supervisor', $value->supervisor)->where('fecha', $fecha)->where('updated_at', '!=', $fecha)->count();
	$nshows =DB::table('manifiestos')->where('supervisor', $value->supervisor)->where('fecha', $fecha)->where('updated_at', '!=', $fecha)->where('calificacion', 'NS')->count();
echo "

	<h4>Supervisor ".$value->supervisor."</h4>
	<table border='1'>
		<tr>
			<td>
				# Citas
			</td>
			<td>
				# OKS
			</td>
			<td>
				% OKS
			</td>
			<td>
				Shows
			</td>
			<td>
				% Shows
			</td>
			<td>
				QS
			</td>
			<td>
				% QS
			</td>
			<td>
				NQS
			</td>
			<td>
				% NQS
			</td>
			<td>
				NT
			</td>
			<td>
				% NT
			</td>
			<td>
				NS
			</td>
			<td>
				% NS
			</td>
		</tr>
		<tr>
			<td>
				".$manifiesto."
			</td>
			<td>
				".$confirmador."
			</td>
			<td>
			</td>
			<td>
				".$shows."
			</td>
			<td>
			</td>
			<td>
				".$qs."
			</td>
			<td>
			</td>
			<td>
				".$nqs."
			</td>
			<td>
			</td>
			<td>
				".$nt."
			</td>
			<td>
			</td>
			<td>
				".$nshows."
			</td>
			<td>
			</td>
		</tr>
	</table>";
}
?>
@stop

@section('footer')

@stop