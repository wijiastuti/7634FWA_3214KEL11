@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('penerbit') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data penerbit</strong>
			</div>
			<table class="table">
				<tr>
						<td>Username</td>
						<td>:</td>
						<td>{{ $penerbit->nama_penerbit }}</td>
				</tr>
			
				<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{ $penerbit->Alamat }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$penerbit->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$penerbit->updated_at}}</td>
				</tr>
		</table>
</div>
@stop