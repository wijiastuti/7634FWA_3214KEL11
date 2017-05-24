@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('anggota_buku') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data Peminjaman Buku</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama anggota</td>
						<td>:</td>
						<td>{{ $anggota_buku->anggota->nama }}</td>
				</tr>
				<tr>
						<td>Nama buku</td>
						<td>:</td>
						<td>{{ $anggota_buku->buku->nama_buku }}</td>
				</tr>
				<tr>
						<td>Tanggal pinjam</td>g
						<td>:</td>
						<td>{{ $anggota_buku->tgl_pinjam }}</td>
				</tr>
					<tr>
						<td>Tanggal kembali</td>g
						<td>:</td>
						<td>{{ $anggota_buku->tgl_kembali}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$anggota_buku->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$anggota_buku->updated_at}}</td>
				</tr>
				
		</table>
</div>
@stop