@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('kritiksaran') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data kritiksaran</strong>
			</div>
			<table class="table">
				<tr>
						<td>kritik</td>
						<td>:</td>
						<td>{{ $kritiksaran->kritik }}</td>
				</tr>
			
				<tr>
						<td>saran</td>
						<td>:</td>
						<td>{{ $kritiksaran->saran }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$kritiksaran->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$kritiksaran->updated_at}}</td>
				</tr>
		</table>
</div>
@stop