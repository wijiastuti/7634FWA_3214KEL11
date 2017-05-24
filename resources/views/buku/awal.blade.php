@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data buku</strong>
			<a href="{{ url('buku/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> buku</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama Buku</th>
									<th>Nama Penulis</th>
									<th>Nama Penerbit</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuaBuku as $buku)
									<tr>
									<td>{{ $x++ }} </td>
									<td>{{ $buku->nama_buku }}</td>
									<td>{{ $buku->penulis->nama_penulis }}</td>
									<td>{{ $buku->penerbit->nama_penerbit }}</td>
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('buku/edit/'.$buku->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('buku/'.$buku->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('buku/hapus/'.$buku->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop