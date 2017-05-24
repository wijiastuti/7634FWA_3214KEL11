@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('buku') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data buku</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama Buku</td>
						<td>:</td>
						<td>{{ $buku->nama_buku }}</td>
				</tr>
				<tr>
						<td>Nama Penulis</td>
						<td>:</td>
						<td>{{ $buku->penulis->nama_penulis }}</td>
				</tr>
				<tr>
						<td>Nama Penerbit</td>
						<td>:</td>
						<td>{{ $buku->penerbit->nama_penerbit }}</td>
				</tr>
				<tr>
						<td>Tahun terbit</td>
						<td>:</td>
						<td>{{ $buku->thn_terbit }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$buku->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$buku->updated_at}}</td>
				</tr>
		</table>
</div>
@stop