@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('penulis') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data penulis</strong>
			</div>
			<table class="table">
				<tr>
						<td>Username</td>
						<td>:</td>
						<td>{{ $penulis->nama_penulis }}</td>
				</tr>
				<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>{{ $penulis->ttl }}</td>
				</tr>
				<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{ $penulis->Alamat }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$penulis->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$penulis->updated_at}}</td>
				</tr>
		</table>
</div>
@stop