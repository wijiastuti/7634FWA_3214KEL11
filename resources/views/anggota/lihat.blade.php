@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('anggota') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data anggota</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ $anggota->nama }}</td>
				</tr>

			
				<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{ $anggota->alamat }}</td>
				</tr>
				<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>{{ $anggota->ttl }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$anggota->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$anggota->updated_at}}</td>
				</tr>
		</table>
</div>
@stop