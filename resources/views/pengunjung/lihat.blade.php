@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('pengunjung') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data pengunjung</strong>
			</div>
			<table class="table">
				<tr>
						<td>Username</td>
						<td>:</td>
						<td>{{ $pengunjung->nama_pengunjung }}</td>
				</tr>

			
				<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{ $pengunjung->Alamat }}</td>
				</tr>
				<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>{{ $pengunjung->ttl }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$pengunjung->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$pengunjung->updated_at}}</td>
				</tr>
		</table>
</div>
@stop