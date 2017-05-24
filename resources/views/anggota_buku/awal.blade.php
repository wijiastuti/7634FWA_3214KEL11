@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Peminjaman Buku/strong>
			<a href="{{ url('anggota_buku/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> anggota buku</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama Peminjam</th>
									<th>Nama Buku</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuaBuku as $anggota_buku)
									<tr>
									<td>{{ $x++ }} </td>
									<td>{{ $anggota_buku->anggota->nama }}</td>
									<td>{{ $anggota_buku->buku->nama_buku }}</td>
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('anggota_buku/edit/'.$anggota_buku->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('anggota_buku/'.$anggota_buku->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('anggota_buku/hapus/'.$anggota_buku->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop